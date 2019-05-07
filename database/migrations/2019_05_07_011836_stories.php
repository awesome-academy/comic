<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('quote')->nullable();
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->integer('authors_id')->unsigned();
            $table->foreign('authors_id')->references('id')->on('authors');
            $table->integer('photos_id')->unsigned();
            $table->foreign('photos_id')->references('id')->on('photos');
            $table->integer('languages_id')->unsigned();
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->integer('countries_id')->unsigned();
            $table->foreign('countries_id')->references('id')->on('countries');
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
        Schema::dropIfExists('stories');
    }
}
