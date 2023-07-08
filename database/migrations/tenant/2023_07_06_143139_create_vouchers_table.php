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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('voucher', 255);
            $table->string('type', 255);
            $table->string('version', 255);
            $table->morphs('voucherable');
            $table->dateTime('date_of_cancellation');
            $table->string('UUID', 255);
            $table->date('date');
            $table->decimal('subtotal', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->decimal('total', 30, 6);
            $table->text('certificate_SAT');
            $table->text('certificate_CFD');
            $table->text('original_chain');
            $table->text('seal_SAT');
            $table->text('seal_CFD');
            $table->string('id_facturapi', 255);
            $table->string('verify_cdfi_url', 255);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
