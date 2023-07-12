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
          $table->id('SubId');
          $table->string('Name',100);
          $table->unsignedBigInteger('CountyId')->unique();

          $table->foreign('CountyId')->references('CountyID')->on('county')->onDelete('cascade');
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
