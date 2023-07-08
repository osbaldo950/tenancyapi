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
        Schema::create('customer_credit_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id');
            $table->date('date');
            $table->decimal('amount', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->decimal('ieps', 30, 6);
            $table->decimal('subtotal', 30, 6);
            $table->decimal('iva', 30, 6);
            $table->decimal('retention_iva', 30, 6);
            $table->decimal('retention_isr', 30, 6);
            $table->decimal('retention_ieps', 30, 6);
            $table->decimal('local_tax_retention', 30, 6);
            $table->decimal('local_tax_transfer', 30, 6);
            $table->decimal('total', 30, 6);
            $table->string('currency', 100);
            $table->string('exchange_rate', 100);
            $table->text('notes', 500)->nullalble();
            $table->string('status', 25);
            $table->text('reason_for_cancellation', 500)->nullalble();
            $table->string('payment_terms', 25);
            $table->string('place_of_shipment', 25);
            $table->string('fiscal_regime_code', 25);
            $table->string('type_of_relation', 25);
            $table->string('payment_form_code', 25);
            $table->string('payment_method_code', 25);
            $table->string('use_cfdi_code', 25);
            $table->string('tax_residence', 25);
            $table->string('issuer_rfc', 255);
            $table->string('issuer_name', 255);
            $table->string('receiver_rfc', 255);
            $table->string('receiver_name', 255);
            $table->dateTime('date_stamped');
            $table->string('UUID', 255);
            $table->dateTime('time');
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
        Schema::dropIfExists('customer_credit_notes');
    }
};
