<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ratings', function (Blueprint $table) {
            $table->increments('RatingID');
            $table->unsignedInteger('UserID')->unique();
            $table->unsignedInteger('RatedUserID')->unique();
            $table->unsignedInteger('Rating');
            $table->text('review_text');
            $table->timestamps();

            $table->foreign('UserID')->references('UserId')->on('users')->onDelete('cascade');
            $table->foreign('RatedUserID')->references('UserId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_ratings');
    }
}
