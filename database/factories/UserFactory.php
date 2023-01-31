<?php

namespace Database\Factories;



use App\Models\User;
use Faker\Generator as Faker;



// public function definition()
// {
//     return [
//         'login' => $this->faker->unique()->name,
//         //'email' => $this->faker->unique()->safeEmail,
//         //'email_verified_at' => now(),
//         'password' => $this->faker->word, // password
//         //'remember_token' => Str::random(10),
//     ];
// }



$factory->define(User::class, function (Faker $faker) {
    $login = $faker->unique()->word;
    return [
        'login' => $login,
        'password' => bcrypt($login) //bcrypt -> es el mecanismo de encriptación por defecto que utiliza Laravel.
    ];
});
