<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_estudantes', function (Blueprint $table) {
            $table->id('cod_pagamento');
            $table->string('tipo_pagamento');
            $table->foreignId('numero_processo')->constraint()->onDelete('cascade');
            $table->foreignId('cod_cadeira')->constraint()->onDelete('cascade');
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
        Schema::dropIfExists('pagamento_estudantes');
    }
}
