<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighborhoods', function (Blueprint $table) {
          $table->increments('idneighborhood');
          $table->unsignedInteger('idlocation');
          $table->string('nameneighborhood')->nullable();
          $table->smallInteger('status')->nullable();
          $table->timestamps();
          $table->foreign('idlocation')->references('idlocation')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighborhoods');
    }
}
