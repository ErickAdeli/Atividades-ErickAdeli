@extends('administrador.index')

@section('administrador')

    <h1>Inserir Um Procedimento</h1>

    <form method="post" action="{{ route('procedure.store') }}">

        @csrf        

        Nome do Procedimento: <input type="text" name="name"><br>

        Preço: <input type="text" name="price"> <br>

        Administrador:
          <select name="user_id">
            <option value="">Selecione:</option>
            @foreach ($user as $u)
              <option value="{{ $u->id }}">{{ $u->name }}</option>
            @endforeach
          </select>

          <br>        
          
        <input type="submit" name="btnSalvar" value="Salvar">

    </form>

    <div class="button">
      <a class="btn btn-secondary" href="/administrador" >Voltar</a>
    </div>

@endsection('administrador')