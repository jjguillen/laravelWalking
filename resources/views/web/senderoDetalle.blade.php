<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senderos</title>
</head>
<body>
    
    <h2>Detalle del sendero {{ $sendero->nombre }}</h2>
    <ul>
        <li>{{ $sendero->kms }}</li>
        <li>{{ $sendero->dificultad }}</li>
        <li>{{ $sendero->descripcion }}</li>
        <li>{{ $sendero->localidad }}</li>
    </ul>
</body>
</html>