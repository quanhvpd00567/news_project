<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_en');
            $table->string('description');
            $table->string('description_en');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('keyword');
            $table->string('keyword_en');
            $table->text('content');
            $table->text('content_en');
            $table->text('purpose');
            $table->text('purpose_en');
            $table->text('nutrition');
            $table->text('nutrition_en');
            $table->string('slug');
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
        Schema::dropIfExists('products');
    }
}
