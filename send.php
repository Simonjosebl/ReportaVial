<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

date_default_timezone_set('America/Bogota');

// Obtener la fecha actual
$fechaReporte = date("Y-m-d H:i:s"); // Formato: Año-Mes-Día Hora:Minutos:Segundos

// Verificar si se ha enviado algún dato a través del método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $direccion = $_POST["direccion"];
    $tipoHueco = $_POST["tipoHueco"];
    $estadoHueco = $_POST["estadoHueco"];
    $prioridad = $_POST["prioridad"];
    $descripcion = $_POST["descripcion"];
    $nombreReportante = $_POST["nombreReportante"];
    $telefonoReportante = $_POST["telefonoReportante"];
    $notasInternas = $_POST["notasInternas"];
    $zonaBarrio = $_POST["zonaBarrio"];

    // Verificar la existencia y validez de la imagen adjunta
    
        $fotoAdjunta= addslashes(file_get_contents($_FILES["fotoAdjunta"]["tmp_name"]));
        
        // Preparar la consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO reporteshuecos (fechaReporte, direccion, tipoHueco, estadoHueco, prioridad, descripcion, nombreReportante, telefonoReportante, fotoAdjunta, notasInternas, zonaBarrio) VALUES ('$fechaReporte', '$direccion', '$tipoHueco', '$estadoHueco', '$prioridad', '$descripcion', '$nombreReportante', '$telefonoReportante', '$fotoAdjunta', '$notasInternas', '$zonaBarrio')";
        

        if ($conexion->query($sql) === TRUE) {
            header("Location: reporte-hueco.php?success=Reporte enviado correctamente");
            exit();
        } else {
            echo "Error al enviar el reporte: " . $conexion->error;
        }
    } else {
    echo "No se ha enviado ningún dato a través del método POST.";
}

// Cerrar la conexión al finalizar el procesamiento si es necesario
$conexion->close();
?>



