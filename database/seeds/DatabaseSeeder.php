<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(Configuracion::class);
        factory(App\Producto::class, 10)->create();
    }
}
