<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpelledEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expelled_employers', function (Blueprint $table) {
            $table->increments('EP_ID');
            $table->unsignedInteger('Employer_ID');
            $table->string('Reason');
            $table->timestamp('Deleted_at');

            $table->foreign('Employer_ID')->references('Employer_ID')->on('employer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_expelled_employers');
    }
}
