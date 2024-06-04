<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Hash;
use Session;

class AutenticacaoController extends Controller
{
    //  Retornar formulario de cadastro
   public function index()
   {
       //$action = "entrar";
      return view("usuario.form-login");
   }

   // Realizar a acao de entrar no sistema
   public function entrar(Request $request)
   {
      //Validação para campos obrigatórios
        $request->validate([
        'numero_processo' => 'required',
        'senha' => 'required'
        
        ]); 


         /* Verificar se os Dados do banco de dados e o introduzido nos
             Inputs são os mesmos */
            
             $usuario = Usuario::where('numero_processo', '=', $request->numero_processo)->first();
                 
             if($usuario){  
              
             if(Hash::check($request->senha, $usuario->senha)){
                  $request->session()->put('loginId',$usuario->id_usuario);
                  
             }else{
              return back()->with('fail', 'A palavra passe está errada!');
             }

            }else{
               return back()->with('fail', 'Numero de processo incorreto!');

            }

            /* Verificando o nivel de Acesso ao sistema */
            if($usuario->nivel_acesso  === 'Estudante')
            {                  
               return redirect('estudanteDashboard');        
            }elseif($usuario->nivel_acesso  === 'Administrador')
            {
               return redirect('dashboardAdmin');
            }
        


   }

   // Realizar a acao de sair do sistema
   public function sair()
   {
       
   }

   public function adicionarUsuario(){

      $usuario = new Usuario();
      $usuario->nome_usuario = 'Cirilo Canganjo';
      $usuario->numero_processo = '1795';
      $usuario->nivel_acesso = 'Administrador';
      $usuario->senha = Hash::make('cirilo');
      $usuario->save();
      return('Usuario salvo!');



   }

    
 

}
