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
        Schema::create('produkty', function (Blueprint $table) {
            $table->id();
            $table->string('nazev');
            $table->string('cena');
            $table->string('uvodni_fotka')->nullable();
            $table->string('fotky')->nullable();
            $table->integer('rok_vyroby');
            $table->string('uvod');
            $table->longText('popisek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkty');
    }
};
