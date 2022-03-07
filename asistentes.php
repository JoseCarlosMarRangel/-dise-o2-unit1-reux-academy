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
     <div class="bg-sec">

    </div>
    <h1>USERS</h1>
    <br>
    <div id="main-container">
    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>USER</th>
            <th>ROL</th>
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
    <button class="btn btn--2" onclick="location.href='index.html'" >EXIT</button>

     <div class="bg-sec">

    </div>
</body>

</html>
