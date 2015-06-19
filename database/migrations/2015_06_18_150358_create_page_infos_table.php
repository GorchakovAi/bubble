<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url_logo');
            $table->text('url_video');
            $table->text('url_vk');
            $table->text('url_fb');
            $table->text('url_twitter');
            $table->text('url_gp');
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
        Schema::drop('page_infos');
    }
}
