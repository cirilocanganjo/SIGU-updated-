@extends('admin.moduloAdmin')
@section('titulo', 'Cadastrar Curso')
@section('conteudo')

<section class="container ">
 
    {{-- Tabela de listagem de dados pessoais de estudantes --}}
    <div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
        <div class=" row col-sm-12">
            <div>
            <div class="card table_dados">
                <div class="card-header ">
                   
                    <a href="/form.curso" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Curso</a>
                </div>
                <div class="table-responsive">
                <table class="table table-hover table-bordered  table-striped">
                <thead class="table-dark">
                    <tr class='text-center fw-bold'>
                        <th>Curso</th>
                        <th>Mensalidade</th>
                        <th>Val. matrícula</th>
                        <th>Val. Confirmação</th>
                        <th>Val. Recurso</th>
                        <th>Val. Exame Especial</th>            
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cursos->count() > 0)
                    @foreach($cursos as $curso)
                    <tr class='text-center fw-bold'>
                        <td>{{$curso->nome}}</td>
                        <td>{{$curso->mensalidade}}</td>
                        <td>{{number_format($curso->valor_matricula,2,',','.')}}</td>
                        <td>{{number_format($curso->valor_confirmacao,2,',','.')}}</td>
                        <td>{{number_format($curso->valor_recurso,2,',','.')}}</td>
                        <td>{{number_format($curso->valor_exame_especial,2,',','.')}}</td>
                      
                       
                        <td>
                            <a href="{{$curso->cod_curso}}.encontrar" class="btn btn-md btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{$curso->cod_curso}}" class="btn btn-md btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            @if($cursos->count() === 0)
            <div class="container col-md-10 alert mensagem">
                <div class="row">
               <span class="text-center">
                   Nenhum curso cadastrado.
                
                   <a href="">Adicionar</a>
                </span>  
                </div>
            </div>
            @endif
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

    </section>
   
@endsection