<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePitchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('startup_id');
            $table->string('title');
            $table->text('description');
            $table->string('pitch_type'); // Institutional or Crowdfunding
            $table->string('video_url')->nullable();
            $table->string('presentation_url')->nullable();
            $table->timestamps();

            $table->foreign('startup_id')->references('id')->on('startups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pitches');
    }
}
