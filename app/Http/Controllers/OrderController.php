<?php

namespace App\Http\Controllers;

use App\Mail\SendMailOnOrder;
use App\Order;
use App\OrderedUserInfo;
use App\OrderFile;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Webpatser\Uuid\Uuid;

class OrderController extends Controller
{
    public function store(Request $request, Product $product)
    {
        //getting all checkout field value into a array
        $checkoutFromDetails = $request->checkout;
        $productPrice = $product->price;
        if (!empty($productPrice)) {
            if ($product->discount > 0) {
                $productPrice = $product->price - $product->discount;
            }
            if (isset($checkoutFromDetails['quantity'])) {
                $productPrice = $productPrice * $checkoutFromDetails['quantity'];
            }
            if (isset($checkoutFromDetails['machine_quantity'])) {
                $productPrice = $productPrice * $checkoutFromDetails['machine_quantity'];
            }
        }
        //for new customer id
        $totalOrder = Order::all()->count();
        $productCategory = $product->category->name;
        $serialNum = !empty($totalOrder) ? $totalOrder + 1 : 1;
        $newCustomerId = $productCategory[0] . '00200' . +$serialNum;
        // storing all values into a array to insert into database
        $orderData['custom_order_id'] = $newCustomerId;
        $orderData['product_id'] = $product->id;
        $orderData['user_id'] = auth()->user()->id;
        $orderData['price'] = $productPrice;
        $orderData['status'] = 1;
        $orderData['process'] = 1;
        $order = Order::create($orderData);
        $checkoutFromDetails['order_id'] = $order->id;
        OrderedUserInfo::create($checkoutFromDetails);
        $userMail = auth()->user()->email;
        if($userMail){
        $sendToMails = ['hej@danpanel.dk', $userMail];
        Mail::to($sendToMails)->send(new SendMailOnOrder($order));
        return redirect()->route('customer.order.details', $order->id)->withSuccess('Din ordre er placeret.');
        }else{
            $sendToMails = ['hej@danpanel.dk', 'chandrapub@gmail.com'];
        Mail::to($sendToMails)->send(new SendMailOnOrder($order));
        return redirect()->route('customer.order.details', $order->id)->withSuccess('Din ordre er placeret.');
        }
    }

    public function uploadOrderFile(Order $order, Request $request)
    {
        $data['order_id'] = $order->id;
        $data['user_id'] = auth()->user()->id;
        if ($request->hasFile('orderFile')) {
            $file = $request->file('orderFile');
            $file = $this->uploadFile($file);
            $data['file'] = $file;
        }
        OrderFile::create($data);
        return redirect()->back()->withSuccess('Filen er blevet uploadet.');
    }

    public function uploadFile($image)
    {
        $name = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
        // uploading images to folder
        $image->move('product/orders', $name);
        return $name;
    }

    public function customerAcceptOrder(Order $order)
    {
        $order->customer_response = 1;
        $order->save();
        return redirect()->back()->withSuccess('Tilbud accepteret');
    }

    public function customerRejectOrder(Order $order)
    {
        $order->customer_response = 0;
        $order->status = 0;
        $order->save();
        return redirect()->back()->withError('Bestilling annulleret');
    }

    public function updateOrderPirce(Order $order, Request $request)
    {
        $order->normal_price = $request->normal_price;
        $order->offer_price = $request->offer_price;
        $order->payment_type = $request->payment_type;
        $order->unit_type = $request->unit_type;
        $order->business_partner = $request->business_partner;
        $order->save();
    }
}
