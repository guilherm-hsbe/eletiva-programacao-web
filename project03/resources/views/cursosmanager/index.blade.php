@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Cadastro de Cursos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('cursosmanager.create') }}">Criar Novo Curso</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($cursos as $curso)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->descricao }}</td>
            <td>{{ $curso->imagem }}</td>
            <td>
                <form action="{{ route('cursosmanager.destroy', $curso->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('cursosmanager.show', $curso->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('cursosmanager.edit', $curso->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $cursos->links() !!}
</div>

@endsection
