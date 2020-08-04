<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'PC',
            'descripcion' => 'Categoria para PC',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Play Station 4',
            'descripcion' => 'Categoria para Play Station 4',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Auricular',
            'descripcion' => 'Categoria para Uricular',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Pantallas',
            'descripcion' => 'Categoria para Pantallas',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Mouses',
            'descripcion' => 'Categoria para Mouses',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
