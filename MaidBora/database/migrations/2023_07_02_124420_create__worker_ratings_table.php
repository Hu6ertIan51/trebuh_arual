<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('raterID'); //fk for employer
            $table->unsignedInteger('Worker_ID');
            $table->unsignedInteger('rating');
            $table->timestamp('created_at');

            $table->foreign('raterID')->references('Employer_ID')->on('employer');
            $table->foreign('Worker_ID')->references('Worker_ID')->on('worker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_worker_ratings');
    }
}
