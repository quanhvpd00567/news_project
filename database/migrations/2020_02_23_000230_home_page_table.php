<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text_block_1');
            $table->string('text_block_1_en');
            $table->tinyInteger('isShowBlock_1');
            $table->text('description');
            $table->text('description_en');
            $table->string('banner');
            $table->string('video');
            $table->string('text_block_2');
            $table->string('text_block_2_en');
            $table->string('content_block_2');
            $table->tinyInteger('isShowBlock_2');
            $table->string('text_block_3');
            $table->string('text_block_3_en');
            $table->string('content_block_3');
            $table->tinyInteger('isShowBlock_3');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('home_page');
    }
}
