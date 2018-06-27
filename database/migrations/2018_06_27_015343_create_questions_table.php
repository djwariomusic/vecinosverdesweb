<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
          $table->increments('idquestion');
          $table->string('question1')->nullable();
          $table->smallInteger('solutionq1')->nullable();
          $table->string('question2')->nullable();
          $table->smallInteger('solutionq2')->nullable();
          $table->string('question3')->nullable();
          $table->smallInteger('solutionq3')->nullable();
          $table->string('question4')->nullable();
          $table->smallInteger('solutionq4')->nullable();
          $table->smallInteger('status')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
