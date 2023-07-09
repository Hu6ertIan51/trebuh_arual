<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->increments('EmployerID');
            $table->string('housetype',100); // employer
            $table->string('bathroomNo',100); // employer
            $table->string('bedroomNo',100); //employer
            $table->unsignedInteger('roleid')->nullable(); //fk
            $table->timestamps();

            $table->foreign('roleid')->references('RoleID')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employer');
    }
}
