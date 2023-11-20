<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Reparaciones</title>
    <link rel="stylesheet" href="style20.css">
</head>
<body>
    <header class="header">
    <div class="logo">
    <img src="logo2.png" alt="Logo de la página">
        </div>
        <div class="header-content">
            <h1>Estado de Reparaciones</h1>
        </div>
        <div class="navigation">
            <ul>
                <h1><a href="home.php">Inicio</a></h1>
            </ul>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <section class="repair-status">
            
                <div class="status-details">
                <?php include 'mostrar.php'; ?>
            </div>
            </section>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>© 2023 ReportaVial. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
