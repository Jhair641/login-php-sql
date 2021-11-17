<?php
    include_once('index.php');
    include_once("conexion.php");
    error_reporting(0);
    session_start();

    $boton = $_POST["l-button"];

    if (isset($boton)) {
        $email = $_POST["l-email"];
        $password = $_POST["l-password"];

        $sql = "SELECT * FROM datos WHERE correo ='$email' AND contrasena ='$password'";
        $result = sqlsrv_query($conn, $sql);

        $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

        $correo = $row['correo'];
        $contrasena = $row['contrasena'];

        if ($email == $correo && $password == $contrasena) {

            $_SESSION['correo'] = $correo;

            header("Location: redirection.php");
            
        }
        else {
            echo "<script> alert('El usuario o la contraseña es incorrecta!') </script>";
        }
    }

?>