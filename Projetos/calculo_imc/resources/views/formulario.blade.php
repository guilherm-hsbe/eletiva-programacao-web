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

    <form class="form" action="{{url('/imc')}}" method="get">
        <h3 class="text-center mb-3">Cálculo de IMC</h3>

        <label for="altura">Altura (ex: 1,70)</label>
        <input type="number" name="altura" class="form-control mt-2" min=0 step=0.1 required>

        <label class="mt-3" for="peso">Peso (ex: 50,2)</label>
        <input type="number" name="peso" class="form-control mt-2" min=0 step=0.1 required>

        <input type="submit" value="Enviar" class="form-control btn btn-outline-primary mt-4">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>