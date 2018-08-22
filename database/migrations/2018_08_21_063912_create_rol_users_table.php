<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('ci');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->unsignedInteger('oficina_id');
            $table->foreign('oficina_id')->references('id')->on('oficinas');
             $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('rol_users');
    }
}
