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
        Schema::table('donation', function (Blueprint $table) {
            $table->foreign('paymment_type_id')
                  ->references('id')
                  ->on('paymmenttype');                 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donation', function (Blueprint $table) {
            $table->dropColumn('paymment_type_id');
        });
    }
};
