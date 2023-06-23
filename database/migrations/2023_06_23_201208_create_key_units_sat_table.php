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
        Schema::create('key_units_sat', function (Blueprint $table) {
            $table->id();
            $table->string('code',10);
            $table->string('name', 255);
            $table->text('description', 1000)->nullable();
            $table->text('note', 1000)->nullable();
            $table->string('simbol', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key_units_sat');
    }
};
