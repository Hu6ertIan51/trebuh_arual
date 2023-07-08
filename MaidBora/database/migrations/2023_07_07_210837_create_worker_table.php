<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker', function (Blueprint $table) {
            $table->increments('WorkerID');
            $table->unsignedInteger('YearsExperienced'); //worker
            $table->string('WorkType',100); //worker
            $table->unsignedInteger('WorkingHours'); //worker
            $table->unsignedInteger('Expectedsalary'); //worker
            $table->boolean('EmploymentStatus'); //worker

            $table->foreign('WorkerID')->references('UserID')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker');
    }
}
