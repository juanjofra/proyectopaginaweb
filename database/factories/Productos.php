<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'nombre'=> $faker->name,
        'descripcion' => $faker->paragraph,
        'precio_compra' => $faker->numberBetween($min = 1000, $max = 9000),
        'precio_venta' => $faker->numberBetween($min = 1000, $max = 9000),
         
        'categoria_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
