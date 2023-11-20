<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones y Comentarios</title>
    <link rel="stylesheet" href="style25.css">
</head>
<body>
    <header>
        <!-- Contenido del encabezado -->
    </header>

    <main>
        <section class="calificaciones">
            <h1>Calificaciones y Comentarios</h1>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">&#9733;</label>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea id="comentario" name="comentario" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
            <p>© 2023 ReportaVial. Todos los derechos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
