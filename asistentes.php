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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title>Tabla de usuarios</title>
</head>

<body>
    <h1>Tabla de Usuarioss</h1>
    <br>
    <table border="1">
        <tr>
            <td>id</td>
            <td>usuario</td>
            <td>rol</td>
        </tr>
        <?php
        $sql = "select id, usuario,rol from usuarios";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
<<<<<<< HEAD
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['rol'] ?></td>
=======
        
           
            <td><?php echo $mostrar['usuario'] ?></td>
        
        
            <td><?php echo $mostrar['rol'] ?></td>

        </tr>

        <tr>
            <td>Ejemplo</td>
            <td>ejemplo</td>
            <td>ejemplo</td>
        </tr>

         <tr>
            <td>Ejemplo</td>
            <td>ejemplo</td>
            <td>ejemplo</td>
>>>>>>> 209ec71abad2fd0e2ffe5266957c6a9e1c9a4e3d
        </tr>
        <?php
        }
        ?>
    </table>
    <br />
    <button onclick="location.href='index.php'">REGRESAR</button>
</body>

</html>