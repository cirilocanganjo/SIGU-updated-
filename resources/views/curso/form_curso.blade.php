@extends('admin.moduloAdmin')
@section('titulo', 'Cadastrar Curso')
@section('conteudo')

<section class="container ">
    <p class="h3 mx-2 title">Cursos</p>
    <div class="row form_cadastro">
    <div class="col-md-12 mt-4">

        <div class="flex-form  ">

        <form action="{{$action}}" method="post">
        @csrf
       <input type="hidden" name="cod_curso" value="{{$curso->cod_curso ?? ''}}">
        
       <div class="grupo1 col-md-12 d-flex  ">  
        <div class="form-group">
        <label class="active form-label " for="nome" >Curso:</label>
        <input class="form-control "type="text" id="nome" value="{{$curso->nome ??''}}" name="nome" placeholder="Curso">
        @error('nome')
            <span class='text text-danger'>{{$message}}</span>
        @enderror
    </div>

    <div class="form-group mx-2">
        <label class="form-label" for="mensalidade">Mensalidade:</label>
        <input class="form-control" type="text" id="mensalidade" value="{{$curso->mensalidade ??''}}"  name="mensalidade" placeholder="mensalidade">
        @error('mensalidade')
            <span class='text text-danger'>{{$message}}</span>
        @enderror
    </div>

  
    <div class="form-group">
        <label class="form-label" for="valor_exame_especial">Valor do exame especial:</label>
        <input value="{{$curso->valor_exame_especial ??''}}"  class="form-control" type="text" name="valor_exame_especial" id="valor_exame_especial" placeholder="Valor do exame especial">
        @error('valor_exame_especial')
            <span class='text text-danger'>{{$message}}</span>
        @enderror
    </div>   
    </div> 

    <div class="grupo2 col-md-12 d-flex  ">
        
        <div class="form-group ">
            <label class="form-label" for="valor_matricula">Valor da matrícula:</label>
            <input value="{{$curso->valor_matricula ??''}}"   class="form-control " type="text" id="valor_matricula" name="valor_matricula" placeholder="Valor da matrícula">
            @error('valor_matricula')
            <span class='text text-danger'>{{$message}}</span>
           @enderror
        </div>

            <div class="form-group mx-2 ">
                <label class="form-label" for="v">Valor da confirmação:</label>
                <input value="{{$curso->valor_confirmacao ??''}}"  class="form-control " type="text" id="valor_confirmacao" name="valor_confirmacao" placeholder="Valor da confirmação">
            @error('valor_confirmacao')
            <span class='text text-danger'>{{$message}}</span>
            @enderror
            </div>
            <div class="form-group mx-2">
                   
                <label class="form-label" for="valor_recurso">Valor do recurso:</label>
                <input  value="{{ $curso->valor_recurso ?? ''}}" class="form-control" type="text" name="valor_recurso" id="valor_recurso" placeholder="Valor do recurso">
                @error('valor_recurso')
                <span class='text text-danger'>{{$message}}</span>
                @enderror
                </div> 

                </div> 

                                                             
         </div>

            <div class="grupo3 col-md-3 " id="btn-action">
               
                <input class="btn btn-primary  mt-3" type="submit" value="Salvar">
                <a href="{{route('cursos')}}" class="mt-3 btn btn-primary">Listar Cursos</a>

                
            </div>
            
        </div>
      </div> 
      
     </div>

    </div>
    
</form>
    
</div>
</div>
</div>
</div>
</div>

         

    </section>
   
@endsection