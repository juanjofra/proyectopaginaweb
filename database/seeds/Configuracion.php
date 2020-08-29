<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Configuracion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configuracions')->insert([
            'nombre_tienda' => '',
            'correo_contacto' => '',
            'telefono_contacto' => '',
            'direccion_tienda' => '',
            'horario_atencion' => '',
            'enlace_facebook' => '',
            'enlace_twitter' => '',
            'enlace_instagram' => '',
            'nosotros' => '',
            'mensaje_delivery' => '',
            'tipo_moneda' => 'Guaranies',
            'banner_1' => '',
            'banner_2' => '',
            'banner_3' => '',
            'producto_select_banner_1' => 0,
            'producto_select_banner_2' => 0,
            'producto_select_banner_3' => 0,
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
