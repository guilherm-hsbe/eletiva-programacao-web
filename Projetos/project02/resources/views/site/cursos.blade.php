@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Cursos</h1>
  <hr class="my-4">
  <p class="lead">Conheça os cursos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Curso de Laravel</h2>
      <p class="lead">Curso de Laravel para iniciantes. Aprenda como utilizar o framework Laravel e tornar os seus projetos mais produtivos.</p>
    </div>

    <div class="col-md-5">
      <figure class="figure">
          <img src="{{ asset('images/img-curso-laravel.png') }}" class="figure-img img-fluid rounded" alt="Curso Laravel">
      </figure>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Curso de PHP</h2>
      <p class="lead">Curso de PHP. Aprenda a linguagem Web mais popular da internet em poucas aulas.</p>
    </div>

    <div class="col-md-5">
      <figure class="figure">
          <img src="{{ asset('images/im-curso-php.png') }}" class="figure-img img-fluid rounded" alt="Curso PHP">
      </figure>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Curso de Python</h2>
      <p class="lead">Curso de Python para iniciantes. Aprenda a programas na linguagem que mais cresce no momento.</p>
    </div>

    <div class="col-md-5">
      <figure class="figure">
          <img src="{{ asset('images/img-curso-python.jpg') }}" class="figure-img img-fluid rounded" alt="Curso Laravel">
      </figure>
    </div>
  </div>
    <!-- /END THE FEATURETTES -->
</div>

@endsection