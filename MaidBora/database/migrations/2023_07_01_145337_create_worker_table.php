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
            $table->string('name',70);
            $table->string('county',70);
            $table->string('town',70);
            $table->integer('age',70);
            $table->date('DateOfBirth');
            $table->integer('ID_number');
            $table->integer('Experienced_years',2);
            $table->string('certOfConduct');
            $table->string('working_type',100);
            $table->integer('working_hours',100);
            $table->integer('salary_expected',6);
            $table->boolean('employment_Status');
            $table->integer('location_ID');
            $table->integer('house_ID');
            $table->integer('job_ID');
            $table->integer('rating_ID');
        
            $table->timestamps();
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
