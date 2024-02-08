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
        Schema::create('viaggi', function (Blueprint $table) {
            $table->id();
            $table->string('nome_destinazione', 255);
            $table->unsignedBigInteger('nazione_destinazione');
            $table->integer('posti_disponibili');
            $table->string('descrizione', 255);
            $table->timestamps();

            $table->foreign('nazione_destinazione')->references('id')->on('paesi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viaggi');
    }
};
