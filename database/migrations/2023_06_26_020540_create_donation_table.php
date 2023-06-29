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
            $table->unsignedBigInteger('donor_id');
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->unsignedBigInteger('plan_type_id')->nullable();
            $table->integer('status')->nullable();
            $table->unsignedBigInteger('paymment_type_id');
            $table->boolean('receipt_issued')->nullable();
            $table->date('receipt_date')->nullable();
            $table->string('observation')->nullable();
            $table->timestamps();
            $table->foreign('campaign_id')
            ->references('id')
            ->on('campaign');    
            $table->foreign('plan_type_id')
            ->references('id')
            ->on('planstype');   
                                              
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
