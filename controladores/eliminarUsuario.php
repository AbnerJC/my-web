<?php
$id= $_GET['id'];
include ('../conexion.php');
$sql="DELETE FROM PERSONA WHERE id= '$id'";
$resultado=$cn->query($sql);
$respuesta=$resultado->rowCount();
if($respuesta>0){
    header("location: ../index.php");
}
else{
    echo "Error";
}
?>