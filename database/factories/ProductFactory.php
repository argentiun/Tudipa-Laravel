<?php

use Faker\Generator as Faker;
Use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => $faker->word, // Nos devuelve con esto una palabra aleatoria.
      'description' => $faker->sentence(10), // Nos devuelve una oracion compuesta de 10 palabras.
      'long_description' => $faker->text, // Nos devuelve un texto.
      'price' => $faker->randomFloat(2, 5, 3000) //Nos genera dos decimales, el tercer parametro es para que no valga mas que eso.
    ];
});
