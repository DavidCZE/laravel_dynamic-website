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
            $table->string('pnazev');
            $table->string('pcena');
            $table->string('puvodni_fotka')->nullable();
            $table->string('pfotky')->nullable();
            $table->integer('prok_vyroby');
            $table->string('puvod');
            $table->longText('ppopisek');
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
