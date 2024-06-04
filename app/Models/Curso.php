<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
     protected $fillable = [
        'nome',
        'mensalidade',
        'turma',
        'valor_confirmacao',
        'valor_recurso',
        'valor_exame_especial',

    ];

    protected $table = 'cursos';
    protected $primaryKey = 'cod_curso';

}
