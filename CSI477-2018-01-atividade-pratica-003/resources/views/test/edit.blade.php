@extends('usuario.index')

@section('usuario')

    <h1>Editar Exames</h1>

    

    <form method="post" action="{{ route('test.update', $test->id) }}">

        @csrf
        @method('PATCH')

        Data: <input type="date" name="dataexame"><br>

        Procedimento:
        <select name="procedure_id">
            <option value="">Selecione:</option>

            @foreach($procedure as $p)
                <option value="{{ $p->id }}"
                    @if ( $p->id == $test->procedure_id
                        selected
                    @endif

                >{{ $p->nome }}</option>

        </select><br>

       
       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

    <div class="button">
        <a class="btn btn-secondary" href="/usuario" >Voltar</a>
    </div>

@endsection('usuario')
