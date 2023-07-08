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
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->date('date');
            $table->decimal('amount', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->decimal('subtotal', 30, 6);
            $table->decimal('iva', 30, 6);
            $table->decimal('total', 30, 6);
            $table->decimal('cost', 30, 6);
            $table->text('notes', 500)->nullalble();
            $table->string('status', 25);
            $table->text('reason_for_cancellation', 500)->nullalble();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
