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
        Schema::create('paraderos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',245);
            $table->text('descripcion')->nullable();
            $table->foreignId('zona_id')
            ->nullable()
            ->constrained('zonas')
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
        Schema::dropIfExists('paraderos');
    }
};
