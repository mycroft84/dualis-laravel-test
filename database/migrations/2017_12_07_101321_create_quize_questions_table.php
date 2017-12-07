<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizeQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quize_questions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('quize_category_id')->unsigned()->index()->nullable();
            $table->foreign('quize_category_id')->references('id')->on('quize_categories')->onDelete('cascade');

            $table->integer('question_id')->unsigned()->index()->nullable();
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('set null');

            $table->string('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quize_questions');
    }
}
