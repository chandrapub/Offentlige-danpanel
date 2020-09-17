<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderInfo()
    {
        return $this->hasOne(OrderedUserInfo::class);
    }

    public function orderStatusClass($step)
    {
        if ($this->process == 4)
            return 'btn-complete';
        if ($this->process > $step)
            return 'btn-complete';
        if ($this->process == $step)
            return 'btn-process';
        return '';
    }

    public function runningOrderStatus()
    {
        if ($this->status != 1)
            return 'Annulleret';
        if ($this->process == 4)
            return 'afsluttet';
        return 'Under behandling';
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function acceptedAdmin()
    {
        return $this->belongsTo(User::class, 'accepted_by');
    }

    public function files()
    {
        return $this->hasMany(OrderFile::class);
    }

    public function payment()
    {
        return $this->hasOne(OrderPayment::class);
    }

    public function unitType()
    {
        switch ($this->unit_type) {
            case 'pcs':
                return 'Pr. enhed';
                break;
            case 'hourly':
                return 'Pr. time';
                break;
            case 'day':
                return 'Pr. dag';
                break;
            case 'weekly':
                return 'Pr. uge';
                break;
            case 'monthly':
                return 'Måned';
                break;
            case 'quarter':
                return 'Pr. kvarter';
                break;
            case 'Halfyearly':
                return 'Pr. halvår';
                break;
            case 'yearly':
                return 'År';
                break;
            default:
                return '';
        }
    }
}
