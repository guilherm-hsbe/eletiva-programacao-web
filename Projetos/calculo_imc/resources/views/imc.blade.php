<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Cálculo de IMC</title>
</head>
<body class="container border border-3 rounded fw-lighter bg-light shadow fs-5 position-absolute top-50 start-50 translate-middle p-4 col-md-2">

    <div class="form" action="{{url('/calculo')}}" method="get">
        <h3 class="text-center">Caálculo de IMC</h3>

        <label for="altura">Altura</label>
        <textarea type="text" name="altura" class="campoaltura form-control mt-2"></textarea>

        <label class="mt-3" for="peso">Peso</label>
        <textarea type="text" name="peso" class="campopeso form-control mt-2"></textarea>

        <input type="submit" value="Enviar" class="botao form-control mt-4 bg-dark text-light">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>