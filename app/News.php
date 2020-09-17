<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
            $model->status = 1;
            $model->clicks = 0;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function showNewsImage()
    {
        return '/news/images/' . $this->image;
    }

}
