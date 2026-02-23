<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuestras Especies</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">
    <h1>Catálogo de Especies Autóctonas</h1> @foreach($especies as $especie)
    <div style="border-bottom: 1px solid #eee; padding: 20px; display: flex; gap: 20px;">
        <img src="/img/especie.jpg" style="width: 100px; height: 100px;"> <div>
            <h2>{{ $especie->nombre_cientifico }}</h2> <p><strong>Clima:</strong> {{ $especie->clima }}</p> <p><strong>Región:</strong> {{ $especie->region_origen }}</p> <p><strong>Tiempo de madurez:</strong> {{ $especie->tiempo_crecimiento }}</p> <p><strong>Beneficios:</strong> {{ $especie->beneficios }}</p> <a href="{{ $especie->enlace_wiki }}" target="_blank">Ver en Wikipedia</a> </div>
    </div>
    @endforeach
</body>
</html>
