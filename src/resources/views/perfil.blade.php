<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil - RE-FORES-TA</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; padding: 40px; }
        .perfil-container { background: white; padding: 30px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #2d5a27; border-bottom: 2px solid #2d5a27; padding-bottom: 10px; }
        .info-grupo { margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        label { font-weight: bold; color: #666; display: block; font-size: 0.9em; }
        .valor { font-size: 1.1em; color: #333; }
        .btn-inicio { display: inline-block; margin-top: 10px; color: #2d5a27; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <div class="perfil-container">
        <h1>Datos de Usuario</h1>
        
        <div class="info-grupo">
            <label>Nombre de usuario (Nick):</label>
            <div class="valor">{{ $usuario->nick }}</div>
        </div>

        <div class="info-grupo">
            <label>Nombre Completo:</label>
            <div class="valor">{{ $usuario->nombre }} {{ $usuario->apellidos }}</div>
        </div>

        <div class="info-grupo">
            <label>Correo Electrónico:</label>
            <div class="valor">{{ $usuario->email }}</div>
        </div>

        <a href="/" class="btn-inicio">← Volver a la página principal</a>
    </div>

</body>
</html>
