<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
		'name' => $faker->name,
		'nickname' => $faker->name,
		'password' => bcrypt('123456'), // password
		'remember_token' => Str::random(10),
    ];
});
