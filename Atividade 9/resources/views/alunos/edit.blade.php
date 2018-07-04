@extends('layout.principal')

@section('conteudo')

    <h1>Editar Aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form method="post" action="{{ route('alunos.update', $aluno->id) }}">

        @csrf
        @method('PATCH')

        Nome: <input type="text" name="nome" value="{{ $aluno->nome }}"> <br>
        CPF: <input type="text" name="cpf" value="{{ $aluno->cpf }}"> <br>
        Matrícula: <input type="text" name="matricula" value="{{ $aluno->matricula }}"> <br>

        Cidade:
        <select name="cidade_id">
        	<option value="">Selecione:</option>
        	<!-- Dados dos estados -->
        	@foreach($cidades as $c)
        		<option value="{{ $c->id }}"

        			@if ( $c->id == $aluno->cidade_id )
        				selected
        			@endif

        			>{{ $c->nome }}</option>
        	@endforeach
        </select><br>
        <!--<input type="text" name="estado_id"> <br> //-->
       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection
