<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerLoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password', 'account_type');

        if (Auth::attempt($credentials, $request->has('remember'))) { //this if validate if the user is on the database line 1
            return redirect()->back();
            //this redirect if user is the db line 2
        }


        return redirect()
            ->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);

    }
}
