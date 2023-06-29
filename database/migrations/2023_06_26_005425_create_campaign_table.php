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
        Schema::create('campaign', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->date('initial_date');
            $table->string('final_date');
            $table->unsignedBigInteger('states_id');
            $table->string('budget');
            $table->string('segmentation');
            $table->string('channel_marketing_id');
            $table->string('resources_path');
            $table->unsignedBigInteger('manager_id');
            $table->timestamps();  
            $table->foreign('manager_id')
            ->references('id')
            ->on('users');              
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign');
    }
};
