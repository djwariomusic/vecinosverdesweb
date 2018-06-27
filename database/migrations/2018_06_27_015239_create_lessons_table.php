<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
          $table->increments('idlesson');
          $table->unsignedInteger('idcourse');
          $table->string('titlelesson',50)->nullable();
          $table->string('objetive')->nullable();
          $table->string('description')->nullable();
          $table->text('content')->nullable();
          $table->string('image')->nullable();
          $table->string('url')->nullable();
          $table->smallInteger('status')->nullable();
          $table->timestamps();
          $table->foreign('idcourse')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
