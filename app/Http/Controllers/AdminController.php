<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Notifications\NewUserCreated;
use App\Notifications\OrderStatusChanged;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function allOrders()
    {
        $orders = Order::whereStatus(1)->where('process', '!=', 4)->orderBy('created_at', 'desc')->get();
        $pageTitle = "All Orders";
        return view('admin.order.orders', compact('orders', 'pageTitle'));
    }

    public function allActiveOrders()
    {
        $orders = Order::whereStatus(1)->where('process', '!=', 4)->where('process', '!=', 1)->orderBy('created_at', 'desc')->get();
        $pageTitle = "All Active Orders";
        return view('admin.order.orders', compact('orders', 'pageTitle'));
    }

    public function allArchiveOrders()
    {
        $orders = Order::whereStatus(1)->where('process', '=', 4)->orderBy('created_at', 'desc')->get();
        $pageTitle = "All Archived Orders";
        return view('admin.order.orders', compact('orders', 'pageTitle'));
    }

    public function allCanceledOrders()
    {
        $orders = Order::whereStatus(0)->orderBy('created_at', 'desc')->get();
        $pageTitle = "All Canceled Orders";
        return view('admin.order.orders', compact('orders', 'pageTitle'));
    }

    public function allCustomers()
    {
        $customers = User::where('role', 'customer')->orderBy('created_at', 'desc')->get();
        return view('admin.customers.index', compact('customers'));
    }

    public function orderDetails(Order $order)
    {
        $pageTitle = "Order Details";
        return view('admin.order.details', compact('order', 'pageTitle'));
    }

    public function orderNextStepChange(Order $order)
    {
        if ($order->status) {
            if ($order->process < 5) {
                $order->process = $order->process + 1;
                $order->accepted_by = \auth()->user()->id;
                $order->save();
                //sending notification
                $order->customer->notify(new OrderStatusChanged($order));
                return redirect()->back()->withSuccess('Order Status Has Changed Successfully.');
            }
            return redirect()->back();
        }
    }

    public function orderBackToStepChange(Order $order)
    {
        if ($order->status) {
            if ($order->process > 0) {
                $order->process = $order->process - 1;
                $order->save();
                //sending notification
                $order->customer->notify(new OrderStatusChanged($order));
                return redirect()->back()->withSuccess('Order Status Has Changed Successfully.');
            }
        }
    }

    public function adminWithCustomerChat(User $user)
    {
        $chats = Chat::whereFrom($user->id)->whereIsSeen(0)->get();
        foreach ($chats as $chat) {
            $chat->is_seen = 1;
            $chat->save();
        }
        return view('admin.chat.index', compact('user'));
    }

    public function orderFileUploadToggle(Order $order)
    {
        if ($order->enableFileUpload) {
            $order->enableFileUpload = 0;
            $msg = 'Order File Upload Enabled';
        } else {
            $order->enableFileUpload = 1;
            $msg = 'Order File Upload Disabled';
        }
        $order->save();
        return redirect()->back()->withSuccess($msg);
    }

    public function orderCencel(Order $order)
    {
        if ($order->status) {
            $order->status = 0;
        }
        $order->save();
        return redirect()->back()->withSuccess("Order has been canceled.");
    }
}
