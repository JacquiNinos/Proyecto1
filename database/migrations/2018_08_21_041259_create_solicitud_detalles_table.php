<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad_sol');
            $table->integer('cantidad_entrada');
            $table->unsignedInteger('solicitud_id');
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
            $table->unsignedInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materiales');
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
        Schema::dropIfExists('solicitud_detalles');
    }
}
