<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
=======
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('remenber_token');
            $table->timestamps('create_at');
            $table->timestamps('update_at');
            $table->string('rule');
            $table->string('image');
>>>>>>> 6ff70a72ff69f608f951acea5e8eb609a32c8a86
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
