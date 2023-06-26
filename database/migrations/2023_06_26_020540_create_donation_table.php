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
        Schema::create('donation', function (Blueprint $table) {
            $table->id();
            $table->integer('donor_id');
            $table->integer('campaign_id')->nullable();
            $table->integer('plan_type_id')->nullable();
            $table->integer('status')->nullable();
            $table->integer('paymment_type_id');
            $table->boolean('receipt_issued')->nullable();
            $table->date('receipt_date')->nullable();
            $table->string('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation');
    }
};
