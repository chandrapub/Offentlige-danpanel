<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
            $model->status = 1;
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class)->orderBy('priority', 'asc');
    }

    public function showProductImage()
    {
        return '/product/images/' . $this->image;
    }

    public function checkoutLabel()
    {
        return $this->hasOne(DefaultCheckoutFromLabel::class);
    }


}
