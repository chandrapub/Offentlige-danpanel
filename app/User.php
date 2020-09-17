<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

//class User extends Authenticatable implements MustVerifyEmail
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'birth_date',
        'cvr_number',
        'business_name',
        'ean_number',
        'account_type',
        'address',
        'city',
        'zip_code',
        'email_verified_at',
        'provider_id',
        'provider'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        if ($this->role == 'admin')
            return true;
        return false;
    }

    public function isCustomer()
    {
        if ($this->role == 'customer')
            return true;
        return false;
    }

    public function activeOrders()
    {
        return $this->hasMany(Order::class)->whereStatus(1)->where('process', '!=', 4)->orderBy('created_at', 'desc');
    }

    public function completeOrders()
    {
        return $this->hasMany(Order::class)->whereStatus(1)->where('process', '=', 4)->orderBy('created_at', 'desc');
    }

    public function canceledOrders()
    {
        return $this->hasMany(Order::class)->whereStatus(0);
    }

    public function chats()
    {
//        return $this->hasMany(Chat::class, 'to')->orWhere('from', $this->id)->paginate(2);
        return Chat
            ::query()
            ->where('to', '=', $this->id)
            ->orWhere('from', '=', $this->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    }

    public function unReadMessages($user)
    {
        return Chat::whereFrom($user)->whereIsSeen(0)->count();
    }

    public function customerReadMessages()
    {
        return Chat::whereTo($this->id)->whereIsSeen(0)->count();
    }

    public function isUserAbleToOrderFromThisCategory($category)
    {

        if ($this->role == 'admin') return true;
        if ($this->account_type == null) return false;

        $category_accesses = $category;
        $user_role = $this->account_type;

        $result = strpos($category_accesses, $user_role);

        if ($result !== false)
            return true;
        return false;

    }

    public function AuthRouteAPI(Request $request)
    {
        return $request->user();
    }

}
