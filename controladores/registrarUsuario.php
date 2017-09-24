<?php
include ('../conexion.php');
$user=$_POST['user'];
$clave=$_POST['clave'];
$estado=$_POST['estado'];
$sql="INSERT INTO persona(usuario, password, estado) VALUES ('$user','$clave','$estado')";
$resultado=$cn->query($sql);
$respuesta=$resultado->rowCount();
if($respuesta>0){
    header("location: ../agregar.php?res=1");
}
else {
    header("location: ../agregar.php?res=0");
}
?>