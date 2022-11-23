@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Exibir Curso</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('cursosmanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $curso->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $curso->descricao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagem:</strong>
                {{ $curso->imagem }}
            </div>
        </div>
    </div>
</div>
@endsection
