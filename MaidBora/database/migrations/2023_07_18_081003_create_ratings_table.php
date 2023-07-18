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
            $table->increments('rateID');
            $table->integer('Rating');
            $table->integer('RatedUser');
            $table->string('Review');
            $table->integer('jobID');
            $table->timestamps();

            $table->foreign('JobId')->references('id')->on('job_post')->onDelete('cascade');
            $table->foreign('RatedUserId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('RaterId')->references('id')->on('users')->onDelete('cascade');

            
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
