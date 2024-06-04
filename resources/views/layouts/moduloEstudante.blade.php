<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/css/all.min.css">
    <link rel="stylesheet" href="/plugins/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/estilo.css">

  <title>@yield('titulo')</title>
</head>
<body>
  <header>
    <div>
      <p class="text text-center text-primary display-5 text-fluid"> Universidade de Belas</p>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-primary  rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
            <a class="navbar-brand " href="#">
            <img src="/img/logo.png" alt="Logotipo da Universidade de Belas" id="logo" style="width:95px"><br>
            </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text"></span>
         </button>

         <div class="  collapse p-1 navbar-collapse justify-content-md-end" id="navbarsExample9">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="/dashboard">Página Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/notas" tabindex="-1" aria-disabled="true">Notas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/horario" tabindex="-1" aria-disabled="true">Horário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pagamento</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">
                  Nome Estudante
              </a>
              <ul class="dropdown-menu container" aria-labelledby="dropdown10">
                <li><a class="dropdown-item" href="#">Perfil Estudante</a></li>
                <li><a class="dropdown-item" href="#">Dados de Acesso</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<!---Conteudo principal-->
    <main>


        @yield('conteudo')
        

        
    </main>
    <footer class="footer position-absolute bottom-2  py-2 w-100 text-center">
      <p  class=" rodape">&copy; {{date("Y")}} - Todos direitos reservados.</p>
    </footer>
    <script src="/js/jquery.js"></script>
    <script src="/js/script.js "></script>

    <script src="/plugins/js/bootstrap.bundle.min.js"></script>
    <script src="/plugins/js/all.min.js"></script>
    <script src="/plugins/js/fontawesome.min.js"></script>


  
</body>
</html>