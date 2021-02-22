<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaDoadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadores', function(Blueprint $table){
            $table->id();
            $table->char('nome',200);
            $table->char('cpf',20);
            $table->char('email',100);
            $table->char('telefone',20);
            $table->char('endereco',100);
            $table->date('data_nascimento');
            $table->dateTime('data_cadastro')->default(now());
            $table->enum(
                'intervalo_doacao',
                ['unico','bimestral','semestral','anual']
            );
            $table->double('valor_doacao',10,2);
            $table->enum('forma_pagamento', ['debito','credito']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doadores');
    }
}
