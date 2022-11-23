@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Exibir Contato</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('contatosmanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $contato->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group rounded p-2" style="background-color: whitesmoke !important;">
                <strong>Mensagem:</strong>
                {{ $contato->mensagem }}
            </div>
        </div>
    </div>
</div>
@endsection
