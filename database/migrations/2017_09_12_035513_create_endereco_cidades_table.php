<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cep')->unique();
            $table->integer('cidade')->unsigned();
            $table->timestamps();
            $table->softdeletes();

            $table->foreign('cidade')->
                    references('id')->
                    on('endereco_estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco_cidades');
    }
}
