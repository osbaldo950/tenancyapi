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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('invoice_id');
            $table->integer('product_or_service_id');
            $table->date('date');
            $table->text('description', 500)->nullalble();
            $table->string('quantity', 100);
            $table->decimal('cost_of_sales', 30, 6);
            $table->decimal('amount', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->decimal('subtotal', 30, 6);
            $table->decimal('tax', 10);
            $table->decimal('iva', 30, 6);
            $table->decimal('retention_iva', 30, 6);
            $table->decimal('retention_isr', 30, 6);
            $table->decimal('retention_ieps', 30, 6);
            $table->decimal('total', 30, 6);
            $table->string('currency', 100);
            $table->string('exchange_rate', 100);
            $table->integer('item');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('product_or_service_id')->references('id')->on('products_or_services'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
