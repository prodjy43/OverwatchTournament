<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function(Blueprint $table){
            $table->increments('id_tag');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('news_tag', function(Blueprint $table){
            $table->increments('id');
            $table->integer('news_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('news_id')->references('id_news')->on('news')->onDelete('cascade');
            $table->foreign('tag_id')->references('id_tag')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
