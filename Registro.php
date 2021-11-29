<?php
include("Conexion.php");
$con=conectar();

$sql="SELECT * FROM tabla";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Es.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro Uwu</title>
</head>

<style>


</style>

<body class="BD">

    <form action="Guardar.php" method="post" class="BD-p">

        <p>Correo <br><input type="email" name="Email" /></p>

        <p>Nombre <br><input type="text" name="Nombre" /></p>

        <p>Contraseña <br><input type="password" name="Contraseña" /></p>

        <p>Edad <br><input type="text" name="Edad" /></p>

        <input type="submit" class="btn btn-success" value="Guardar">
        <a href="Registro.php" class="btn btn-primary ">Eliminar</a>
    </form>


</body>

</html>