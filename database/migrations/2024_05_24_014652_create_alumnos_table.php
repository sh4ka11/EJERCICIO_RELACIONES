<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Alumno;
USE App\Models\Modulo;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
           $table->id();
           $table->string('nombre');
            $table->string('apellidos');
            $table->integer('dni');
            $table->unsignedBigInteger('modulo_id')->nullable();
            $table->foreign('modulo_id') 
                  ->references('id')
                  ->on('modulos')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
