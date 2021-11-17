<?php
    include_once('index.php');
    include_once("conexion.php");
    
    $boton = $_POST["r-button"];

    if (isset($boton)) {
        $username = $_POST["r-username"];
        $email = $_POST["r-email"];
        $password = $_POST["r-password"];

        $sql = "SELECT * FROM datos WHERE correo ='$email'";
        $result = sqlsrv_query($conn, $sql);
        $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

        if ($row['correo'] == NULL) {
            $sql = "INSERT INTO datos VALUES('$username', '$email', '$password')";
            $result = sqlsrv_query($conn, $sql);

            if ($result) {
                echo "<script> alert('Usuario registrado correctamente') </script>";      
            }
            else {
                echo "<script> alert('Ups! Ha ocurrido un error') </script>";
            }
        }

        else {
            echo "<script> alert('El usuario ya existe!') </script>";
        }
    }

?>
