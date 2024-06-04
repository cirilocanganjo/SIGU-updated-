@extends('layouts.moduloEstudante')
@section('titulo','Página Inícial')
@section('conteudo')

<section class="container ">
     <div class="row container col-md-12 d-flex justify-content-around mt-4 ">
       
          <div class="card bg-primary mt-2" style="width: 18rem;">
               <a href="" class="nav-link d-block px-2">
                    <div class="card-body text-center text-light">
                       <i class="fa fa-table fa-10x" aria-hidden="true"></i>
                    <p class="card-text h4 mt-2">
                            Consultar Notas
                    </p>
                    </div>
               </a>
          </div>

        <div class="card bg-primary mt-2" style="width: 18rem;">
           <a href="#" class="nav-link d-block px-2">
                <div class="card-body text-center text-light">
                    <i class="fa fa-book fa-10x" ></i>
                <p class="card-text h4 mt-2">
                        Biblioteca
                        Virtual
                </p>
                </div>
           </a>
          </div>

          

           <div class="card bg-primary mt-2" style="width: 18rem;">
            <a href="/informacoes" class="nav-link d-block px-2">
                 <div class="card-body text-center text-light">
                    <i class="fa-brands fa-neos fa-10x"></i>
                 <p class="card-text h4 mt-2">
                         Informações
                 </p>
                 </div>
            </a>
           </div>

         

         



     </div>
    
</section>


@endsection