<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
  <body style="overflow-x: hidden;">

    <!-- Flash: mensagem //-->
    @if ( Session::has('mensagem') )
      <p class="alert alert-info">{{ Session::get('mensagem') }}</p>
    @endif

    <!-- Usuario autenticado //-->
    @if ( Auth::check() )
      <nav class="navbar navbar-light bg-secondary">
        <span class="text-white">Usuário: {{ Auth::user()->name }} -
          @if ( Auth:: user()->type==1)
            Administrador do Sistema
          @endif
          @if ( Auth:: user()->type==2)
            Operador do Sistema
          @endif
          @if ( Auth:: user()->type==3)
            Paciente
          @endif
          @if ( Auth:: user()->type==1 && Auth:: user()->type==2 && Auth:: user()->type==3)
            Usuário não Cadastrado
          @endif   

        </span>

      </nav>
    @endif


    <h1 style="text-align: center; background-color: lightgray"> Sistema de Controle de Solicitações de Análises Laboratoriais </h1>


    <div class="dropdown">

      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Área Geral</button>

      <div class="dropdown-menu" aria-labbelledby="dropdownMenuButton">

        <a class="dropdown-item" href="{{ route('procedure.index') }}">Listas de Procedimentos</a>

      </div>

      <a class="btn btn-secondary" href="{{ route('register') }}">Cadastrar Novo Paciente/Tela de Paciente</a>
      <a class="btn btn-secondary" href="/home">Login/Tela de Tipos de Usuário</a>
      <a class="btn btn-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf          
          </form>

    </div>

    <!-- CONTEUDO //-->
    @yield('conteudo')


  </body>
</html>

    




    
            