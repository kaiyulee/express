<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(App\Models\User::class, function ($faker) {
    return [
        'username' => $faker->unique()->userName,
        'email' => $faker->email,
        'password' => str_random(10),
        'website' => $faker->url,
        'login_at' => $faker->dateTimeThisYear,
        'login_ip' => $faker->ipv4,
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});

$factory->define(App\Models\Article::class, function($faker) {
    return [
        'title' => $faker->unique()->sentence,
        'author'=> $faker->unique()->userName,
        'content' => $faker->text,
        'source' => $faker->url,
        'category' => $faker->randomDigitNotNull,
        'hits' => $faker->numberBetween,
        'like' => $faker->numberBetween,
        'dislike' => $faker->numberBetween,
        'share' => $faker->numberBetween,
        'published_at' => $faker->dateTimeThisYear,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});

$factory->define(App\Models\Category::class, function($faker) {
    return [
        'parent_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'alias' => $faker->unique()->word,
        'status' =>  $faker->numberBetween(0,1),
        'activated_at' => $faker->dateTimeThisYear,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});

$factory->define(App\Models\Comment::class, function($faker) {
    return [
        'body' => $faker->text,
        'written_by' => $faker->userName,
        'referer_user' => $faker->numberBetween,
        'referer_article' => $faker->numberBetween,
        'level' => $faker->numberBetween(0,1),
        'like' => $faker->numberBetween,
        'dislike' => $faker->numberBetween,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});

$factory->define(App\Models\Notification::class, function($faker) {
    return [
        'type' => $faker->optional()->numberBetween(0,2),
        'is_read' => $faker->numberBetween(0,1),
        'msg' => $faker->text(80),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});

// $factory->define(App\Models\Post::class, function($faker) {
//     return [
//         'title' => $faker->words(6),
//         'content' => $faker->paragraph,
//         'summary' => $faker->paragraph,
//         'slug' => $faker->unique()->word,
//         'seen' => $faker->numberBetween(0,1),
//         'active' => $faker->numberBetween(0,1),
//         'user_id' => $faker->randomNumber,
//         'created_at' => $faker->dateTimeThisYear,
//         'updated_at' => $faker->dateTimeThisYear
//     ];
// });
