<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('raterID'); //fk for worker
            $table->unsignedInteger('Emp_ID');
            $table->unsignedInteger('rating');
            $table->timestamp('rated_at');

            $table->foreign('raterID')->references('Worker_ID')->on('worker');
            $table->foreign('Emp_ID')->references('Employer_ID')->on('employer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_emp_ratings');
    }
}
