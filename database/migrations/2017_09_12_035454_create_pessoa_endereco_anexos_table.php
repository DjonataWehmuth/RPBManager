<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaEnderecoAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_endereco_anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->binary('anexo');
            $table->integer('endereco')->unsigned();
            $table->timestamps();
            $table->softdeletes();

            $table->foreign('endereco')->
                    references('id')->
                    on('pessoa_enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_endereco_anexos');
    }
}
