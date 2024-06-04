@extends('admin.moduloAdmin')
@section('titulo', 'Cadastrar Estudante')
@section('conteudo')

<section class="container ">
<form action="{{$action}}" method="post" class="col-md-12  offset-md-3">
    @csrf
    <div class="form-group col-md-5 ">
        <label for="titulo">Titulo:</label>
        <input placeholder="Titulo da postagen" type="text" name="titulo" id="titulo" class="form-control">
        @error('titulo')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group col-md-5 ">
    <label for="titulo">Conteúdo:</label>
    <textarea style="resize: none" placeholder="Titulo da postagen" name="conteudo" id="conteudo" class="form-control"cols="30" rows="10" placeholder=" Digite sua postagem aqui...">
       
    </textarea>
    @error('conteudo')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group ">
       <input type="submit" value="Postar" class="mt-2 col-md-5 btn btn-sm btn-primary">
    </div>
</form>
</section>
 
           
   

@endsection