<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer_requests', function (Blueprint $table) {
            $table->increments('ReqID');
            $table->unsignedInteger('RequesterID'); // fk of the worker making the request (WORKERID)
            $table->unsignedInteger('RequesteeID'); //fk of the employer receiving the request (EMPLOYERID)
            $table->string('RequestType');
            $table->boolean('RequestStatus');
            $table->timestamp('Requested_at');

            $table->foreign('RequesterID')->references('Worker_ID')->on('worker');
            $table->foreign('RequesteeID')->references('Employer_ID')->on('employer');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_emp_requests');
    }
}
