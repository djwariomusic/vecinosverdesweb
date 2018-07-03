<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
          $table->increments('idanswer');
          $table->string('answer1')->nullable();
          $table->smallInteger('solutiona1')->nullable();
          $table->string('answer2')->nullable();
          $table->smallInteger('solutiona2')->nullable();
          $table->string('answer3')->nullable();
          $table->smallInteger('solutiona3')->nullable();
          $table->string('answer4')->nullable();
          $table->smallInteger('solutiona4')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
