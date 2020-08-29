<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tienda')->nullable();
            $table->string('correo_contacto')->nullable();
            $table->string('telefono_contacto')->nullable();
            $table->text('direccion_tienda')->nullable();
            $table->text('horario_atencion')->nullable();
            $table->text('nosotros')->nullable();
            $table->string('mensaje_delivery')->nullable();
            $table->string('enlace_facebook')->nullable();
            $table->string('enlace_twitter')->nullable();
            $table->string('enlace_instagram')->nullable();
            $table->string('tipo_moneda')->nullable();
            $table->string('banner_1')->nullable();
            $table->string('banner_2')->nullable();
            $table->string('banner_3')->nullable();
            $table->integer('producto_select_banner_1')->nullable();
            $table->integer('producto_select_banner_2')->nullable();
            $table->integer('producto_select_banner_3')->nullable();
            $table->string('oferta_banner_1')->nullable();
            $table->string('oferta_banner_2')->nullable();
            $table->integer('producto_select_oferta_banner_1')->nullable();
            $table->integer('producto_select_oferta_banner_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracions');
    }
}
