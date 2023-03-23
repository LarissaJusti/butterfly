<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Butterflies</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Butterflies</h1>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Espécies</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Cor</th>
                    <th>Significado</th>
                    <th>Foto</th>
                    <th></th>
                </tr>

                @foreach ($butterflies as $butterfly)
                    <tr>
                        <td>{{ $butterfly->nome }}</td>
                        <td>{{ $butterfly->especie }}</td>
                        <td>{{ $butterfly->idade }}</td>
                        <td>{{ $butterfly->sexo }}</td>
                        <td>{{ $butterfly->cor }}</td>
                        <td>{{ $butterfly->significado }}</td>
                        <td>{{ $butterfly->foto }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
