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
        Schema::create('answer', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('question')->onUpdate('cascade')->onDelete('cascade');
            $table->string('answer_txt');
            $table->timestamp('submited_at')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('answer', function(Blueprint $table){
            $table->dropForeign(['question_id']);
            $table->dropColumn('question_id');
        });

        Schema::dropIfExists('answer');
    }
};
