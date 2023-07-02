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
            $table->increments('Worker_ID');
            $table->string('Name', 100);
            $table->string('EmailAddress', 100);
            $table->string('County',100);
            $table->string('Town',100);
            $table->string('Address',100);
            $table->unsignedInteger('Age');
            $table->date('DoB');
            $table->unsignedInteger('IDNumber');
            $table->unsignedInteger('YearsExperienced');
            $table->string('WorkType',100);
            $table->unsignedInteger('WorkingHours');
            $table->unsignedInteger('Expectedsalary');
            $table->boolean('EmploymentStatus');
            $table->string('Password');
            $table->unsignedInteger('TownId');

            $table->foreign('TownId')->references('TownId')->on('town');
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
