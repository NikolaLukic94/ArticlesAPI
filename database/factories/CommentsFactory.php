<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text(50),
        'article_id'  => function () {
            return factory('App\Article')->create()->id;
        },
        'author_id' => function () {
            return factory('App\User')->create()->id;
        },        
    ];
});
