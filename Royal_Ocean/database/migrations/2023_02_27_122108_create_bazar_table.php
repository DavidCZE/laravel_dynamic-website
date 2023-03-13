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
        Schema::create('bazar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nazev');
            $table->string('cena');
            $table->string('uvodni_fotka')->nullable();
            $table->string('fotky')->nullable();
            $table->string('znacka');
            $table->string('rok_vyroby');
            $table->string('uvod');
            $table->longText('popisek');
            $table->string('lokace');
            $table->string('email');
            $table->string('cislo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bazar');
    }
};
