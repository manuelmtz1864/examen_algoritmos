<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pruebas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>Hola</h1>
    <p>Disculpen lo rudimentario que está, solo quiero que sea funcional</p>
    <a href="{{route('indexPalabras')}}">Palabras</a>

    <br>
    <br>

    <form method="POST" action="{{route('compararCalificaciones')}}">
        @csrf
        <h2>Calificaciones de Alice y Bob </h2>
        <p>Ingrese las calificaciones separadas por espacios y en un rago del 1 al 100</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('statusDanger'))
            <div class="alert alert-danger">
                {{ session('statusDanger') }}
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <label for="alice">Calificaciones de Alice:</label>
        <input type="text" name="alice" id="alice" required><br>
        <label for="bob">Calificaciones de Bob:</label>
        <input type="text" name="bob" id="bob" required><br>
        <button type="submit" class="btn btn-primary">Resolver</button>
    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
