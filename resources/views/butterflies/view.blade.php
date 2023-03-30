<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Butterfly #{{ $butterfly->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $butterfly->nome }} - {{ $butterfly->especie }}</h1>

            @if($butterfly->sexo == 'F')
                <h2>Feminino</h2>
            @elseif($butterfly->sexo == 'M')
                <h2>Masculino</h2>
            @endif

            <h3>{{ $butterfly->idade }} anos</h3>

            <h3>Pelos {{ $butterfly->cor }}</h3>

            <p>
                {{ $butterfly->significado }}
            </p>

            <a href="{{ route('butterflies.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('butterflies.edit', $butterfly->id) }}">Editar</a>

            <form method="POST" action="{{ route('butterflies.destroy', $butterfly->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Butterfly" class="btn btn-danger">
        </div>
    </body>
</html>
