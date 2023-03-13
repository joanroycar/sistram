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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            
            $table->string('cedula');
            $table->string('telefono')->nullable();

            $table->string('domicilio')->nullable();     
            
            $table->foreignId('tipo_documento_id')
            ->nullable()
            ->constrained('tipo_documentos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('empresa_id')
            ->nullable()
            ->constrained('empresas')
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
        Schema::dropIfExists('personas');
    }
};
