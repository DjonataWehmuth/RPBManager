<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bairro');
            $table->string('rua');
            $table->string('complemento')->nullable();
            $table->integer('numero')->default(0);
            $table->integer('pessoa')->unsigned();
            $table->timestamps();
            $table->softdeletes();

            $table->foreign('pessoa')->
                    references('id')->
                    on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_enderecos');
    }
}
