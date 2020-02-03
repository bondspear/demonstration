<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHashtagPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hashtag_post', function (Blueprint $table) {
          //  $table->unsignedBigInteger('0');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('hashtag_id');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('hashtag_id')->references('id')->on('hashtags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hashtag_post');
    }
}
