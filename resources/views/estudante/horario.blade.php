@extends('layouts.dashboard_estudante')
@section('titulo','Aproveitamento')
@section('conteudo')
<section class="container col-md-12 mt-5">
    <div class="row col-md-12">
        <div class="card">
            <div class="card-header">
                <p class="h2 text-center">
                    
                   Horário
                </p>
            </div>
            <div class="card-body table-responsive">
                <table class="table  table-fluid table-bordered table align-middle ">
                    <thead class="table-primary ">
                        <tr class="text-center">
                            <th>Tempo</th>
                            <th>Segunda</th>
                            <th>Terça</th>
                            <th>Quarta</th>
                            <th>Quinta</th>
                            <th>Sexta</th>
                            <th>Sábado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="text-center h5">Periodo</td>
                          

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>





@endsection