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
        Schema::create('process', function(Blueprint $table){
            $table->id();
            $table->string('num');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('process_status_id');
            $table->foreign('process_status_id')->references('id')->on('status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('process', function(Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['process_status_id']);
            $table->dropColumn('process_status_id');
        });

        Schema::dropIfExists('process');
    }
};
