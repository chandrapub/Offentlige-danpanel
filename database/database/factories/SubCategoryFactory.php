<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\SubCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => \App\Category::all()->shuffle()->first()->id,
        'user_id' => User::all()->shuffle()->first()->id
    ];
});
