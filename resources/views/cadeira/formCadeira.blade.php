@extends('admin.admin')
@section('titulo', 'Cadastrar Cadeira')
@section('conteudo')

<section class="container ">
    <p class="h3 mx-2">Disciplinas</p>
    <div class="row form_cadastro">
    <div class="col-md-12 mt-4">
        <p class="h3 col-md-4 offset-1 mb-2 title">Adicionar Disciplina</p>
        <hr class="w-30 col-md-6 offset-1 title">
        <div class="flex-form">


     <div class="grupo1 col-md-3">
        <form action="" method="">
            <div class="form-group">
                <label class="active form-label" for="nome" >Nome:</label>
                <input class="form-control "type="text" id="nome" name="nome" placeholder="Nome">
            </div>

            <div class="form-group">
                <label class="form-label" for="classificacao">Classificação:</label>
                <select class="form-select">
                    <option selected disabled>Selecionar tipo de cadeira</option>
                    <option value="Semestral">Semestral</option>
                    <option value="Anual">Anual</option>      
                </select>

             

                <div class="d-flex mt-3   form-group " style="margin-left: -1.5rem">
                   <div class=" d-flex form-check">
                       <input disabled  type="radio" class="form-check-input "  name="rb" id="rb1">
                       <label for="rb1" class="form-label h6">1º Semestre</label> 

                   </div>
                   <div class=" d-flex form-check">
                    <input disabled type="radio" class="form-check-input"  name="rb" id="rb2">
                    <label for="rb2" class="form-label h6">2º Semestre</label>
                   </div>
                </div> 

            </div>       
    
    </div> 
   

        <div class="grupo2 col-md-3">

            <div class="form-group">
                <label class="form-label" for="valor_cadeira">Valor da cadeira:</label>
                <input class="form-control" type="text" id="valor_cadeira" name="valor_matricula" placeholder="Valor da cadeira">
            </div>
            
            
                <div class="form-group">
                <label class="form-label" for="media">Curso</label>

                <select class="form-select">
                    <option selected disabled>Selecionar curso</option>
                    <option value=""></option>                   
                </select>
            </div>  
        </div>      
        <div class="grupo3 col-md-3"></div>

    </div>                                                  
         
        <div class="mx-8 mt-2">
          
                <input class="btn btn-primary" type="button" value="Salvar">
                <input  onclick="Troca('.table_dados','.form_cadastro')"class="btn btn-primary" type="button" value="Listar Disciplinas">

        </div>
           
    
    </div>

   

    </div>
</form>
     {{-- Tabela de listagem de dados pessoais de estudantes --}}
     <div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
        <div class=" row col-sm-12">
            <div>
            <div class="card table_dados">
                <div class="card-header ">
                   
                    <a href="#" onclick="Troca('.form_cadastro','.table_dados','.table_endereco')" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Diciplina</a>
                </div>
        <div class="card-body">
            <table class="table table-bordered  ">
                <thead>
                    <tr>
                        <th>Nº </th>
                        <th>Disciplina</th>
                        <th>Classificação</th>
                        <th>Valor Disciplina</th>
                        <th>Curso</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                     
                      
                       
                        <td>
                            <a href="" class="btn btn-md btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-md btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

    <script>
        document.querySelector('.form_cadastro').style.display = "none";
    
        function Troca(show, hide, option) {
        
            elementShow = document.querySelector(show);
            elementHide = document.querySelector(hide);
            elementOption = document.querySelector(option);
            elementShow.style.display = "block";
            elementHide.style.display = "none";
            elementOption.style.display = "none";
        
        
        }
        </script>
</div>
   

@endsection