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
        Schema::create('donor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('donor_type_id');
            $table->unsignedBigInteger('level_donor_id');
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users');   
            $table->foreign('donor_type_id')
            ->references('id')
            ->on('donortypes');    
            $table->foreign('level_donor_id')
            ->references('id')
            ->on('leveldonor');                                     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor');
    }
};
