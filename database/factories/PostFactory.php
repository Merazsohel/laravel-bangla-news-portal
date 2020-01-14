<?php

/** @var Factory $factory */

use App\Category;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
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

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->title,
        'slug' => Str::slug($title),
        'description' => $faker->sentence,
        'image' => $faker->imageUrl(),
        'categoryId' => 1,
        'status' => true,
        'featuredPosition' => rand(1, 4)
    ];
});
