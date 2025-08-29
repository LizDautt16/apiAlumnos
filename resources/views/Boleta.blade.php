<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta de Calificaciones</title>
</head>
<body>
    <h1>Boleta de {{ $nombre }}</h1>
    <hr>
    <table border="1">
        <tr>
            <th>Materia</th>
            <th>Calificación</th>
            <th>Status</th>
        </tr>
        @foreach ($calificaciones as $index => $c)
            <tr>
                <td>Materia{{ $index +1 }}</td>
                <td>{{ $c }}</td>
                <td>
                    @if($c>5) 
                        Aprobada 
                    @else
                        Reprobada 
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>