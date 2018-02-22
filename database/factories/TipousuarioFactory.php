<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Tipousuario::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(3, false) //crear oraciones con solo 3 palabras
    ];
});
