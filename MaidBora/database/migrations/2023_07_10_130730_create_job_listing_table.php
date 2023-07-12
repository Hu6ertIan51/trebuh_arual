<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_listing', function (Blueprint $table) {
            $table->increments('jobID');
            $table->string('job_name');
            $table->text('job_description');
            
            $table->timestamps();

            $table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_listing');
    }
}
