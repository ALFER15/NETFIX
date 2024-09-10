<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Reporte</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Género</th>
            <th scope="col">Duración</th>
            <th scope="col">Año</th>
            <th scope="col">Descripción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $pelicula)
                <tr>
                    <th scope="row">{{ $pelicula->id }}</th>
                    <td>{{ $pelicula->Name }}</td>
                    <td>{{ $pelicula->Genre }}</td>
                    <td>{{ $pelicula->Duration }}</td>
                    <td>{{ $pelicula->Year }}</td>
                    <td>{{ $pelicula->Description }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
