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
        Schema::create('accounts_receivable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->date('date');
            $table->decimal('credit_memo', 30, 6);
            $table->text('notes', 500)->nullalble();
            $table->string('UUID', 255);
            $table->string('currency', 100);
            $table->string('exchange_rate', 100);
            $table->string('issuer_rfc', 255);
            $table->string('issuer_name', 255);
            $table->string('place_of_shipment', 25);
            $table->string('fiscal_regime_code', 25);
            $table->string('receiver_rfc', 255);
            $table->string('receiver_name', 255);
            $table->string('payment_form_code', 25);
            $table->dateTime('time');
            $table->string('status', 25);
            $table->text('reason_for_cancellation', 500)->nullalble();
            $table->text('use_cfdi_code', 25);
            $table->string('export_code', 25);
            $table->string('receiving_tax_regime', 25);
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
        Schema::dropIfExists('accounts_receivable');
    }
};
