<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('exercise_id');
            $table->bigInteger('user_id');
            $table->timestamps();

            $table->unique(['exercise_id', 'user_id']);

            $table->foreign('exercise_id')
                ->references('id')
                ->on('exercises');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completed_exercises');
    }
}
