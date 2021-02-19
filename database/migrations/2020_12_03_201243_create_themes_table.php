<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('_token')->nullable();
            $table->string('_method')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->integer('hotline')->nullable();
            $table->string('email')->nullable();
            $table->string('time')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->longText('schema')->nullable();
            $table->longText('headtag')->nullable();
            $table->integer('zalo')->nullable();
            $table->string('fanpage')->nullable();
            $table->string('banner')->nullable();
            $table->string('aboutheader')->nullable();
            $table->string('abouttext')->nullable();
            $table->longText('aboutcontent')->nullable();
            $table->string('aboutimg')->nullable();
            $table->longText('aboutmedia')->nullable();
            $table->string('aboutheader2')->nullable();
            $table->string('abouttext2')->nullable();
            $table->longText('aboutcontent2')->nullable();
            $table->string('abouturl2')->nullable();
            $table->string('backgroundnews')->nullable();
            $table->longText('map')->nullable();
            $table->string('icon')->nullable();
            $table->string('header1')->nullable();
            $table->string('text1')->nullable();
            $table->string('header2')->nullable();
            $table->string('text2')->nullable();
            $table->string('header3')->nullable();
            $table->string('text3')->nullable();
            $table->longText('css')->nullable();
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
        Schema::dropIfExists('themes');
    }
}
