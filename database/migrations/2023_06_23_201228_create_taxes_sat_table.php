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
        Schema::create('taxes_sat', function (Blueprint $table) {
            $table->id();
            $table->string('code',10);
            $table->string('description', 255);
            $table->string('retention', 10);
            $table->string('transferred', 10);
            $table->string('local_or_federal', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxes_sat');
    }
};
