<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RE-FORES-TA - Inicio</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        header { background: #2d5a27; color: white; padding: 20px; text-align: center; }
        .slider { background: #a3d9a5; height: 200px; display: flex; align-items: center; justify-content: center; }
        .grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; padding: 20px; }
        .evento-card { border: 1px solid #ccc; padding: 10px; border-radius: 5px; }
        .footer { background: #333; color: white; padding: 20px; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>RE-FORES-TA</h1>
        <nav>
            <a href="/" style="color:white">Inicio</a> | 
            <a href="/especies" style="color:white">Especies</a> | 
            <a href="/contacto" style="color:white">Contacto</a>
        </nav>
    </header>

    <div class="slider">
        <h2>Slider de Eventos Destacados</h2> </div>

    <main>
        <h2 style="padding-left: 20px;">Eventos de Reforestación</h2> <div class="grid">
            @foreach($eventos as $evento)
            <div class="evento-card">
                <img src="/img/evento.jpg" style="width: 100%;"> <h3>{{ $evento->nombre }}</h3> <p>{{ $evento->fecha }}</p> <p>{{ $evento->localidad }}</p> <a href="/eventos/{{ $evento->id }}">Ver más</a>
            </div>
            @endforeach
        </div>
    </main>

    <div class="footer">
        <p>Newsletter e información legal</p> </div>
</body>
</html>