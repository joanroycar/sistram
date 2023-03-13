<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');

            $table->unsignedBigInteger('dueño_id');
            $table->foreign('dueño_id')->references('id')->on('personas');
            
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            
            
            $table->unsignedBigInteger('persona_sustituida_id');
            $table->foreign('persona_sustituida_id')->nullable()->references('id')->on('personas');
            
            $table->string('placa');
            $table->string('placa_sustituida')->nullable();

            $table->string('numero_flota');
            $table->string('serie_motor');
            $table->string('carnet_seguridad_vial');

            $table->string('soat')->default("1");
            $table->string('status')->default("1");
            
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
        Schema::dropIfExists('vehiculos');
    }
};
