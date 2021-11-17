<?php
    require_once("conexion.php");
    session_start();

    $correo = $_SESSION['correo'];

    if (!isset($_SESSION['correo'])) {
        header("Location: index.php");
    }

    $sql = "SELECT * FROM datos";
    $result = sqlsrv_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="/css/redirection.css">
</head>
<body>
    <div class="container">
        <div class="perfil">
            <span>Tu correo es: <?php  echo "$correo" ?></span>
            <a href="logout.php">Cerrar Sesion</a>
        </div>
        <div class="table">
            <table class="tabla">
                <tr>
                    <th>Nombre:</th>
                    <th>Correo:</th>
                    <th>Contraseña:</th>
                </tr>
                <?php  while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td>*******</td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>