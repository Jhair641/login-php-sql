<?php
    include_once('register.php');
    include_once('login.php');

    session_start();
    if (isset($_SESSION['correo'])) {
        header("Location: redirection.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture House</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="global-container">
        <div class="sub-container1">
            <header>
                <ul class="header-menu">
                    <li>
                        <div id="header-login-wrapper">
                            <p onclick="loginFunction()" id="header-login-button">Identificarse</p>
                            <span id="header-login-line"></span>
                        </div>		
                    </li>
                    <li>
                        <div id="header-register-wrapper">
                            <p onclick="registerFunction()" id="header-register-button">Registrarse</p>
                            <span id="header-register-line"></span>
                        </div>
                    </li>
                </ul>
            </header>

            <form method="POST" action="" class="hidden" id="login-container">
                <input type="email" name="l-email" class="client-info" placeholder="Correo">
                <input type="password" name="l-password" class="client-info" placeholder="Contraseña">
                <button type="submit" name="l-button" class="signin-button">Entrar</button>
            </form>

            <form method="POST" action="" class="hidden" id="register-container">
                <input type="text" name="r-username" class="client-info" placeholder="Nombre">
                <input type="email" name="r-email" class="client-info" placeholder="Correo">
                <input type="password" name="r-password" class="client-info" placeholder="Contraseña">
                <button type="submit" name="r-button" class="signin-button">Registrarse</button>
            </form>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>