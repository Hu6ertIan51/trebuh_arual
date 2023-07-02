<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcountyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcounty', function (Blueprint $table) {
          $table->increments('SubId');
          $table->string('Name',100);
          $table->unsignedInteger('CountyId');

          $table->foreign('CountyId')->references('CountyID')->on('county');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcounty');
    }
}
