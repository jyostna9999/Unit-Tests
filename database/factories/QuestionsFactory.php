<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'type' => $faker->randomElement($array = array ('Public','Private','Protected')),

    ];
});
