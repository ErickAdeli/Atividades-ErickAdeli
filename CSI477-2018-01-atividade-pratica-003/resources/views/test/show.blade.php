@extends('usuario.index')

@section('usuario')

<h1>Dados do Exame</h1>

<p>Data : {{ $test->date }}</p>
<p>Procedimento: {{ $test->procedure->name }}</p>
<p>ID do Exame: {{ $test->id }}</p>
<p>Valor Unitário: {{ $test->procedure->price }}</p>

<div class="buttons">
	
	<a class="btn btn-secundary" href="/usuario">Voltar</a>
	<a class="btn btn-secundary" href="{{ route('test.edit', $test->id) }}">Editar</a>

	<form method="post" onsubmit="return confirm('Confirma exclusão do Exame?');" action="{{ route('test.destroy', $test->id) }}"">

  		@csrf
  		@method('DELETE')
  		<input type="submit" name="btnExcluir" value="Excluir">

	</form>

</div>

@endsection('usuario')
