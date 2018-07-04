@extends('layout.principal')

@section('conteudo')

	<br>

	<!-- CHAMADA DIRETO DIERETA
	<a href="/estados/create">Inserir Estados</a>//-->

	<!-- URL A PARTIR DO NOME DA ROTA //-->
	<a href="{{ route('estados.create') }}">Inserir Estados</a>

	<!-- A PARTIR DA URL DIRETO 
	<a href="{{ url('estados/create') }}">Inserir Estados</a>//-->


	<table class="table table-striped">

		<tr>
			
			<th>Código</th>
			<th>Estado</th>
			<th>Sigla</th>
			<th>Exibir</th>
			<th>Editar</th>

		</tr>

		@foreach( $estados as $e )

			<tr>
				<td>{{ $e->id }}</td>
				<td>{{ $e->nome }}</td>
				<td>{{ $e->sigla }}</td>
				<td><a href="{{ route('estados.show', $e->id) }}">Exibir</a></td>
				<td><a href="{{ route('estados.edit', $e->id) }}">Editar</a></td>
			</tr>

		@endforeach

	</table>

@endsection('conteudo')

