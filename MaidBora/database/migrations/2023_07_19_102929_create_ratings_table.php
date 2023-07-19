<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('raterId');
            $table->unsignedBigInteger('ratedUser');
            $table->unsignedBigInteger('joblist_id');
            $table->integer('rating');
            $table->string('review');
            $table->timestamps();

            $table->foreign('RaterId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('RatedUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('joblist_id')->references('jobID')->on('job_post')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
