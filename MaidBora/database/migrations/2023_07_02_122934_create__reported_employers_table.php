<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reported_employers', function (Blueprint $table) {
            $table->increments('RW_ID'); 
            $table->unsignedInteger('ReporterId'); // fk for worker
            $table->unsignedInteger('ReporteeId'); // fk for employer
            $table->unsignedInteger('Warning');
            $table->string('comment',1000);
            $table->timestamp('Reported_at');
            
            $table->foreign('ReporterId')->references('Worker_ID')->on('worker');
            $table->foreign('ReporteeId')->references('Employer_ID')->on('employer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_reported_employers');
    }
}
