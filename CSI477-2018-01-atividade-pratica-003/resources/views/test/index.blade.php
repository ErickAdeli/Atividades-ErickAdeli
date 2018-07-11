@extends('usuario.index')

@section('usuario')

	<h1>Lista de Exames</h1>

	<table class="table table-striped">

		<tr>

			<th>Data</th>
			<th>Procedimento</th>			
			<th>Código do Exame</th>			
			<th>Paciente</th>
			<th>Quantidade de Exames</th>
			<th>Valor Total dos Exames</th>
			<th>Exibir</th>
			<th>Editar</th>

		</tr>

		@foreach( $test as $t )

			<tr>

				<td>{{ $t->date }}</td>
				<td>{{ $t->procedure->name }}</td>
				<td>{{ $t->id }}</td>			
				<td>{{ $t->user->name }}</td>
				<td>{{ $t->totalexame }}</td>
				<td>{{ $t->valortotal }}</td>
				<td><a href="{{ route('test.show', $t->id) }}">Exibir</a></td>
				<td><a href="{{ route('test.edit', $t->id) }}">Editar</a></td>
			</tr>

		@endforeach

	</table>

	<div class="button">
		<a class="btn btn-secondary" href="/usuario" >Voltar</a>
	</div>

@endsection('usuario')

