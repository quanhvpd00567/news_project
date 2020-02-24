<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('background_img');
            $table->string('office_branch');
            $table->string('office_branch_en');
            $table->string('factory');
            $table->string('factory_en');
            $table->string('warehouse');
            $table->string('warehouse_en');
            $table->string('tel');
            $table->string('fax');
            $table->string('hotline');
            $table->string('email');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('copyright');
            $table->string('mail_driver');
            $table->string('mail_host');
            $table->string('mail_port');
            $table->string('mail_username');
            $table->string('mail_password');
            $table->string('mail_encryption');
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
