<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpelledWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expelled_workers', function (Blueprint $table) {
            $table->increments('EW_ID');
            $table->unsignedInteger('Worker_ID');
            $table->string('Reason');
            $table->timestamp('Deleted_at');

            $table->foreign('Worker_ID')->references('Worker_ID')->on('worker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_expelled_workers');
    }
}
