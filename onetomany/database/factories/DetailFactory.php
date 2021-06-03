<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detail;
use Faker\Generator as Faker;

$factory->define(Detail::class, function (Faker $faker) {
    return [
        'argument' => $faker -> word,
        'likes' => $faker -> numberBetween(0, 10000)
    ];
});
