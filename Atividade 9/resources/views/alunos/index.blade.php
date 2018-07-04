@extends('layout.principal')

@section('conteudo')

<h1>Alunos</h1>

<a href="{{ route('alunos.create') }}">Inserir Alunos</a>

<table class="table table-striped">

    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Matrícula</th>
        <th>Cidade</th>
        <th>Exibir</th>
        <th>Editar</th>
    </tr>

    @foreach($alunos as $a)
        <tr>
            <td>{{ $a->nome }}</td>
            <td>{{ $a->cpf }}</td>
            <td>{{ $a->matricula }}</td>
            <td>{{ $a->cidade->nome }}</td>
            <td><a href="{{ route('alunos.show', $a->id) }}">Exibir</a></td>
            <td><a href="{{ route('alunos.edit', $a->id) }}">Editar</a></td>
        </tr>
    @endforeach

</table>


@endsection('conteudo')