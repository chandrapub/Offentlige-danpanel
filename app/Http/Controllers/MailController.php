<?php

namespace App\Http\Controllers;

use App\Mail\SendMailOnOrderPaid;
use App\Mail\SendMailOnUserSubscription;
use App\Mail\SendMailToAdminOnCreateUserAccount;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class MailController extends Controller
{
     public static function mailOnContactFomSubmission(Request $request)
    {
        Mail::to('hej@danpanel.dk')->send(new ContactMailController($request));
        return Redirect::to(URL::previous())->withSuccess('Mail Sent.');
        // return Redirect::to(URL::previous() ."#referencer")->withSuccess('Mail Sent.');
        
    }
    public static function sendMailToAdminOnNewUserRegister($user)
    {
        $sendToMail = 'hej@danpanel.dk';
        $mail = Mail::to($sendToMail)->send(new SendMailToAdminOnCreateUserAccount($user));
        return $mail ? true : false;
    }

    public static function sendMailOnOrderPaid($order)
    {
        $sendToMail = ['hej@danpanel.dk', $order->customer->email];
        Mail::to($sendToMail)->send(new SendMailOnOrderPaid($order));
    }

    public static function sendMailOnOrderSubscription($order)
    {
        $sendToMail = ['hej@danpanel.dk', $order->customer->email];
        Mail::to($sendToMail)->send(new SendMailOnUserSubscription($order));
    }
    
     public static function sendMailOnContactForm($order)
    {
        $sendToMail = ['hej@danpanel.dk', $order->customer->email];
        Mail::to($sendToMail)->send(new SendMailOnUserSubscription($order));
    }
}
