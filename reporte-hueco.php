<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Estado de Huecos Viales</title>
    <link rel="stylesheet" href="style17.css">
</head>
<body>
    <header>
    <div class="logo">
            <img src="logo2.png" alt="Logo de la página">
        </div>
        <div class="header-content">
            <h1>Reporte de Huecos Viales</h1>
        </div>
        <div class="navigation">
            <ul>
                <h1><a href="home.php">Inicio</a></h1>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="reporte-huecos">
           
            <!-- Aquí irá el código PHP para mostrar las alertas -->
            
            <form action="send.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="direccion">Dirección del Hueco Vial</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>

                <div class="form-group">
                    <label for="tipoHueco">Tipo de Hueco Vial</label>
                    <input type="text" id="tipoHueco" name="tipoHueco" required>
                </div>

                <div class="form-group">
                    <label for="estadoHueco">Estado del Hueco Vial</label>
                    <input type="text" id="estadoHueco" name="estadoHueco" required>
                </div>

                <div class="form-group">
                    <label for="prioridad">Prioridad</label>
                    <input type="text" id="prioridad" name="prioridad" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción del Hueco Vial</label>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                </div>

                <div class="form-group">
                    <label for="nombreReportante">Nombre del Reportante</label>
                    <input type="text" id="nombreReportante" name="nombreReportante" required>
                </div>

                <div class="form-group">
                    <label for="telefonoReportante">Teléfono del Reportante</label>
                    <input type="tel" id="telefonoReportante" name="telefonoReportante" required>
                </div>

                <div class="form-group">
                    <label for="fotoAdjunta">Adjuntar Foto</label>
                    <input type="file" id="fotoAdjunta" name="fotoAdjunta">
                </div>

                <div class="form-group">
                    <label for="notasInternas">Notas Internas</label>
                    <textarea id="notasInternas" name="notasInternas"></textarea>
                </div>

                <div class="form-group">
                    <label for="zonaBarrio">Zona o Barrio</label>
                    <input type="text" id="zonaBarrio" name="zonaBarrio" required>
                </div>
                <button type="submit">Enviar Reporte</button>
            </form>
            <div >
            <?php
                if (isset($_GET['success'])) {
                    echo '<div class="alert success">' . htmlspecialchars($_GET['success']) . '</div>';
                } elseif (isset($_GET['error'])) {
                     echo '<div class="alert error">' . htmlspecialchars($_GET['error']) . '</div>';
                }
            ?>

        </div>
        </div>
       
    </div>
    <footer>
        <div class="container">
            <p>© 2023 ReportaVial. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>