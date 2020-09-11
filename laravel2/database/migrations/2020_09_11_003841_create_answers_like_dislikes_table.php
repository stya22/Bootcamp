<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersLikeDislikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_like_dislikes', function (Blueprint $table) {
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('profile_id');
            $table->integer('poin', 11);
            $table->foreign('answer_id')->references('id')->on('answers');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers_like_dislikes');
    }
}
