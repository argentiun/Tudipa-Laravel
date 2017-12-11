<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'), // como la contraseña es algo constante, arrtiba en la primera linea se indica que es estatica.
        'remember_token' => str_random(10), // nos da una cadena aleatoria de 10 caracteres.
    ];
});
