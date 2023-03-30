<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Butterfly #{{ $butterly->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição da Butterfly {{ $butterfly->id }}</h1>

            <form method="POST" action="{{ route('butterflies.update', $butterfly->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $butterfly->nome }}">
                </div>

                <div class="mb-3">
                    <label>Espécie</label>
                    <input type="text" name="raca" class="form-control" value="{{ $butterfly->especie }}">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control" value="{{ $butterfly->idade }}">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M" {{ $butterfly->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $butterfly->sexo == 'F' ? 'selected' : '' }}>Feminino</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Cor</label>
                    <input type="text" name="cor" class="form-control" value="{{ $butterfly->cor }}">
                </div>

                <div class="mb-3">
                    <label>Significado</label>
                    <textarea name="gatografia" id="" rows="5" class="form-control">{{ $butterfly->significado }}</textarea>
                </div>

                <div>
                    <input type="submit" value="Atualizar Butterfly" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
