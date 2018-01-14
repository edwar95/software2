<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido | <?php echo ''.$_SESSION['usuario'].''; ?></title>
        <meta charset="utf-8" lang="es">
    </head>
    <body>
        <h1> Bienvenido <?php echo '<b>'.$_SESSION['usuario'].</b>;?> </h1>
        <table>

            <tr>
                <td>Nombre:</td>
                <td><?php echo '<b>'.$_SESSION['nombre'].'</b>'; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="cerrar.php">Cerrar sesion</a> </td>
            </tr>
        </table>
    </body>
</html>
