<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncentivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incentives', function (Blueprint $table) {
          $table->increments('idincentive');
          $table->unsignedInteger('iduser');
          $table->unsignedInteger('idpointrecycle');
          $table->smallInteger('awards')->nullable();
          $table->timestamps();
          $table->foreign('iduser')->references('id')->on('users');
          $table->foreign('idpointrecycle')->references('idpointrecycle')->on('recycle_points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incentives');
    }
}
