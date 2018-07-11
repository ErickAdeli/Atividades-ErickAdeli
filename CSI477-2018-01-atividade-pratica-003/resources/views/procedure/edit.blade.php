@extends('administrador.index')

@section('administrador')

    <h1>Editar Procedimento</h1>

    <form method="post" action="{{ route('procedure.update', $procedure->id) }}">

        @csrf
        @method('PATCH')

        Nome do Procedimento: <input type="text" name="name"><br>

        Preço: <input type="text" name="price"> <br>

        Administrador:
        <select name="administrador_id">
            <option value="">Selecione:</option>

            @foreach($user as $u)
                <option value="{{ $u->id }}"
                    @if ( $u->id == $procedure->user_id )
                        selected
                    @endif

                >{{ $u->name }}</option>
            @endforeach
        </select><br>
       
       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

    <div class="button">
      <a class="btn btn-secondary" href="/administrador" >Voltar</a>
    </div>

@endsection('administrador')
