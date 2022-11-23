@extends('site.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Cursos</h1>
    <hr class="my-4">
    <p class="lead">Conheça os cursos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
    @foreach ($cursos as $curso)
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">{{ $curso->nome }}</h2>
          <p class="lead">{{ $curso->descricao }}</p>
        </div>
        <div class="col-md-5">
          <figure class="figure">
              <img src="{{ asset($curso->imagem) }}" class="figure-img img-fluid rounded" alt="{{ $curso->nome }}">
          </figure>
        </div>
      </div>

      <hr class="featurette-divider">
    @endforeach
</div>

@endsection