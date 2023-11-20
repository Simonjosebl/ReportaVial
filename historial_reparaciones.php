<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Reparaciones</title>
    <link rel="stylesheet" href="style16.css">
</head>
<body>
    <header>
    <div class="logo">
            <img src="logo2.png" alt="Logo de la página">
        </div>
        <div class="header-content">
            <h1>Historial de Reparaciones</h1>
        </div>
        <div class="navigation">
            <ul>
                <h1><a href="home.php">Inicio</a></h1>
            </ul>
        </div>
    </header>

    <main>
        <form action="" method="GET">
            <label for="reporte_id">Ingrese el ID del reporte:</label>
            <input type="text" id="reporte_id" name="reporte_id" required>
            <button type="submit">Buscar</button>
        </form>
        
        <!-- Aquí se mostrarán los datos -->
        <div class="resultado" id="resultado">
            <?php
            if (isset($_GET['reporte_id'])) {
                // Conectarse a la base de datos y realizar la consulta con el ID proporcionado
                include 'conexion.php'; // Reemplaza 'conexion.php' por tu archivo de conexión

                $reporte_id = $_GET['reporte_id'];

                $sql = "SELECT * FROM reporteshuecos WHERE id = $reporte_id"; // Modifica la consulta según tu base de datos

                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>Fecha</th><th>Dirección</th><th>Tipo Hueco</th><th>Estado Hueco</th><th>Descripción</th><th>Nombre Reportante</th><th>Teléfono Reportante</th><th>Foto</th><th>Notas Internas</th><th>Zona/Barrio</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['fechaReporte'] . "</td>";
                        echo "<td>" . $row['direccion'] . "</td>";
                        echo "<td>" . $row['tipoHueco'] . "</td>";
                        echo "<td>" . $row['estadoHueco'] . "</td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['nombreReportante'] . "</td>";
                        echo "<td>" . $row['telefonoReportante'] . "</td>";
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['fotoAdjunta']) . "'/></td>";
                        echo "<td>" . $row['notasInternas'] . "</td>";
                        echo "<td>" . $row['zonaBarrio'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No se encontraron resultados para el ID proporcionado.";
                }

                $conexion->close();
            }
            ?>
        </div>
    </main>

    <footer>
        <p>© 2023 ReportaVial. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
