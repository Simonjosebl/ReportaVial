<?php 
session_start();

if (isset($_POST["btningresar"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $_SESSION['error_login'] = "LOS CAMPOS ESTÁN VACÍOS";
        header("Location: inicio_sesion.php");
        exit;
    } else {
        include("conexion.php"); // Reemplaza con tu archivo de conexión a la base de datos

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Realizar la consulta SQL de manera segura usando consultas preparadas para evitar inyecciones SQL
        $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario=? AND contrasena=?");
        $consulta->bind_param("ss", $username, $password);
        $consulta->execute();
        $result = $consulta->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: home.php"); // Reemplaza 'index.php' con tu página principal
            exit;
        } else {
            $_SESSION['error_login'] = "Usuario o contraseña incorrectos";
            header("Location: login.php");
            exit;
        }
        $consulta->close();
        $conexion->close();
    }
}
?>
