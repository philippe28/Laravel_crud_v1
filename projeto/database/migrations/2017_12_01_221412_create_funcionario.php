<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            
                        $table->increments('id');
            
                        $table->string('nome');
            
                        $table->text('cep');

                        $table->text('endereco');

                        $table->text('bairro');

                        $table->text('cidade');

                        $table->text('estado');

                        $table->integer('empresa_id')->unsigned();

                        $table->foreign('empresa_id')->references('id')->on('empresa');
            
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
        Schema::dropIfExists('funcionario');
    }
}
