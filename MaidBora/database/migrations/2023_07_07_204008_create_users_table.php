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
            $table->string('First name');
            $table->string('Last name');
            $table->string('Username');
            $table->string('Gender');
            $table->string('Phone', 20);
            $table->text('Email', 200);
            $table->text('IDNumber');
            $table->text('County');
            $table->text('Subcounty');
            $table->text('Town');
            $table->text('Password');
            $table->unsignedInteger('TownID');
            $table->unsignedInteger('RoleID');
            $table->timestamps();
            //fk
            $table->foreign('TownID')->references('TownID')->on('town');
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

