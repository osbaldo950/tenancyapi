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
        Schema::create('customer_credit_notes_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_credit_note_id');
            $table->unsignedBigInteger('invoice_id');
            $table->string('UUID', 255);
            $table->decimal('total', 30, 6);
            $table->decimal('discount', 30, 6);
            $table->integer('item');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('customer_credit_note_id')->references('id')->on('customer_credit_notes');
            $table->foreign('invoice_id')->references('id')->on('invoices');         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_credit_notes_documents');
    }
};
