@extends('layout.principal')

@section('conteudo')

    <h1>Editar cidade</h1>

    <a href="{{ route('cidades.index') }}">Voltar</a>

    <form method="post" action="{{ route('cidades.update', $cidade->id) }}">

        @csrf
        @method('PATCH')

        Nome: <input type="text" name="nome" value="{{ $cidade->nome }}"> <br>

        Estado:
        <select name="estado_id">
        	<option value="">Selecione:</option>
        	<!-- Dados dos estados -->
        	@foreach($estados as $e)
        		<option value="{{ $e->id }}"

        			@if ( $e->id == $cidade->estado_id )
        				selected
        			@endif

        			>{{ $e->nome }}-{{$e->sigla }}</option>
        	@endforeach
        </select><br>
        <!--<input type="text" name="estado_id"> <br> //-->
       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection
