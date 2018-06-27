<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleCleansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_cleans', function (Blueprint $table) {
          $table->increments('idschedule');
          $table->unsignedInteger('idneighborhood');
          $table->string('operator')->nullable();
          $table->string('monday')->nullable();
          $table->string('tuesday')->nullable();
          $table->string('wednesday')->nullable();
          $table->string('thursday')->nullable();
          $table->string('friday')->nullable();
          $table->string('saturday')->nullable();
          $table->string('sunday')->nullable();
          $table->bigInteger('phone')->nullable();
          $table->string('address')->nullable();
          $table->smallInteger('status')->nullable();
          $table->timestamps();
          $table->foreign('idneighborhood')->references('idneighborhood')->on('neighborhoods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_cleans');
    }
}
