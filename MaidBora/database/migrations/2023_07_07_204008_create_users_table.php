<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('UserId');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('IDNumber');
            $table->string('county');
            $table->string('subcounty');
            $table->string('town');
            $table->string('password');
            $table->string('confpassword');
            $table->string('bio');
            $table->timestamps();
            $table->unsignedInteger('RoleID')->default(1);
            
            //fk
            $table->foreign('RoleID')->references('RoleID')->on('roles');     
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

/*
$table->string('gender');
            $table->string('phone', 20);
            $table->string('email', 200);
            $table->string('IDNumber');
            $table->string('county');
            $table->string('subcounty');
            $table->string('town');
            $table->string('password');
            $table->string('confpassword');
            $table->unsignedInteger('TownID');
            $table->unsignedInteger('RoleID');
            $table->timestamps();
            //fk
            $table->foreign('TownID')->references('TownID')->on('town');
            $table->foreign('RoleID')->references('RoleID')->on('roles');
*/