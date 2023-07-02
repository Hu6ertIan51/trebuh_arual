<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_requests', function (Blueprint $table) {
            $table->increments('ReqID');
            $table->unsignedInteger('RequesterID'); // foreign key of the employer making the request (EmployerID)
            $table->unsignedInteger('RequesteeID'); //fk of the worker receiving the request (WorkerID)
            $table->string('RequestType');
            $table->boolean('RequestStatus');
            $table->timestamp('Requested_at');

            $table->foreign('RequesterID')->references('Employer_ID')->on('employer');
            $table->foreign('RequesteeID')->references('Worker_ID')->on('worker');

        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_worker_requests');
    }
}
