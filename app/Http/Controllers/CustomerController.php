<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function home()
    {
        $page = 'dashboard';
        $dashboardHeader = 'Dashboard';
        return view('customer.index', compact('dashboardHeader', 'page'));
    }

    public function profile()
    {
        $page = 'profile';
        $dashboardHeader = 'Profile';
        $user = auth()->user();
        return view('customer.profile', compact('dashboardHeader', 'page', 'user'));
    }

    public function completeProfile()
    {
        $user = auth()->user();

        if (!empty($user->account_type))
            return redirect()->route('customer.profile')->withSuccess('Profilen blev aktiveret.');
        $page = 'Complete profile';
        $dashboardHeader = 'Komplet Profil';
        return view('customer.complete-profile', compact('dashboardHeader', 'page', 'user'));
    }

    public function orders()
    {
        $page = 'activeOrders';
        $dashboardHeader = 'Aktive Ordrer';
        $orders = auth()->user()->activeOrders;
        return view('customer.orders', compact('orders', 'dashboardHeader', 'page'));

    }

    public function completeOrders()
    {
        $page = 'completeOrders';
        $dashboardHeader = 'Komplette Ordrer';
        $orders = auth()->user()->completeOrders;
        return view('customer.orders', compact('orders', 'dashboardHeader', 'page'));

    }

    public function canceledOrders()
    {
        $page = 'canceledOrders';
        $dashboardHeader = 'Annullerede Ordrer';
        $orders = auth()->user()->canceledOrders;
        return view('customer.orders', compact('orders', 'dashboardHeader', 'page'));

    }

    public function orderDetails(Order $order)
    {
        $page = 'activeOrders';
        $dashboardHeader = 'Ordre Detaljer';
        return view('customer.order-details', compact('order', 'dashboardHeader', 'page'));
    }


    public function cancelOrder(Order $order)
    {
        if ($order->status) {
            $order->status = 0;
        }
        $order->save();

        return redirect()->back()->withSuccess("Bestillingen er annulleret.");
    }

    public function customerChat()
    {
        $user = auth()->user();
        $chats = Chat::whereTo($user->id)->whereIsSeen(0)->get();
        foreach ($chats as $chat) {
            $chat->is_seen = 1;
            $chat->save();
        }


        $page = 'chat';
        $dashboardHeader = 'Indbakke Beskeder';
        return view('customer.chat', compact('user', 'dashboardHeader', 'page'));

    }

    public function updateProfile(User $user, Request $request)
    {
        $data = $request->all();

        if ($request->new_password != null) {
            if ($request->new_password == $request->confirm_password)
                $data['password'] = Hash::make($request->new_password);
            else
                return redirect()->back()->withError("Adgangskoden stemte ikke overens");
        }

        $user->update($data);

        return redirect()->back()->withSuccess("Profil opdateret.");
    }
}
