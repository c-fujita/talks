<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reference;
use Faker\Generator as Faker;

$factory->define(Reference::class, function (Faker $faker) {
    return [
        //
        // 'customer_id' => factory(App\Reference::class),
        // 'user_name' => $faker->userName,
        // 'title' => $faker->word,
        // 'body' => $faker->word,
        // 'tag' => $faker->word,
        // 'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        // 'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),

        'customer_id' => factory(Reference::class),
        'user_name' => $faker->name,
        'title' => $faker->word,
        'body' => $faker->realText,
        'tag' => $faker->word,
        'created_at' => $faker->date,
        'updated_at' => $faker->date,
    ];
});
