<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('numero_processo');
            $table->string('nome',60);
            $table->string('sobrenome',60);
            $table->string('cargo',40);
            $table->date('data_nascimento',60);
            $table->string('sexo');
            $table->string('numero_bi',60);
            $table->string('nacionalidade',60);
            $table->string('provincia',60);
            $table->string('municipio',60);
            $table->string('bairro',60);
            $table->string('telefone_principal',15);
            $table->string('telefone_secundario',15);
            $table->string('email',60);
            $table->string('imagem',60);
            $table->string('atividades_extras',60);
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
        Schema::dropIfExists('funcionarios');
    }
}
