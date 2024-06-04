@extends('layouts.moduloEstudante')
@section('titulo','Informções')
@section('conteudo')
<section class="m-5 mt-3">
 <p class="display-5  text-center">Informações</p>
    <div class=" ">
       
        <div class="row col-md-10 offset-md-1  p-3 ">
          @if($postagens->count() > 0)
              @foreach($postagens as $post)
            <div class="card mb-3">
              
                <div class="card-header">
                 <span>
                 <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i>
                  <span class="autor">Publicado por:</span> {{$post->autor}}
                </span>
                </div>
                  
                   
                <div class="card-body">
                  <h5 class="card-title">
                      Titulo: {{$post->titulo}}
                    </h5>
                  <p class="card-text mx-4">
                    {{$post->conteudo}}
                    </p>
                  <span>
                    <i class="fa fa-clock" aria-hidden="true"></i>
                      Data: {{$post->created_at->diffForHumans()}}
                    </span>
                </div>
                
              </div>
              @endforeach
                @endif

        </div>
 
    </div>

</section>

@endsection