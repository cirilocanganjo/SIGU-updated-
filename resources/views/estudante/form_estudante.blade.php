@extends('admin.moduloAdmin')
@section('titulo', 'Cadastrar Estudante')
@section('conteudo')

    <section class="container ">
        <p class="h3 mx-8   title" >Estudantes</p>
        <div class="row">
                <div class="col-md-12 " style="margin-bottom: -1rem">

                <div class="alert alert-success">
                    
                </div>

            <div class="flex-form" >
                 <div class="grupo1 col-md-3">  
                       @if(session('success'))
                <div class="alert alert-warning">{{session('success')}}</div>
                @endif

                {{-- Apresentação de mensagem caso haja falhas--}}
                @if(session('fail'))
                <div class="alert alert-danger">
                    <span>{{session('fail')}}</span> 
                </div>
                @endif
                  <form enctype="multipart/form-data" action="{{$action}}" method="post" enctype='multipartFormData'  >
                    @csrf
                    <div class="form-group">
                        <label for="ano_academico">Ano Acadêmico:</label>
                        <select name="ano_academico" id="ano_academico" class="form-select">
                            <option disabled selected value="{{$estudante->ano_academico ?? ''}}">
                                {{ $estudante->ano_academico ?? 'Selecionar ano Acadêmico' }}
                            </option>
                            <option value="1º ano">1º ano</option>
                            <option value="2º ano">2º ano</option>
                            <option value="3º ano">3º ano</option>
                            <option value="4º ano">4º ano</option>
                            <option value="5º ano">5º ano</option>
                        </select>
                         @error('ano_academico')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div> 

                    <div class="form-group">
                        <label class="active form-label" for="nome" >Nome:</label>
                        <input class="form-control "type="text" id="nome" name="nome" placeholder="Nome" value="{{$estudante->nome ?? ''}}">
                     @error('nome')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sobrenome">Sobrenome:</label>
                        <input class="form-control" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="{{$estudante->sobrenome ?? ''}}">
                     @error('sobrenome')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="nome_pai">Nome do Pai:</label>
                        <input placeholder="Nome do Pai" type="text" name="nome_pai" id="nome_pai" class="form-control" value="{{$estudante->nome_pai ?? ''}}">
                         @error('nome_pai')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nome_mae">Nome da Mãe:</label>
                        <input placeholder="Nome da Mãe" type="text" name="nome_mae" id="nome_mae" class="form-control" value="{{$estudante->nome_mae ?? ''}}">
                     @error('nome_mae')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>

                        <div class="form-group">
                            <label class="form-label" for="data_nascimento">Data de nascimento:</label>
                            <input class="form-control" type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento" value="{{$estudante->data_nascimento ?? ''}}">
                          @error('data_nascimento')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                        </div>
                        </div> 

                        <div class="grupo2 col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="sexo">Genero:</label>
            
                                <select class="form-select" name="sexo" id="sexo">
                                
                                    <option selected disabled value="{{$estudante->sexo ?? ''}}">
                                       {{$estudante->sexo ?? 'Selecionar o Sexo'}} 
                                    </option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>                                
                                  @error('sexo')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </select>

                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label" for="numero_bi">Bilhete de Identidade:</label>
                                    <input class="form-control" type="text" name="numero_bi" id="numero_bi" placeholder="Número do BI" value="{{$estudante->numero_bi ?? ''}}">
                                      @error('numero_bi')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div> 

                                <label class="form-label" for="nacionalidade">Nacionalidade</label>
                                <input class="form-control" type="text" name="nacionalidade" placeholder="Nacionalidade" id="nacionalidade" value="{{$estudante->nacionalidade ?? ''}}">
                              @error('nacionalidade')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="provincia">Provincia</label>
                                <select class="form-select" name="provincia" id="provincia">
                                    <option selected disable value="{{$estudante->provincia_id ?? ''}}">
                                        {{$estudante->provincia ?? 'Selecionar província'}}"  
                                    </option>
                                        @foreach($provincias as $provincia)
                                        <option selected disable>{{$provincia->nome_provincia}}</option>

                                        @endforeach

                                    <option value=""></option>                                    
                                </select>
                                  @error('provincia')
                                 <span class="text-danger">{{$message}}</span>
                                  @enderror
                        </div>

                            <div class="form-group">
                                <label class="" for="municipio">Município</label>
                                <input class="form-control" placeholder="Município" type="text" name="municipio" id="municipio" value="{{$estudante->municipio ?? ''}}">

                              @error('municipio')
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>

                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input class="form-control" placeholder="Bairro" type="text" name="bairro" id="bairro" value="{{$estudante->bairro ?? ''}}">
                          @error('bairro')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>  
                                                                        
                        </div>

                    <div class="grupo3 col-md-3">
                        <div class="form-group">
                            <label for="periodo">Período:</label>
                            <select name="periodo" id="periodo" class="form-select">
                                <option disabled selected value="{{$estudante->periodo ?? ''}}">
                                   {{$estudante->periodo ?? 'Selecionar Período'}}
                                </option>
                                <option value="Manhã">Manhã</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noite">Noite</option>
                            </select>
                              @error('periodo')
                             <span class="text-danger">{{$message}}</span>
                             @enderror
                        </div> 
                        <div class="form-group">
                            <label for="curso">Curso:</label>
                            
                            <select name="curso" id="curso" class="form-select">
                                
                                <option disabled selected value="{{$estudante->nome ?? ''}}">
                                    {{$estudante->nome ?? 'Selecionar Curso'}}
                                </option>
                                @foreach($cursos as $curso)
                                <option value="{{$curso->cod_curso}}">{{$curso->nome}}</option>    
                                @endforeach
                                
                            </select>
                              @error('curso')
                                 <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div> 
                        
                        <div class="form-group">
                            <label class="form-label" for="telefone" >Telefone principal:</label>
                            <input class="form-control" type="tel" name="telefone_principal" id="telefone" placeholder="Telefone principal" value="{{$estudante->telefone_principal ?? ''}}">
                              @error('telefone_principal')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label class="form-label" for="telefone_secundario">Telefone secundário:</label>
                            @if($action === 'estuante.actualizar')
                            <input class="form-control" type="tel" name="telefone_secudario" id="telefone_secundario" placeholder="{{$estudante->telefone_secundario ?? 'Nenhum'}}" >

                            @else
                            <input class="form-control" type="tel" name="telefone_secudario" id="telefone_secundario" placeholder="Telefone Secundario">
                   

                            @endif

                              @error('telefone_secundario')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input class="form-control" type="email" placeholder="Email" name="email" id="email" value="{{$estudante->email ?? ''}}">
                          
                            @error('email')
                        <span class="text-danger">{{$message}}</span>
                         @enderror
                        </div>

                        <div class="for-group">
                            <label for="foto">Selecionar foto:</label>
                            <input class="form-control" type="file" name="foto" id="foto">
                           
                        </div>

                       
                        
                    </div>

                </div>
                <div class=" mt-2 " style="display:flex; justify-content:flex-end;">

                    <input class="btn btn-primary" type="submit" value="Salvar" style=" margin-right:.3rem">
                    <a href="estudante.listar" class="btn btn-primary " style=" margin-right:14rem">Listar Estudantes</a>
           
                </div>
            </form>
            </div> 
            </div>
           
             
         

    </section>
 
           
   

@endsection


