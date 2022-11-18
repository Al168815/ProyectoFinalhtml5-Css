<?php
$conexion = new mysqli("localhost", "id19390153_escuela_168815","_K2(NV]ELfOn&enA","id19390153_escuela");

if($conexion){
    echo "la gestion fue exitosa !!";
    /* header("Location: index.php");*/
}else{
    echo"fallo la gestion";
}
?>