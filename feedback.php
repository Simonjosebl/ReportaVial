<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style22.css">
</head>
<body>
    <header>
    <div class="logo">
            <img src="logo2.png" alt="Logo de la página">
        </div>
        <div class="header-content">
            <h1>Feedback</h1>
        </div>
        <div class="navigation">
            <ul>
                <h1><a href="home.php">Inicio</a></h1>
            </ul>
        </div>
    </header>

    <main>
        <!-- Contenido principal -->
        <section class="feedback">
            <h2>Deja tu Feedback</h2>
            <form action="procesar_feedback.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2023 ReportaVial. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
