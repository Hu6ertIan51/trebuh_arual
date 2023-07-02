<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->increments('Employer_ID');
            $table->string('Name', 100);
            $table->string('EmailAddress', 100);
            $table->string('County',100);
            $table->string('Town',100);
            $table->string('HouseType',100);
            $table->string('NoOfBathrooms',100);
            $table->string('NoOfBedrooms',100);
            $table->unsignedInteger('Age');
            $table->date('DoB');
            $table->string('Address',100);
            $table->unsignedInteger('IDNumber');
            $table->string('Password');
            $table->unsignedInteger('TownID'); 

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
        Schema::dropIfExists('employer');
    }
}
