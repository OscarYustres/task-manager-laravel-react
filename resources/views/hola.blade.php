<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <h1>¡Hola Mundo desde Laravel!</h1>
    <p>Esta es mi primera vista con Blade.</p>
    <p>Mi nombre es {{ $nombre ?? 'Oscar' }}.</p>
</body>
</html>