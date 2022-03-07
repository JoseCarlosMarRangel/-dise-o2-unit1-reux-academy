<?php
$bd = 'prueba';
$servidor = 'localhost';
$usuario = 'ghost';
$contrasena = '123';

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAsistentes.css">
    <title>Tabla de usuarios</title>
</head>

<body>
    <h1>Tabla de Usuarios</h1>
    <br>
    <div id="main-container">
    <table>
        <thead>
            <tr>
            <th>id</th>
            <th>usuario</th>
            <th>rol</th>
            </tr>
        </thead>
        <?php
        $sql = "select id, usuario,rol from usuarios";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
        </tr>
        <tr>    
            <td><?php echo $mostrar['usuario'] ?></td>
        </tr>
        <tr>
            <td><?php echo $mostrar['rol'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
    <br />
    <button onclick="location.href='index.php'">REGRESAR</button>
</body>

</html>
