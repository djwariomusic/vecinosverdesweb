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
          $table->unsignedInteger('idlesson');
          $table->string('titleanswer')->nullable();
          $table->string('descriptionanswer')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
