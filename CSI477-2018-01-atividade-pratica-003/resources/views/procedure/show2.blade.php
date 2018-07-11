@extends('operador.index')

@section('operador')

<h1>Dados do Exame</h1>

<p>Procedimento: {{ $procedure->name }}</p>
<p>Valor Unitário: {{ $procedure->price }}</p>
<p>Administrador: {{ $procedure->user->name }}</p>

<div class="button">	

	<a class="btn btn-secundary" href="/operador">Voltar</a>
	<a class="btn btn-secundary" href="{{ route('procedure.edit2', $procedure->id) }}">Editar</a>

</div>

@endsection('operador')
