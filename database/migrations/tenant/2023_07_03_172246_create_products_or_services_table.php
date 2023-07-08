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
        Schema::create('products_or_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('prod_serv_code', 25);
            $table->string('unit_code', 25);
            $table->string('unit', 100);
            $table->decimal('cost_of_sales', 30, 6);
            $table->decimal('tax', 30, 6);
            $table->decimal('ieps_rate', 30, 6);
            $table->decimal('profit', 30, 6);
            $table->decimal('subtotal', 30, 6);
            $table->decimal('iva', 30, 6);
            $table->decimal('total', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->date('date_of_last_sale');
            $table->decimal('price_of_last_sale', 30, 6);
            $table->string('hazardous_product', 100);
            $table->text('description', 500)->nullalble();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_or_services');
    }
};
