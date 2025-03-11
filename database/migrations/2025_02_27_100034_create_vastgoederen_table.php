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
        Schema::create('vastgoederen', function (Blueprint $table) {
            $table->id();
            $table->string('titel');
            $table->string('omschrijving');
            $table->string('type');
            $table->string('prijs');
            $table->string('locatie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vastgoederen');
    }
};
