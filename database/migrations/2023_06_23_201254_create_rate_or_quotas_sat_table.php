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
        Schema::create('rate_or_quotas_sat', function (Blueprint $table) {
            $table->id();
            $table->string('range_or_fixed', 10);
            $table->string('max_value', 50)->nullable()->default(0.0);
            $table->string('min_value', 50)->nullable()->default(0.0);
            $table->string('tax', 50);
            $table->string('factor', 10);
            $table->string('transferred', 10);
            $table->string('retention', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_or_quotas_sat');
    }
};
