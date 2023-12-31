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
        Schema::create('worker_details', function (Blueprint $table) {
            $table->id();
            $table->string('housetype');
            $table->integer('bathroomNo');
            $table->integer('duration');
            $table->unsignedBigInteger('user_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_details')->onDelete('cascade');
    }
};
