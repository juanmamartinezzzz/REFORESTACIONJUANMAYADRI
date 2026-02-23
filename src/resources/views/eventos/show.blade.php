<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Evento</title>
</head>
<body style="font-family: sans-serif; max-width: 800px; margin: auto; padding: 20px;">
    <h1>{{ $evento->nombre }}</h1> <img src="/img/evento.jpg" style="width: 100%; max-height: 400px; object-fit: cover;"> <h3>Información General</h3>
    <ul>
        <li><strong>Descripción:</strong> {{ $evento->descripcion }}</li> <li><strong>Ubicación:</strong> {{ $evento->provincia }} ({{ $evento->localidad }})</li> <li><strong>Tipo de terreno:</strong> {{ $evento->tipo_terreno }}</li> <li><strong>Tipo de evento:</strong> {{ $evento->tipo_evento }}</li> <li><strong>Anfitrión:</strong> {{ $evento->anfitrion_nombre }}</li> </ul>

    <h3>Especies a plantar</h3> <p>{{ $evento->especies_info }}</p>

    <a href="/" style="display: inline-block; margin-top: 20px; background: #2d5a27; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
        Volver al listado
    </a>
</body>
</html>
