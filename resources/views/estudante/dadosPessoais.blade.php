@extends('admin.moduloAdmin')
@section('titulo', 'Cadastrar Estudante')
@section('conteudo')
      {{-- Tabela de listagem de dados pessoais de estudantes --}}
<div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
   
      
        
              
<div class="card table_dados w-200">
    <div class="card-content">

        <div class="card-header">
            <a href="estudante.listar" class="btn btn-md btn-primary m-1"><i class="fa fa-table"></i> Dados Pessoais</a>
            <a href="estudante.endereco"  class="btn btn-md btn-primary m-1"><i class="fa fa-map"></i> Endereços</a>
            <a href="estudante.contacto"  class="btn btn-md btn-primary m-1"><i class="fa fa-phone-square" aria-hidden="true"></i> Contactos</a>
            <a href="formulario" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Estudante</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table text-center">
                    <thead class="table-dark text-center">
                    <tr>
                        <th>Processo</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nascimento</th>
                        <th>Genero</th>
                        <th>Nome Pai</th>
                        <th>Nome Mãe</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($estudantes->count())
                        @foreach($estudantes as $estudante)
                        <tr>
                            <td>{{$estudante->numero_processo}}</td>
                            <td>{{$estudante->nome}}</td>
                            <td>{{$estudante->sobrenome}}</td>
                            <td>{{$estudante->data_nascimento}}</td>
                            <td>{{$estudante->sexo}}</td>
                            <td>{{$estudante->nome_pai}}</td>
                            <td>{{$estudante->nome_mae}}</td>
                            
                          
                      
                            <td>
                                <a href="estudante.editar.{{$estudante->numero_processo}}" class="btn btn-md btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="/estudante.excluir.{{$estudante->numero_processo}}" class="btn btn-md btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    </table>
    
                </div>
        </div>
    </div>
</div>
    
    </div>


@endsection



