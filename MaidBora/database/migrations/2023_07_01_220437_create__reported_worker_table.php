<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reported_worker', function (Blueprint $table) {
            $table->increments('RW_ID'); 
            $table->unsignedInteger('Reporter'); // fk for employer
            $table->unsignedInteger('Reportee'); // fk for worker
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
        Schema::dropIfExists('_reported_worker');
    }
}
