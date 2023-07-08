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
        Schema::create('customer_credit_notes_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_credit_note_id');
            $table->unsignedBigInteger('product_or_service_id');
            $table->date('date');
            $table->text('description', 500);
            $table->string('quantity', 25);
            $table->decimal('cost_of_sales', 30, 6);
            $table->decimal('amount', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->decimal('subtotal', 30, 6);
            $table->decimal('tax', 30, 6);
            $table->decimal('iva', 30, 6);
            $table->decimal('retention_iva', 30, 6);
            $table->decimal('retention_isr', 30, 6);
            $table->decimal('retention_ieps', 30, 6);
            $table->decimal('total', 30, 6);
            $table->decimal('ieps', 30, 6);
            $table->integer('item_number');
            $table->integer('item');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('customer_credit_note_id')->references('id')->on('customer_credit_notes');
            $table->foreign('product_or_service_id')->references('id')->on('products_or_services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_credit_note_details');
    }
};
