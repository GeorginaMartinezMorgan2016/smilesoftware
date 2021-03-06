<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdontologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontologos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->unique();
            $table->string('apellidos');
            $table->string('identidad')->unique();
            $table->string('telefonoCelular');
            $table->string('telefonoFijo');
            $table->string('email');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->unsignedInteger('especialidad_id');
            $table->string('intervalos');
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
        Schema::dropIfExists('odontologos');
    }
}
