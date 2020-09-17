<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'user_access',
        'user_id',
        'priority',
        'video_url',
        'header_contents'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class)->orderBy('priority', 'asc');
    }

    public function categoryUserAccessChecked($val)
    {
        $access = $this->user_access;
        $pos = strpos($access, $val);

        if ($pos !== false) {
            return 'checked';
        }
    }

}
