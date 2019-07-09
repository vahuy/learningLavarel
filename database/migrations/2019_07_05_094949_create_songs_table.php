<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
          $table->string('id')->primary();
          $table->string('name');
          $table->string('artist');
          $table->string('writer');
          $table->string('genres');//mv or audio
          $table->mediumText('lyric')->nullable(true);
          $table->string('cover_image')->nullable(true);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
