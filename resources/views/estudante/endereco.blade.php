@extends('admin.moduloAdmin')
@section('titulo', 'Cadastrar Estudante')
@section('conteudo')


  {{-- Tabela de listagem de enderecos dos estudantes --}}
  <div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
   
        <div>
        <div class="card table_endereco">
            <div class="card-header d-flex justify-content-center">
                <a href="estudante.listar" class="btn btn-md btn-primary m-1"><i class="fa fa-table"></i> Dados Pessoais</a>
                <a href="estudante.endereco"  class="btn btn-md btn-primary m-1"><i class="fa fa-map"></i> Endereços</a>
                <a href="estudante.contacto"  class="btn btn-md btn-primary m-1"><i class="fa fa-phone-square" aria-hidden="true"></i> Contactos</a>
                <a href="formulario" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Estudante</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
        <table class="table ">
            <thead class="table-dark text-center">
                <tr>
                    <th>Processo</th>
                    <th>Nome</th>
                    <th>Provincia</th>
                    <th>Município</th>
                    <th>Bairro</th>
                </tr>
            </thead>
            <tbody class="text-center">
             @if($estudantes->count())
                @foreach($estudantes as $estudante)
                <tr>
                        <td>{{$estudante->numero_processo}}</td>
                        <td>{{$estudante->nome}}</td>
                        <td>{{$estudante->provincia}}</td>
                        <td>{{$estudante->municipio}}</td>
                        <td>{{$estudante->bairro}}</td>
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
</div>
@endsection