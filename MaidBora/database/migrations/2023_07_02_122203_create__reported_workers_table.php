<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reported_workers', function (Blueprint $table) {
            $table->increments('RW_ID'); 
            $table->unsignedInteger('ReporterId'); // fk for employer
            $table->unsignedInteger('ReporteeId'); // fk for worker
            $table->unsignedInteger('Warning');
            $table->string('comment',1000);
            $table->timestamp('Reported_at');
            
            $table->foreign('ReporterId')->references('Employer_ID')->on('employer');
            $table->foreign('ReporteeId')->references('Worker_ID')->on('worker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_reported_workers');
    }
}
