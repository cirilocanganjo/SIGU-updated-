<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Autenticacao\AutenticacaoController;
use App\Http\Controllers\Estudante\EstudanteController;
use App\Http\Controllers\PrincipalController;
use App\Models\Autenticacao;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Acao dos usuarios
Route::get("/", [AutenticacaoController::class, "index"]);
Route::get('/adicionarUsuario', [AutenticacaoController::class, 'adicionarUsuario']);
Route::post("/entrar", [AutenticacaoController::class, "entrar"])->name('entrar');
//Fim da acao dos usuarios

// Ações do Administrador 
//curso inicio
Route::get('/dashboardAdmin', [AdminController::class, 'index_admin'])->name('dashboardAdmin');
Route::get("/curso.listar",[AdminController::class,"curso"])->name("cursos");
Route::get("/form.curso",[AdminController::class,"curso_form"]);
Route::post("/curso.adicionar",[AdminController::class,"adicionarCurso"]);
Route::get("/{id}/excluir",[AdminController::class,"excluirCurso"]);
Route::get('/{id}.encontrar',[AdminController::class,"encontrar_curso"]);
Route::post("editar",[AdminController::class,"actualizarCurso"]);
//curso fim

//Noticias inicio
Route::get("/noticia.novo", [AdminController::class, 'formNoticia']);
Route::post("/adicionar.postagem", [AdminController::class, 'adicionarPostagem']);
//Noticias fim

// Estudante inicio
Route::get("/formulario",[AdminController::class,"formEstudante"])->name('formEstudante');
Route::post('/adicionarEstudante', [AdminController::class, 'adicionarEstudante'])->name('adicionarEstudante');
Route::get("/estudante.listar",[AdminController::class,"estudanteListar"]);
Route::get("/estudante.endereco",[AdminController::class,"estudanteEndereco"])->name('estudanteEndereco');
Route::get("/estudante.contacto",[AdminController::class,"estudanteContacto"])->name('estudanteContacto');
Route::get("/estudante.excluir.{id}",[AdminController::class,"estudanteExcluir"])->name('estudanteExcluir');
Route::get("/estudante.editar.{id}",[AdminController::class,"estudanteEditar"])->name('estudanteEditar');
Route::post("/estudante.actualizar/{id}",[AdminController::class,"estudanteActualizar"])->name('estudanteActualizar');

// Estudante fim

// Professor inicio
Route::get('/adicionarProfessor', [AdminController::class, 'listarProfessor'])->name('adicionarProfessor');
Route::get('formProfessor', [AdminController::class, 'formProfessor']);
// Professor fim



// Modulo Estudante
Route::get('/estudanteDashboard', [EstudanteController::class, 'estudanteDashboard'])->name('estudanteDashboard');
Route::get('/informacoes', [EstudanteController::class, 'verInformacoes']);
// Fim Modulo Estudante




 

