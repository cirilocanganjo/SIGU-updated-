<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('cod_curso');
            $table->string('nome',60);
            $table->decimal('mensalidade',10,2);
            $table->decimal('valor_matricula',10,2);
            $table->decimal('valor_confirmacao',10,2);
            $table->decimal('valor_recurso',10,2);
            $table->decimal('valor_exame_especial',10,2);
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
        Schema::dropIfExists('cursos');
    }
}
