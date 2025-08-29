<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Alumnos</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Numero de Control</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $nombre }}</td>
                <td>{{ $edad }}</td>
                <td>{{ $numero_control }}</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>