<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [

        'title' => $faker -> sentence,
        'content' => $faker -> text,
        'user_id' => 1

    ];
});
