<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->tinyInteger('gender');
            $table->date('birth_of_day');
            $table->string('email', 255)->unique();
            $table->string('password');
            $table->string('remember_me');
            $table->integer('role_id');
            $table->tinyInteger('is_block')->default(0)->comment('1 la bi block, 0 chua block');
            $table->tinyInteger('is_delete')->default(0)->comment('1 la da xoa, 0 la chua xoa');
            $table->integer('count_login');
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
        Schema::dropIfExists('users');
    }
}
