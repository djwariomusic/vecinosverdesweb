<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecyclePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recycle_points', function (Blueprint $table) {
          $table->increments('idpointrecycle');
          $table->unsignedInteger('iduser');
          $table->string('namelocal',50)->nullable();
          $table->string('schedule')->nullable();
          $table->string('address',80)->nullable();
          $table->bigInteger('phone')->nullable();
          $table->timestamps();
          $table->foreign('iduser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recycle_points');
    }
}
