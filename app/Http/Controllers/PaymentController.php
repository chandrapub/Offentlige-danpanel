<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderPayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createPayment(Order $order)
    {
        if ($_GET['action'] == 'createPay') {
            $datastring = '{"order": {
        "items": [{
            "reference": "' . $order->custom_order_id . '",
            "name": "' . $order->product->name . '",
            "quantity": 1,
            "unit": "' . $order->unit_type . '",
            "unitPrice": 0,
            "taxRate": 0,
            "taxAmount": 0,
            "grossTotalAmount": ' . $order->offer_price * 100 . ',
            "netTotalAmount": ' . $order->offer_price . '
        }
        ],
        "amount": ' . $order->offer_price * 100 . ',
        "currency": "dkk",
        "reference": "' . $order->id . '"
        },
        "checkout": {
            "url": "https://danpanel.dk/checkout",
            "termsUrl": "https://danpanel.dk/checkout/om",
               "shippingCountries":
               [
                   {"countryCode": "DNK"}
               ],
               "consumerType": {
                "supportedTypes": ["B2C", "B2B"],
                   "default": "B2C"
               }       
           },
    }';
            $ch = curl_init('https://api.dibspayment.eu/v1/payments');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datastring);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    'Authorization: live-secret-key-d2054c6bc54a41df9d64646345d01b1e')
            );
            $result = curl_exec($ch);
            echo($result);
        }
    }

    public
    function checkout(Request $request)
    {
        $payId = $request->input('paymentId');
        $ch = curl_init('https://api.dibspayment.eu/v1/payments/' . $payId . '');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array('Content-Type: application/json', 'Accept: application/json',
                'Authorization: live-secret-key-d2054c6bc54a41df9d64646345d01b1e')
        );
        $result = curl_exec($ch);
        $paymentDetails = json_decode($result, true);
        $paymentData = $paymentDetails['payment'];
        $OrderData = $paymentDetails['payment']['orderDetails'];
        $orderId = (int)$OrderData['reference'];
        $receivedAmount = $paymentData['summary']['reservedAmount'] ?? '';
        $paymentFailed = $request->input('paymentFailed');
        $order = Order::find($orderId);
        if ($paymentFailed) {
            return redirect(route('customer.order.details', $orderId))->withError('Betaling mislykkedes.');
        }
        if (!empty($receivedAmount)) {
            $order->customer_response = 1;
            $order->payment_status = 'Betalt';
            $order->save();
            OrderPayment::create([
                'user_id' => auth()->user()->id,
                'order_id' => $orderId,
                'payment_id' => $payId,
                'type' => $order->payment_type,
                'amount' => $OrderData['amount'],
                'orderData' => $result
            ]);
            MailController::sendMailOnOrderPaid($order);
            return redirect(route('customer.order.details', $orderId))->withSuccess('Betalingen er vellykket.');
        }
    }

    public function subscribeOnOrderWithBankInfo(Request $request, Order $order)
    {
        $data = $request->validate([
            'bank_registration_number' => 'required|min:4|max:4',
            'bank_account_number' => 'required|min:6|max:8',
        ]);

        OrderPayment::create([
            'bank_registration_number' => $request->bank_registration_number,
            'bank_account_number' => $request->bank_account_number,
            'type' => $order->payment_type,
            'order_id' => $order->id,
            'user_id' => $order->user_id,
        ]);

        $order->update([
            'customer_response' => 1,
            'payment_status' => 'Abonneret'
        ]);

        MailController::sendMailOnOrderSubscription($order);
        return redirect(route('customer.order.details', $order->id))->withSuccess('Abonnementet er vellykket.');
    }
}
