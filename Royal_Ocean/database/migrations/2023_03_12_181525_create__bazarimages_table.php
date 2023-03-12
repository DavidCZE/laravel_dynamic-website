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
        if(!Schema::hasTable('Bazarimages')) {
        Schema::create('Bazarimages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bazar_id')->constrained()->onDelete('cascade');
            //$table->foreignIdFor(Bazar::class);
            $table->string('fotka');
            $table->timestamps();
        });}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bazarimages');
    }
};
