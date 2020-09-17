<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerNewCustomer(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string'],
            'phone' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        //return $data;
        $user = User::create($data);
        $user->sendEmailVerificationNotification();
        MailController::sendMailToAdminOnNewUserRegister($user);
        return view('auth.verify');
    }
}
