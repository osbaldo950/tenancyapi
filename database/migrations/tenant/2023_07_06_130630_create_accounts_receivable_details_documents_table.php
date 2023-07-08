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
        Schema::create('accounts_receivable_details_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('accounts_receivable_id');
            $table->string('UUID', 255);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('accounts_receivable_id')->references('id')->on('accounts_receivable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_receivable_details_documents');
    }
};
