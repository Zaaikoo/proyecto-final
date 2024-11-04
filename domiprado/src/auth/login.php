<?php
include '../database.php'; // Archivo de conexión a la base de datos

session_start(); // Inicia la sesión para el login

$error = ''; // Inicializa la variable de error

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action']; // Determina si es login o register

    // Verifica si es un registro
    if ($action === 'register') {
        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $password = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

        // Verifica si el correo electrónico ya está registrado
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "El correo electrónico ya está registrado.";
        } else {
            // Inserta el nuevo usuario
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $email, $password);

            if ($stmt->execute()) {
                header("Location: /domiprado/src/auth/welcome.php?registered=success");
                exit();
            } else {
                $error = "Error en el registro. Intenta nuevamente: " . $stmt->error;
            }
        }

        $stmt->close();
    } elseif ($action === 'login') {
        // Proceso de inicio de sesión
        $email = $_POST['correo'];
        $password = $_POST['contrasena'];

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['contrasena'])) {
                // Establece la sesión del usuario
                $_SESSION['user_id'] = $user['id'];
                header("Location: http://localhost/domiprado/src/Blog.php"); // Cambia a la ruta de tu home
                exit();
            } else {
                $error = "Contraseña incorrecta.";
            }
        } else {
            $error = "No se encontró un usuario con ese correo electrónico.";
        }

        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Register</title>
    <script src="https://kit.fontawesome.com/28c762fe61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/domiprado/src/assets/css/Principal.css">
    <link rel="stylesheet" href="/domiprado/src/assets/css/Articulos.css">
    <link rel="stylesheet" href="/domiprado/src/assets/css/login.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <h1>Domi<b>Prado</b></h1>
            </div>
            <div class="menu" id="menu-show"> </div>
        </div>
        <div id="icon-menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header> 
    
    <div class="container-all" id="move-content">
        <div class="login-container-cover">
            <div class="container-info-cover">
                <h1>¡Encuentra Tus Productos!</h1>
                <p>Tu supermercado de confianza, siempre a tu servicio <i class="fa-solid fa-motorcycle"></i></p>
            </div>
        </div>
    </div>

    <main>
    <div class="contenedor__todo">
        <div class="contenedor__login-register">
            <div class="caja__trasera">
                <div class="switch">
                    <button id="btn-login" onclick="showLogin()">Iniciar Sesión</button>
                    <button id="btn-register" onclick="showRegister()">Registrarse</button>
                </div>
            </div>

            <!-- Formulario de Login -->
            <form action="" method="POST" class="formulario__login" id="login-form">
                <h2>Iniciar sesión</h2>
                <input type="hidden" name="action" value="login">
                <input type="text" name="correo" placeholder="Correo Electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">Entrar</button>
            </form>
            
            <!-- Formulario de Register -->
            <form action="" method="POST" class="formulario__register" id="register-form" style="display: none;">
                <h2>Registrarse</h2>
                <input type="hidden" name="action" value="register">
                <input type="text" name="nombre" placeholder="Nombre Completo" required>
                <input type="text" name="correo" placeholder="Correo Electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</main>

    <footer>
        <div class="container-footer">
            <div class="logo-footer">
                <img src="/domiprado/src/assets/img/imagenes/DomiPrado.png" alt="">
            </div>
            <div class="redes-footer">
                <a href="#"><i class="fa-brands fa-instagram icon-redes-footer"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp icon-redes-footer"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g icon-redes-footer"></i></a>
            </div>
            <hr>
            <h4>2024 DomiPrado - Todos Los Derechos Reservados</h4>
        </div>
    </footer>

    <!-- Scripts para alternar formularios -->
    <script>
    // Funciones para alternar entre formularios
    function showLogin() {
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('register-form').style.display = 'none';
    }
    
    function showRegister() {
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
    }

    // Lee el parámetro de la URL y muestra el formulario adecuado
    const urlParams = new URLSearchParams(window.location.search);
    const formType = urlParams.get('form');
    if (formType === 'register') {
        showRegister();
    } else {
        showLogin(); // Muestra login por defecto
    }
</script>
    <script src="/domiprado/src/assets/js/logins.js"></script>
    <script src="/domiprado/src/assets/js/script.js"></script>
</body>
</html>

