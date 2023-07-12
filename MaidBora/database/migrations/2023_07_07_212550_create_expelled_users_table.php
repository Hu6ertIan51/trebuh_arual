<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpelledUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expelled_users', function (Blueprint $table) {
            $table->increments('ExpelledID');
            $table->unsignedInteger('UserId')->unique();
            $table->text('Reason');
            $table->timestamps();

            $table->foreign('UserId')->references('UserId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expelled_users');
    }
}
