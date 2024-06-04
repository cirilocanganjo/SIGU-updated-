<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EstudanteRequest;
use App\Models\Curso;
use App\Models\Estudante;
use App\Models\Professor;
use App\Models\Postagem;
use App\Http\Requests\CursoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Curso\CursoController;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    // Retornar a dashboard do admin
  public function index()
  {

    return view("admin.dashboardAdmin");
  }

  // Retornar view de Cursos
  public function curso()
  {
    $cursos = Curso::all();
    return view("curso.cursos",compact('cursos'));
    
  }
  
  public function curso_form()
  {
    $action = 'curso.adicionar';
    return view("curso.form_curso",compact('action'));
  }
  //Adicionar curso
    public function adicionarCurso(Request $request)
    {
      //Validação




      $curso = new  Curso();
      $curso->nome = $request->nome;
      $curso->mensalidade = $request->mensalidade;
      $curso->valor_matricula = $request->valor_matricula;
      $curso->valor_confirmacao = $request->valor_confirmacao;
      $curso->valor_recurso = $request->valor_recurso;
      $curso->valor_exame_especial = $request->valor_exame_especial;
      $curso->save();

      if($curso)
      {
        return redirect()->back()->with('sucesso','Curso adicionado com sucesso.');
      }else{
        return redirect()->back()->with('error','Error ao  adicionado curso.');

      }


    }


 


    


  // Excluir Curso
  public function excluirCurso($id)
  {
    $curso = Curso::find($id)->delete();
    if($curso){
        
    
      return redirect()->back()->with('sucesso','Curso excluido com sucesso.');
    }else{

      return redirect()->back()->with('error','Error ao  excluir curso.');

    }
  }
  
// Encontrar curso
  public function encontrar_curso($id)
  {
    $curso = Curso::find($id);
    $action = 'cursoEditar';
   return view('curso.form_curso',compact('curso','action'));
  }
  // Actualizar curso
  public function actualizarCurso(Request $request)
  {
      $curso = Curso::find($request->cod_curso)->update($request->all());
      if($curso){
        
        return redirect('curso.listar')->with('sucesso','Curso actualizado com sucesso.');
      }else{
  
        return redirect()->with('error','Error ao  actualizar curso.');
  
      }
    }
   // Retornar o view de gerenciar estudantes 
   public function formEstudante()
   {
    $cursos = DB::table('cursos')->get();
    $provincias = DB::table('provincias')->get();
    $action = 'adicionarEstudante';
    return view("estudante.form_estudante",compact('provincias', 'cursos','action'));

    
    }
 
  public function adicionarEstudante(Request $request)
  {
    //Validação dos inpputs 
    $request->validate([
      "nome" => "required",
      "sobrenome" => "required",
      "nome_pai" => "required",
      "nome_mae" => "required",
      "data_nascimento" => "required",
      "sexo" => "required",
      "numero_bi" => "required|max:15|min:15",
      "nacionalidade" => "required",
      "provincia" => "required",
      "municipio" => "required",
      "bairro" => "required",
      "periodo" => "required",
      "telefone_principal" => "required|min:9|max:15",
      "telefone_secudario" => "required|min:9|max:15",
      "email" => "required|email",
      
    ]); 
 
      $estudante = new Estudante();
      if($request->has('foto'))
      {
          
          $imagem = $request->file('foto')->getClientOriginalName();
          $extensao = $request->file('foto')->extension();
          $novoNome = md5($imagem).'.'.$extensao;
          $request->file('foto')->storeAs('estudantes/', $novoNome);
          $estudante->imagem = $novoNome;
          
      }
      
      $estudante->nome = $request->nome;
      $estudante->sobrenome = $request->sobrenome;
      $estudante->ano_academico = $request->ano_academico;
      $estudante->nome_pai = $request->nome_pai;
      $estudante->nome_mae = $request->nome_mae;
      $estudante->data_nascimento = $request->data_nascimento;
      $estudante->sexo = $request->sexo;
      $estudante->numero_bi = $request->numero_bi;
      $estudante->nacionalidade = $request->nacionalidade;
      $estudante->provincia = $request->provincia;
      $estudante->municipio = $request->municipio;
      $estudante->bairro = $request->bairro;
      $estudante->periodo = $request->periodo;
      $estudante->cod_curso = $request->curso;
      $estudante->telefone_principal = $request->telefone_principal;
      $estudante->telefone_secundario = $request->telefone_secundario;
      $estudante->email = $request->email;
    
      $estudante->save();      
 
            if($estudante){
          
                return back()->with('success', 'Estudante cadastrado com sucesso!');
            }else{
                return back()->with('fail', 'Erro ao cadastrar estudante,tente novamente!');
                        
            }       
  }
//Excluir Estudante
  public function estudanteExcluir($id)
  {
      $estudante = Estudante::find($id)->delete();

      return redirect()->back()->with('success','Estudante Excluido com sucesso');
  }
// Encontrar Estudante

public function estudanteEditar($id)
{
  $estudante = Estudante::find($id);
  $action= 'estudante.actualizar/'.$estudante->numero_processo;
  $cursos = DB::table('cursos')->get();
  $provincias = DB::table('provincias')->get();

  return view('estudante.form_estudante',compact('estudante','action','cursos','provincias'));
}

