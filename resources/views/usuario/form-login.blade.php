
  @extends("usuario.moduloAutenticacaol")
  @section("titulo","Autenticação")
  @section("conteudo")
  
<section class="main-content  mt-0" >
  <div class="page-header align-items-start min-vh-100 " id="bg-image">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">

           <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary caixa-logo border-radius-lg py-3 pe-1">
                
                <div class="imagem-logo">
                  <img src="{{asset('img/logo.png')}}" alt="Logotipo da universidade">
                </div>
                
                <h4 class="text-white  text-center mt-0 mb-0">Autenticação</h4>
                
              </div>
            </div>

            <div class="card-body">
              <form role="form" class="text-start form-login" action="{{route('entrar')}}" method="post">
               @csrf
               
            {{-- Condições para verificação das sessões --}}
            @if(Session::has('success'))
						<div class="alert alert-success">{{Session::get('success')}}</div>
						@endif		
						
						@if(Session::has('fail'))
						<div class="alert alert-danger">{{Session::get('fail')}}</div>
						@endif


                <div class=" my-3">
                  <label class="form-label" for="num-processo">Nº de processo</label>
                  <input type="number" class="form-control" name="numero_processo" id="num-processo" value="{{old('numero_processo')}}">
                  <span class="text-danger">@error('numero_processo') {{$message}} @enderror </span>
                </div>

                <div class=" mb-3">
                  <label class="form-label" for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha" value="{{old('senha')}}">
                  <span class="text-danger">@error('senha') {{$message}} @enderror </span>
                </div>

                <div class="form-check form-switch d-flex align-items-center mb-3">
                  <input class="form-check-input check" onkeypress="click()" type="checkbox" id="rememberMe">
                  <label class="form-check-label mb-0 ms-2" for="rememberMe">Lembrar - me</label>
                </div>
                <div class="text-center">
                  <button type="submit" id="botao-entrar" class="btn  bg-primary text-light font-weight-bold w-100 my-4 mb-2">Entrar</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</sectio>

@endsection