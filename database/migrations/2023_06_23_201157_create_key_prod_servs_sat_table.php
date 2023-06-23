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
        Schema::create('key_prod_servs_sat', function (Blueprint $table) {
            $table->id();
            $table->string('code',10);
            $table->text('description', 1000);
            $table->string('include_transferred_iva', 50);
            $table->string('include_transferred_ieps', 50);
            $table->string('border', 10);
            $table->text('similar_words', 1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('key_prod_servs_sat');
    }
};
