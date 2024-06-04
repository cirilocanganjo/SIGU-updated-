@extends('admin.moduloAdmin')
@section('titulo', 'Notícias')
@section('conteudo')

<section>
    <div class="container">
        <div class="row col-md-8 offset-md-2">
            <form action="/adicionar.postagem" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input class="form-control" type="text" placeholder="Título da notícia" name="titulo" id="titulo">
                </div>

                <div class="form-group">
                    <label for="conteudo">Conteúdo:</label>
                    <textarea class="form-control" name="conteudo" id="conteudo" cols="30" rows="10" style="resize: none;"></textarea>
                </div>

                <div class="form-group">
                    <label for="imagem">Imagem:</label>
                   <input class="form-control" type="file" name="imagem" id="imagem">
                </div>

                {{--Botão Postar --}}
                <div class="form-group mt-2 d-flex justify-content-end">
                 <input class="btn btn-md btn-primary" type="submit" value="Publicar">
                </div>



            </form>
            
        </div>
    </div>
</section>



@endsection