<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizeAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quize_answers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('quize_question_id')->unsigned()->index()->nullable();
            $table->foreign('quize_question_id')->references('id')->on('quize_questions')->onDelete('cascade');

            $table->integer('answer_id')->unsigned()->index()->nullable();
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('set null');

            $table->string('text');
            $table->boolean('is_right');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quize_answers');
    }
}
