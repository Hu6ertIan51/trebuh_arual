<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->increments('udid');
            $table->string('bio');
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('IDNumber');
            $table->string('county');
            $table->string('subcounty');
            $table->string('town');
            $table->unsignedInteger('UserID')->unique();
            $table->timestamps();

            $table->foreign('UserID')->references('UserId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdetails');
    }
}
