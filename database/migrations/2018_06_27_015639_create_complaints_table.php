<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
          $table->increments('idcomplaint');
          $table->unsignedInteger('iduser');
          $table->string('typecomplaint',50)->nullable();
          $table->string('address',80)->nullable();
          $table->float('cx')->nullable();
          $table->float('cy')->nullable();
          $table->text('obs')->nullable();
          $table->string('offender',80)->nullable();
          $table->smallInteger('status')->nullable();
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
        Schema::dropIfExists('complaints');
    }
}
