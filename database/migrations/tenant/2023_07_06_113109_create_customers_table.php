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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('rfc', 10);
            $table->string('street', 255);
            $table->string('ext_num', 255);
            $table->string('int_num', 255);
            $table->string('municipality_code', 25);
            $table->string('locality_code', 25);
            $table->string('colony_code', 25);
            $table->string('zip_code', 25);
            $table->string('state_code', 25);
            $table->string('country_code', 25);
            $table->string('contact_name', 255);
            $table->string('contact_email', 255);
            $table->string('contact_number', 255);
            $table->text('notes', 500)->nullalble();
            $table->string('fiscal_regime_code', 25);
            $table->string('payment_form_code', 25);
            $table->string('payment_method_code', 25);
            $table->string('use_cfdi_code', 25);
            $table->decimal('credit', 30, 6);
            $table->decimal('balance', 30, 6);
            $table->date('date_of_last_sale');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
