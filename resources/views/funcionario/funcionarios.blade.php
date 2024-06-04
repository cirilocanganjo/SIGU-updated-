        @extends('admin.admin')
        @section('titulo', 'Cadastrar Funcionário')
        @section('conteudo')
        <section class="container ">
    <p class="h3 mx-2">Funcionários</p>
    <div class="row form_cadastro">
        
            <p class="h3 col-md-4 offset-1 mb-2 title">Adicionar Funcionário</p>
            <hr class="w-30 col-md-4 offset-1 title">

                <div class="flex-form ">
                <div class="grupo1 col-md-3"> 
            
                <form action="" method="post"  class="" > 
                    <div class="form-group">
                        <label class="form-label" for="cargo">Cargo:</label>
                        <select class="form-select" name="cargo" id="cargo" placeholder="Cargo">
                            
                            <option value="">Selecionar cargo</option>                            
                            <option value="">Decano</option>
                            <option value="">Vice-decano</option>
                            <option value="">Reitor(a)</option>
                            <option value="">Vice-reitor(a)</option>
                            <option value="">Bibliotecário(a)</option>
                            <option value="">Segurança</option>
                            <option value="">Zelador(a)</option>
                        
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="active form-label" for="nome" >Nome:</label>
                        <input class="form-control "type="text" id="nome" name="nome" placeholder="Nome">
                    </div>
                        
                    <div class="form-group">
                        <label class="form-label" for="sobrenome">Sobrenome:</label>
                        <input class="form-control" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="data_nascimento">Data de nascimento:</label>
                        <input class="form-control" type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sexo">Sexo:</label>

                        <select class="form-select" name="sexo" id="sexo">
                        
                            <option value="">Sexo</option>
                            <option value="">Masculino</option>
                            <option value="">Femenino</option>                                
                        </select>
                    </div>
                </div> 

                <div class="grupo2 col-md-3">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label" for="numero_bi">Bilhete de Identidade:</label>
                            <input class="form-control" type="text" name="numero_bi" id="numero_bi" placeholder="Número do BI">
                        </div> 

                        <label class="form-label" for="nacionalidade">Nacionalidade</label>
                        <input class="form-control" type="text" name="nacionalidade" placeholder="Nacionalidade" id="nacionalidade">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="provincia">Provincia</label>
                        <select class="form-select" name="provincia" id="provincia">

                            <option selected disable>Selecionar província</option>
                        
                            <option value=""></option>                                    
                        </select>
                        </div>

                    <div class="form-group">
                        <label class="" for="municipio">Município</label>
                        <select class="form-select">
                        <option class="form-select" selected disabled>Selecionar municipio</option>
                        
                        
                        <option value=""></option>
                        
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input class="form-control" placeholder="Bairro" type="text" name="bairro" id="bairro">
                    </div>                                                      
                </div>

                <div class="grupo3 col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="telefone">Telefone principal:</label>
                        <input class="form-control" type="tel" name="bairro" id="telefone" placeholder="Telefone principal">
                        </div>

                        <div class="form-group">
                        <label class="form-label" for="bairro">Telefone secundário:</label>
                        <input class="form-control" type="tel" name="bairro" id="bairro" placeholder="Telefone secundário">
                        </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input class="form-control" type="email" placeholder="Email" name="email" id="email">
                    </div>

                    <div class="for-group">
                        <label for="foto">Selecionar foto:</label>
                        <input class="form-control" type="file" name="foto" id="foto">
                    </div>

                   
                </div>

            </div>
                <div class="mx-8 mt-2">

                    <input class="btn btn-primary" type="submit" value="Salvar">
                    <input class="btn btn-primary " onclick="Troca('.table_dados','.form_cadastro')" type="button" value="Listar Funcionários">
                </div>
       
        </form>
    </div> 
                   
   {{-- Tabela de listagem de dados pessoais dos funcionarios--}}
   <div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
    <div class=" row col-sm-12">
        <div>
        <div class="card table_dados">
            <div class="card-header d-flex justify-content-center">
                <a href="#" onclick="Troca('.table_dados','.table_endereco','.table_funcionario_contacto')" class="btn btn-md btn-primary m-1"><i class="fa fa-table"></i> Dados Pessoais</a>
                <a href="#" onclick="Troca('.table_endereco','.table_contacto','.table_dados')" class="btn btn-md btn-primary m-1"><i class="fa fa-map"></i> Endereços</a>
                <a href="#" onclick="Troca('.table_contacto','.table_endereco','.table_dados')" class="btn btn-md btn-primary m-1"><i class="fa fa-phone-square" aria-hidden="true"></i> Contactos</a>
                <a href="#" onclick="Troca('.form_cadastro','.table_endereco','.table_dados')" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Funcionário</a>
            </div>
    <div class="card-body">
        <table class="table table-bordered  ">
            <thead>
                <tr>
                    <th>Processo</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nascimento</th>
                    <th>Sexo</th>
                    <th>BI nº</th>
                    <th>Nacionalidade</th>
                    <th>Foto</th>
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
</div>
</div>
</div>


