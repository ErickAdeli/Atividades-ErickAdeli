@extends('layout.principal')

@section('conteudo')

	

	<h1>Lista de Procedimentos</h1>

	<table class="table table-striped">

		<tr>
			
			<th>Código</th>
			<th>Nome do Procedimento</th>
			<th>Preço</th>
			<th>Administrador</th>
			

		</tr>


		@foreach( $procedure as $p )

			<tr>
				<td>{{ $p->id }}</td>
				<td>{{ $p->name }}</td>
				<td>{{ $p->price }}</td>
				<td>{{ $p->user->name }}</td>
				
			</tr>

		@endforeach

	</table>

	<div class="button">

	<a class="btn btn-secondary" href="/" >Principal</a>

	</div>

@endsection('conteudo')

