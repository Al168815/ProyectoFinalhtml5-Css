<?php
include("abre.php");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$calle = $_POST['calle'];

$consulta = "INSERT INTO contacto(nombre, apellidos, calle) VALUES('$nombre', '$apellidos', '$calle')";

if($conexion->query($consulta)=== TRUE){
   /*header("location: index.php");*/
}else{
    echo"Error:" , $consulta . "<br>" .$conexion->error;
}
$conexion->close();
?>