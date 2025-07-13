<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empresa_infos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('telefono');
            $table->string('correo');
            $table->string('sitio_web');
            $table->text('direccion');
            $table->string('enlace_whatsapp')->nullable();
            $table->string('enlace_facebook')->nullable();
            $table->string('enlace_instagram')->nullable();
            $table->string('enlace_youtube')->nullable();
            $table->string('enlace_github')->nullable();
            $table->string('enlace_tiktok')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_infos');
    }
};
