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
        Schema::create('fiscal_regimes_sat', function (Blueprint $table) {
            $table->id();
            $table->string('code',10);
            $table->string('description', 255);
            $table->string('physical', 5);
            $table->string('moral', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiscal_regimes_sat');
    }
};
