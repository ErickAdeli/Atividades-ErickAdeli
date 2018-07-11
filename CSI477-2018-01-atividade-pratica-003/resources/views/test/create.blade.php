@extends('usuario.index')

@section('usuario')

    <h1>Inserir Um Exame</h1>

    <form method="post" action="{{ route('test.store') }}">

        @csrf

        Data: <input type="date" name="date"> <br>

        Paciente: <input type="number" name="user_id" value="{{Auth::user()->id}}" readonly><br>
          <!--
            <select name="user_id">
            <option value="">Selecione:</option>
            @foreach ($user as $u)
              <option value="{{ $u->id }}">{{ $u->name }}</option>
            @endforeach
          </select>

          <br>

          -->         
        
        Procedimento:
          <select name="procedure_id">
            <option value="">Selecione:</option>
            @foreach ($procedure as $p)
              <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endforeach
          </select>

          <br>        
          
        <input type="submit" name="btnSalvar" value="Salvar">

    </form>

    <div class="buttons">
      
      <a class="btn btn-secondary" href="/usuario" >Voltar</a><br>

    </div>

@endsection('usuario')