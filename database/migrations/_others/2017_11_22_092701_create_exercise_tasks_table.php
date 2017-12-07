<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_tasks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('exercise_id')->unsigned()->index()->nullable();
            $table->foreign('exercise_id')->references('id')->on('exercises')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('number_1')->nullable();
            $table->integer('number_2')->nullable();
            $table->integer('real_result')->nullable();
            $table->integer('user_result')->nullable();
            $table->boolean('is_right')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_tasks');
    }
}
