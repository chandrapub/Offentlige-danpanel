<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class SubCategory extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'bgColor',
        'icon',
        'priority',
        'category_id'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    public function category()
{
    return $this->belongsTo(Category::class);
}

    public function products()
    {
        return $this->hasMany(Product::class)->where('status', '=', 1);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class)->where('status', '=', 1);
    }


    public function discountProducts()
    {
        return $this->hasMany(Product::class)->where('status', '=', 1)->where('discount', '>', 0);
    }

}
