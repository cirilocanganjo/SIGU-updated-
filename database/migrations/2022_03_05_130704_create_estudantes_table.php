<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
            Schema::create('estudantes', function (Blueprint $table) {
            $table->id('numero_processo');
            $table->string('nome',60);
            $table->string('sobrenome',60);
            $table->date('data_nascimento',60);
            $table->string('sexo');
            $table->string('numero_bi',60);
            $table->string('nacionalidade',60);
            $table->string('provincia',60);
            $table->string('municipio',60);
            $table->string('bairro',60);
            $table->string('nome_pai',60);
            $table->string('nome_mae',60);
            $table->string('ano_academico',10);
            $table->string('periodo',20);
            $table->string('telefone_principal',15);
            $table->string('telefone_secundario',15);
            $table->string('email',60);
            $table->string('imagem',60);
            $table->foreignId('cod_curso')->constraint()->onDelete('cascade');
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
        Schema::dropIfExists('estudantes');
    }
}
