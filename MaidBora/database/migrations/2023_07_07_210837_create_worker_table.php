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
            $table->integer('YearsExperienced'); //worker
            $table->string('WorkType',100); //worker
            $table->integer('WorkingHours'); //worker
            $table->decimal('Expectedsalary', 10, 2); //worker
            $table->boolean('EmploymentStatus')->default(1); //worker
            $table->unsignedInteger('roleid')->nullable();
            $table->timestamps();

            $table->foreign('roleid')->references('RoleID')->on('roles');
 
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
