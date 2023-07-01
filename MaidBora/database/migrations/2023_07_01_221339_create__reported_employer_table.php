<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reported_Employer', function (Blueprint $table) {
            $table->increments('RE_ID'); 
            $table->unsignedInteger('Reporter'); // fk for worker
            $table->unsignedInteger('Reportee'); // fk for employer
            $table->unsignedInteger('Warning');
            $table->string('comment',1000);
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_reported_employer');
    }
}
