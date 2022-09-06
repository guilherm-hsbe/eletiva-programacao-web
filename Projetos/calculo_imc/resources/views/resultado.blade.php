<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Resultado Cálculo de IMC</title>
</head>
<body class="container border border-3 rounded fw-lighter bg-light shadow fs-5 position-absolute top-50 start-50 translate-middle p-4 col-auto">
    <div>
        <h3 class="text-center mb-3">Resultado</h3>

        <div class="border border-1 border-secondary rounded border-opacity-25 p-2">
            <table class="table table-hover text-center">
                <caption class="fw-normal mt-2">SEU IMC: <b class="fw-bolder">{{$val[0][0]}}</b> <b class="fw-bolder">({{$val[0][1]}})</b></caption>

                <thead class="table-secondary"> 
                    <tr>
                        <th scope="col">IMC</th>
                        <th scope="col">CLASSIFICAÇÃO</th>
                        <th scope="col">OBESIDADE (GRAU)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MENOR QUE 18,5</td>
                        <td>MAGREZA</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>ENTRE 18,5 E 24,9</td>
                        <td>NORMAL</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>ENTRE 25,0 E 29,9</td>
                        <td>SOBREPESO</td>
                        <td>I</td>
                    </tr>
                    <tr>
                        <td>ENTRE 30,0 E 39,9</td>
                        <td>OBESIDADE</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>MAIOR QUE 40,0</td>
                        <td>OBESIDADE GRAVE</td>
                        <td>III</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a href="{{URL('/')}}" class="btn btn-outline-primary mt-4">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>