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
        Schema::create('accounts_receivable_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('accounts_receivable_id');
            $table->date('date');
            $table->unsignedBigInteger('invoice_id');
            $table->decimal('credit_memo', 30, 6);
            $table->string('UUID_invoice', 255);
            $table->string('currency', 100);
            $table->string('exchange_rate', 100);
            $table->integer('item_number');
            $table->decimal('previous_balance', 30, 6);
            $table->decimal('paid_balance', 30, 6);
            $table->decimal('outstanding _balance', 30, 6);
            $table->integer('item');
            $table->string('tax_object_code', 25);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('accounts_receivable_id')->references('id')->on('accounts_receivable');
            $table->foreign('invoice_id')->references('id')->on('invoices');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_receivable_details');
    }
};
