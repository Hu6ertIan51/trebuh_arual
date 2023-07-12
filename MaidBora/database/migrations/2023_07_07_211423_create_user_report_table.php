<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserReport', function (Blueprint $table) {
            $table->increments('ReportID');
            $table->unsignedInteger('UserID');
            $table->unsignedInteger('ReportedUser');
            $table->text('Reason', 20);
            $table->text('Description',200);
            $table->timestamps();

            $table->foreign('UserID')->references('UserId')->on('users')->onDelete('cascade');
            $table->foreign('ReportedUser')->references('UserId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_report');
    }
}
