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
        Schema::create('quotation_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quotation_id');
            $table->unsignedBigInteger('product_or_service_id');
            $table->date('date');
            $table->text('description', 500)->nullalble();
            $table->decimal('quantity', 30, 6);
            $table->decimal('cost_of_sales', 30, 6);
            $table->decimal('amount', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->decimal('subtotal', 30, 6);
            $table->decimal('tax', 30, 6);
            $table->decimal('iva', 30, 6);
            $table->decimal('total', 30, 6);
            $table->string('currency', 100);
            $table->integer('item');
            $table->string('exchange_rate', 100);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('quotation_id')->references('id')->on('quotations');
            $table->foreign('product_or_service_id')->references('id')->on('products_or_services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_details');
    }
};
