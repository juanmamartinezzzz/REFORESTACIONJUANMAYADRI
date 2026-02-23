<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - RE-FORES-TA</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; max-width: 800px; margin: auto; color: #333; }
        .about-section { background: #e8f5e9; padding: 20px; border-radius: 8px; margin-bottom: 30px; }
        form { display: grid; gap: 15px; }
        input, textarea { padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; }
        button { background: #2d5a27; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background: #1e3d1a; }
    </style>
</head>
<body>

    <section class="about-section">
        <h1>Sobre Nosotros (About Us)</h1> 
        <p>Re-Fores-Ta es un portal dedicado a la publicación y gestión de eventos de reforestación en España. Nuestro objetivo es facilitar que cualquier usuario pueda proponer, consultar y unirse a eventos para plantar especies autóctonas.</p> [cite: 5, 6]
    </section>

    <section>
        <h2>Formulario de Contacto</h2> 
        <p>Si tienes alguna duda o sugerencia, envíanos un mensaje:</p>
        
        <form action="/enviar-contacto" method="POST">
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" placeholder="Tu nombre completo" required>
            </div>
            <div>
                <label>Correo Electrónico:</label>
                <input type="email" name="email" placeholder="tu@correo.com" required>
            </div>
            <div>
                <label>Mensaje:</label>
                <textarea name="mensaje" rows="5" placeholder="¿En qué podemos ayudarte?" required></textarea>
            </div>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>

    <p style="margin-top: 40px; text-align: center;"><a href="/" style="color: #2d5a27;">Volver a la página principal</a></p>

</body>
</html>
