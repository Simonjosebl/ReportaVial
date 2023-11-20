<?php
// Incluir archivo de conexión a la base de datos
include 'conexion.php';

// Consulta SQL para obtener los datos de reparaciones
$sql = "SELECT * FROM reporteshuecos"; // Ajusta el nombre de la tabla según tu base de datos
$result = $conexion->query($sql);

// Verificar si hay datos y mostrarlos
if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla
    echo '<table>';
    echo '<tr><th>Fecha de Reporte</th><th>Dirección</th><th>Tipo de Hueco</th><th>Estado de Hueco</th><th>Imagen</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['fechaReporte'] . '</td>';
        echo '<td>' . $row['direccion'] . '</td>';
        echo '<td>' . $row['tipoHueco'] . '</td>';
        echo '<td>' . $row['estadoHueco'] . '</td>';
        echo '<td><img src="data:image/jpeg;base64,' . base64_encode($row['fotoAdjunta']) . '" width="300px" height="auto"></td>';
        // Mostrar otros datos según tu estructura de la tabla
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "No hay datos disponibles";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
