<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    $faker->addProvider(new Faker\Provider\Internet($faker));
    $faker->addProvider(new Faker\Provider\DateTime($faker));
    $faker->addProvider(new Faker\Provider\Image($faker));
    return [
        'titulo' => $faker->text,
        'categoria' => $faker->name,
        'tipo'  => $faker->name,
        'ano'  => $faker->year,
        'imagem'  => $faker->image,
        'banco_dados' => $faker->name,
        'descricao' => $faker->text,
        'link' => $faker->url,
    ];
});
