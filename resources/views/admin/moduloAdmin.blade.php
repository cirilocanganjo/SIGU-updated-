  <!DOCTYPE html>
  <html lang="pt-pt">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    
    
    
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <!-- Estilo Customizado -->
    <link href="./assets/css/materialdize.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/plugins/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="/plugins/css/all.min.css"> 
    <link rel="stylesheet" href="/plugins/css/fontawesome.min.css"> 
    <link rel="stylesheet" href="/css/estilos.css"> 
    <link rel="stylesheet" href="/css/responsividade.css">
    <title>@yield('titulo')</title>
  </head>

  <body>
  <aside class="sidenav bg-color-nav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-primary" id="sidenav-main">
    <div class="sidenav-header mt-2">       
        <div class="logo text-center">
        <img src="{{asset('img/logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        </div>

        <div class="texto-logo text-center">
          <span class="ms-1 font-weight-bold text-white">SGU-Unibelas</span>
        </div>
      
    </div>
    <div class="w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-light" href="/admin">
            <i class="fa-solid fa-lg mx-2 fa-house " id="home-icon" ></i>
            <span class="nav-link-text ms-1 text-blue">Página de Início</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/funcionario.novo">
             
           
              <i class="fa-solid fa-user-tie mx-2 fa-lg"></i>
              <span class="nav-link-text ms-1 h6 text-light ">  
              Funcionários
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{route('adicionarProfessor')}}">
            <i class="fa-solid fa-lg fa-chalkboard-user mx-2"></i>
            <span class="nav-link-text ms-1">Professores</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="estudante.listar">
          
            <i class="fa-solid fa-user-graduate fa-lg mx-2"></i>
            <span class="nav-link-text ms-1">Estudantes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{route('cursos')}}">
            <i class="fa fa-book fa-lg mx-2"></i>
            <span class="nav-link-text ms-1">Cursos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/cadeira.novo">
            <i class="fa-solid fa-pen-to-square fa-lg mx-2"></i>
            <span class="nav-link-text ms-1">Disciplinas</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">

            <i class="fa fa-chart-line fa-lg mx-2"></i>
            <span class="nav-link-text ms-1">Pagamentos</span>
          </a>
        </li>
        
      </ul>
    </div>
     
  </aside>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="form-group">
              <input type="search" name="pesquisar" placeholder="Pesquisar..." class=" " id="btn-search">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @if(session('sucesso'))
        <div class="alert alert-success container col-md-8">
            <div class="row ">
                <p class='fw-bold text-center text-light'>{{session('sucesso')}}</p>
            </div>
    </div>
        @endif
      @yield("conteudo")
     
  </main>
 
  
    
  <!--   Core JS Files   -->
  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/script.js "></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>


  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
 
</body>
</html>
  