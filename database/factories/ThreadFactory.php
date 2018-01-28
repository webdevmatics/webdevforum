<?php

use Faker\Generator as Faker;

$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'subject' => $faker->word,
        'thread' => $faker->text,
        'type' => $faker->word,
    ];
});
