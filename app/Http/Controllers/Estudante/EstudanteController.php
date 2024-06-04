<?php

namespace App\Http\Controllers\Estudante;

use App\Http\Controllers\Controller;
use App\Models\Postagem;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function estudanteDashboard()
    {
        return view('estudante.dashboardEstudante');

    }

    public function verInformacoes()
  {
    $postagens = Postagem::orderBy('id_postagem', 'DESC')->get();
    return view('estudante.postagens', compact('postagens'));
  }

  
}
