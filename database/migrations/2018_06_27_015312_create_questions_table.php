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
          $table->unsignedInteger('idlesson');
          $table->string('titlequestion')->nullable();
          $table->string('descriptionquestion')->nullable();
          $table->smallInteger('status')->nullable();
          $table->timestamps();
          $table->foreign('idlesson')->references('idlesson')->on('lessons');
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