{{-- Tabela de listagem de enderecos dos funcionarios --}}

<div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
    <div class=" row col-sm-12">
        <div>
        <div class="card table_endereco">
            <div class="card-header d-flex justify-content-center">
                <a href="#" onclick="Troca('.table_dados','.table_endereco','.table_contacto')" class="btn btn-md btn-primary m-1"><i class="fa fa-table"></i> Dados Pessoais</a>
                <a href="#" onclick="Troca('.table_endereco','.table_contacto','.table_dados')" class="btn btn-md btn-primary m-1"><i class="fa fa-map"></i> Endereços</a>
                <a href="#" onclick="Troca('.table_contacto','.table_endereco','.table_dados')" class="btn btn-md btn-primary m-1"><i class="fa fa-phone-square" aria-hidden="true"></i> Contactos</a>
                <a href="#" onclick="Troca('.form_cadastro','.table_endereco','.table_contacto')" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Estudante</a>

            </div>
    <div class="card-body">
        <table class="table table-bordered  ">
            <thead>
                <tr>
                    <th>Processo</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Provincia</th>
                    <th>Município</th>
                    <th>Bairro</th>
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
</div>
</div>
</div>

{{-- Tabela de listagem de contactos dos contactos --}}
<div class=" mt-2 container col-md-12 d-md-flex justify-content-between ">
    <div class=" row col-sm-12">
        <div>
        <div class="card table_contacto">
            <div class="card-header d-flex justify-content-center">
                <a href="#" onclick="Troca('.table_dados','.table_endereco','.table_contacto')" class="btn btn-md btn-primary m-1"><i class="fa fa-table"></i> Dados Pessoais</a>
                <a href="#" onclick="Troca('.table_endereco','.table_dados','.table_contacto')" class="btn btn-md btn-primary m-1"><i class="fa fa-map"></i> Endereços</a>
                <a href="#" onclick="Troca('.table_contacto','.table_endereco','.table_dados')" class="btn btn-md btn-primary m-1"><i class="fa fa-phone-square" aria-hidden="true"></i> Contactos</a>
                <a href="#" onclick="Troca('.form_cadastro','.table_endereco','.table_contacto')" class="btn btn-md btn-primary m-1 btn_show-form" ><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Estudante</a>

            </div>
    <div class="card-body">
        <table class="table table-bordered  ">
            <thead>
                <tr>
                    <th>Processo</th>
                    <th>Nome</th>
                    <th>Telefone Principal</th>
                    <th>Telefone Alternativo</th>
                    <th>E-mail</th>
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
</div>
</div>
 
<script>
document.querySelector('.form_cadastro').style.display = "none";
document.querySelector('.table_endereco').style.display = "none";
document.querySelector('.table_contacto').style.display = "none";
function Troca(show, hide, option) {

    elementShow = document.querySelector(show);
    elementHide = document.querySelector(hide);
    elementOption = document.querySelector(option);
    elementShow.style.display = "block";
    elementHide.style.display = "none";
    elementOption.style.display = "none";


}
</script>
   
         </section>           
                    
                   
           
        
    @endsection