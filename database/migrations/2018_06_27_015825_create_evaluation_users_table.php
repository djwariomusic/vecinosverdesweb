<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_users', function (Blueprint $table) {
          $table->increments('idevaluation');
          $table->unsignedInteger('idlesson');
          $table->unsignedInteger('idanswer');
          $table->date('dateevaluation')->nullable();
          $table->smallInteger('note')->nullable();
          $table->timestamps();
          $table->foreign('idlesson')->references('idlesson')->on('lessons');
          $table->foreign('idanswer')->references('idanswer')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_users');
    }
}
