<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employerdetails', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('gender');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('county');
            $table->string('subcounty');
            $table->string('town');
            $table->string('password');
            $table->string('bio');
            $table->string('housetype');
            $table->string('bathroomNo');
            $table->string('bedroomNo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userdetails');
    }
};
