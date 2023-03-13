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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('ruc',245);
            $table->string('razon_social',245);
            $table->integer('cantidad_conductor');
            $table->integer('cantidad_paradero');
            $table->foreignId('zona_id')
            ->nullable()
            ->constrained('zonas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            
            $table->unsignedBigInteger('resolucion_id');
            $table->foreign('resolucion_id')->references('id')->on('resolucions');
            
            $table->unsignedBigInteger('nueva_resolucion_id');
            $table->foreign('nueva_resolucion_id')->nullable()->references('id')->on('resolucions');

            $table->foreignId('tipo_organizacion_id')
            ->nullable()
            ->constrained('tipo_organizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

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
        Schema::dropIfExists('empresas');
    }
};
