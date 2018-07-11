@extends('operador.index')

@section('operador')

    <h1>Editar Procedimento</h1>

    <form method="post" action="{{ route('procedure.update', $procedure->id) }}">

        @csrf
        @method('PATCH')

        Preço: <input type="text" name="price"> <br>        
       
       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

    <div class="button">
      <a class="btn btn-secondary" href="/operador" >Voltar</a>
    </div>

@endsection('operador')
