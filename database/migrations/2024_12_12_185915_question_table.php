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
        Schema::create('question', function(Blueprint $table){
            $table->id();
            $table->string('question_txt');
            $table->unsignedBigInteger('question_status_id');
            $table->foreign('question_status_id')->references('id')->on('status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('question', function(Blueprint $table){
            $table->dropForeign(['question_status_id']);
            $table->dropColumn('question_status_id');
        });

        Schema::dropIfExists('question');
    }
};
