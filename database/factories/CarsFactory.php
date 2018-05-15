<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'model' => $faker->name,
        'year'   => $faker->year($max = 'now'),
        //'year' => $faker-> numberBetween($min = 1950, $max = 2018),
        //'year' => $faker->randomNumber(2000,2005,2007),
       // 'year' => $faker->randomElement($array= array(000, 2005, 2007, 2009, 2015)),

    ];
});

