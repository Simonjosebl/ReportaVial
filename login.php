<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="style15.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        

        <form action="procesar_login.php" method="POST" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <?php 
        session_start();

        if(isset($_SESSION['error_login'])) {
            echo '<script>alert("' . $_SESSION['error_login'] . '");</script>';
            unset($_SESSION['error_login']);
        }
        ?>

            <button name="btningresar" type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <script>
        function validarPassword() {
            var password = document.getElementById("password").value;
            
            // Validar la complejidad de la contraseña
            var regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            
            if (regex.test(password)) {
                return true;
            } else {
                alert("La contraseña debe tener al menos 8 caracteres y contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.");
                return false;
            }
        }

        function validarFormulario() {
            return validarPassword();
        }
    </script>
</body>
</html>
