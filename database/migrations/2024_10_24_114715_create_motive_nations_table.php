<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotiveNationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motive_nations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('motive_id');
            $table->unsignedBigInteger('nation_id');
            $table->timestamps();
            $table->unsignedBigInteger('creator_id');
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('motive_id')->references('id')->on('motives')->onDelete('cascade');
            $table->foreign('nation_id')->references('id')->on('nation_types')->onDelete('cascade');
        
        });
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motive_nations');
    }
}