public function estudanteActualizar($id,Request $request)
{
  //Validação dos inpputs 
  $request->validate([
    "nome" => "required",
    "sobrenome" => "required",
    "nome_pai" => "required",
    "nome_mae" => "required",
    "data_nascimento" => "required",
    "sexo" => "required",
    "numero_bi" => "required|max:15|min:15",
    "nacionalidade" => "required",
    "provincia" => "required",
    "municipio" => "required",
    "bairro" => "required",
    "periodo" => "required",
    "telefone_principal" => "required|min:9|max:15",
    "telefone_secudario" => "required|min:9|max:15",
    "email" => "required|email",
    
  ]); 
  $estudante = Estudante::find($id);
  if($request->has('foto'))
  {
      
      $imagem = $request->file('foto')->getClientOriginalName();
      $extensao = $request->file('foto')->extension();
      $novoNome = md5($imagem).'.'.$extensao;
      $request->file('foto')->storeAs('estudantes/', $novoNome);
      $estudante->imagem = $novoNome;
      
  }
  
  $estudante->nome = $request->nome;
  $estudante->sobrenome = $request->sobrenome;
  $estudante->ano_academico = $request->ano_academico;
  $estudante->nome_pai = $request->nome_pai;
  $estudante->nome_mae = $request->nome_mae;
  $estudante->data_nascimento = $request->data_nascimento;
  $estudante->sexo = $request->sexo;
  $estudante->numero_bi = $request->numero_bi;
  $estudante->nacionalidade = $request->nacionalidade;
  $estudante->provincia = $request->provincia;
  $estudante->municipio = $request->municipio;
  $estudante->bairro = $request->bairro;
  $estudante->periodo = $request->periodo;
  $estudante->cod_curso = $request->curso;
  $estudante->telefone_principal = $request->telefone_principal;
  $estudante->telefone_secundario = $request->telefone_secundario;
  $estudante->email = $request->email;

  $estudante->save();      

        if($estudante){
      
            return back()->with('success', 'Estudante actualizado com sucesso!');
        }else{
            return back()->with('fail', 'Erro ao actualizar estudante,tente novamente!');
                    
        } 
 
}
    public function estudanteListar()
    {
      $estudantes = Estudante::all();
      return view('estudante.dadosPessoais',compact('estudantes'));
    }
    
    public function estudanteEndereco()
    {
      $estudantes = Estudante::all();
      return view('estudante.endereco',compact('estudantes'));
    }

    public function estudanteContacto()
    {
      $estudantes = Estudante::all();
      return view('estudante.contacto',compact('estudantes'));
    }

  //Chamar o formulário para adicionar notícia
  public function formNoticia()
  {
    return view('postagem.formPostagem');

  }

  //Método para a criação de Postagem de notícias

  public function adicionarPostagem(Request $request)
  {
      $postagem = new Postagem();
      if($request->has('imagem'))
      {
          
        $imagem = $request->imagem->getClientOriginalName();
          $extensao = $request->imagem->extension();
          $novoNome = md5($imagem).'.'.$extensao;
          $upload = $request->imagem->storeAs('imagens/', $novoNome);
          $postagem->imagem = $novoNome;
          
      }
      $postagem->titulo = $request->titulo;
      $postagem->conteudo = $request->conteudo;       
      $postagem->autor = 'Cirilo Canganjo';
      $postagem->save();

  }

  //Método para aceder a Dashboard do Admin
  public function index_admin()
  {
    return view('Admin.dashboardAdmin');
  }


      /* Método para trazer a view de cadastro de Professores */

      public function listarProfessor()
      {
        return view('professor.formProfessor');
      }


          // Retornar o view de gerenciar professor
      public function formProfessor()
      {
        $cursos = DB::table('cursos')->get();
        $provincias = DB::table('provincias')->get();
        return view("professor.formProfessor",compact('provincias', 'cursos'));

        
        }

    
      public function adicionarProfessor(Request $request)
      {
        $professor = new Professor();
        $professor->ano_academico = $request->ano_academico;
        $professor->cod_curso = $request->curso;
        $professor->cadeiras = $request->cadeiras;
        $professor->nome = $request->nome;
        $professor->sobrenome = $request->sobrenome;
        $professor->data_nascimento = $request->data_nascimento;
        $professor->sexo = $request->sexo;
        $professor->numero_bi = $request->numero_bi;
        $professor->nacionalidade = $request->nacionalidade;
        $professor->municipio = $request->municipio;
        $professor->bairro = $request->bairro;
        $professor->periodo = $request->periodo;
        $professor->cod_provincia = $request->provincia;
        $professor->data_nascimento = $request->data_nascimento;
        $professor->provincia = $request->provincia;
        $professor->telefone_principal = $request->telefone_principal;
        $professor->telefone_secundario = $request->telefone_secundario;
        $professor->email = $request->email;
              
        $professor->save();      
   
              if($professor){
            
                  return back()->with('success', 'Professor cadastrado com sucesso!');
              }else{
                  return back()->with('fail', 'Erro ao cadastrar professor,tente novamente!');
                          
              }   
        
      }

      
          

}
