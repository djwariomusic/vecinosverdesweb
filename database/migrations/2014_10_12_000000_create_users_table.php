<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->bigInteger('cc')->nullable();
          $table->string('lastname',50)->nullable();
          $table->string('name',50)->nullable();
          $table->string('gender',15)->nullable();
          $table->date('birthday')->nullable();
          $table->string('role',30)->nullable();
          $table->string('localname',80)->nullable();
          $table->bigInteger('phone')->nullable();
          $table->string('address',40)->nullable();
          $table->string('email',50)->unique();
          $table->string('password');
          $table->smallInteger('status')->nullable();
          $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
