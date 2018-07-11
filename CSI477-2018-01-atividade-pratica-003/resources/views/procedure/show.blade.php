@extends('administrador.index')

@section('administrador')

<h1>Dados do Exame</h1>

<p>Procedimento: {{ $procedure->name }}</p>
<p>Valor Unitário: {{ $procedure->price }}</p>
<p>Administrador: {{ $procedure->user->name }}</p>

<div class="button">	

	<form method="post" onsubmit="return confirm('Confirma exclusão do Procedimento?');" action="{{ route('procedure.destroy', $procedure->id) }}"">

		@csrf
		@method('DELETE')

  	<input type="submit" name="btnExcluir" value="Excluir">

	</form>

	<a class="btn btn-secundary" href="/administrador">Voltar</a>
	<a class="btn btn-secundary" href="{{ route('procedure.edit', $procedure->id) }}">Editar</a>

</div>

@endsection('administrador')
