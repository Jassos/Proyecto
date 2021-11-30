<?php 
include("Conexion.php");
$con=conectar();

$Email=$_POST['Email'];
$Nombre=$_POST['Nombre'];
$Contraseña=$_POST['Contraseña'];
$Edad=$_POST['Edad'];
$Comentario=$_POST['Comentario'];

$sql="INSERT INTO tabla VALUES('$Email', '$Nombre', '$Contraseña', '$Edad', '$Comentario')";
$query= mysqli_query($con,$sql);

if($query){
    header("location: Exito.html");
    
}else{
    header("location: Error.html");
}
?>