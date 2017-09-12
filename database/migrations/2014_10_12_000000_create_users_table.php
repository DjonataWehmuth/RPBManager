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
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('ehdiretor')->default(false);
            $table->boolean('ehgerente')->default(false);
            $table->boolean('ehatendente')->default(false);
            $table->boolean('ehgarcom')->default(false);
            $table->boolean('ehcozinheiro')->default(false);
            $table->boolean('ehentregador')->default(false);
            $table->boolean('administrador')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softdeletes();
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
