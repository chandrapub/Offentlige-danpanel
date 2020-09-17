<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessageToCustomer(User $user, Request $request)
    {
        $data['message'] = $request->message;
        $data['from'] = auth()->user()->id;
        $data['to'] = $user->id;
        $data['is_seen'] = 0;
        Chat::create($data);
        return redirect()->back()->withSuccess('Message Sent.');
    }

    public function sendMessageToAdmin(User $user, Request $request)
    {

        if ($user->chats()->count() > 0) {
            $admin = $user->chats()->first();
            $adminId = $admin->from;
        } else {
            $admin = User::where('role', 'admin')->first();
            $adminId = $admin->id;
        }

        $data['message'] = $request->message;
        $data['from'] = auth()->user()->id;
        $data['to'] = $adminId;
        $data['is_seen'] = 0;

        Chat::create($data);
        return redirect()->back()->withSuccess('Message Sent.');
    }


}
