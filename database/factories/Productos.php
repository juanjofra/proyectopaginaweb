<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->name,
        'descripcion_corta' => $faker->title,
        'descripcion' => $faker->paragraph,
        'detalle_producto' => $faker->paragraph,
        'precio_venta' => $faker->numberBetween($min = 1000, $max = 9000),
         
        'categoria_id' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
