<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('logo')->nullable();
            $table->longText('favicon')->nullable();
            $table->longText('site_title')->nullable();
            $table->longText('about_us')->nullable();
            $table->longText('fb_link')->nullable();
            $table->longText('twitter_link')->nullable();
            $table->longText('pinterest_link')->nullable();
            $table->longText('vemio_link')->nullable();
            $table->longText('youtube_link')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
