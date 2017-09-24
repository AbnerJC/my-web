<?php 
include ('../conexion.php');
$id=$_POST['id'];
$usuario=$_POST['user'];
$clave=$_POST['clave'];
$estado=$_POST['estado'];
$sql= "UPDATE persona SET usuario='$usuario',password='$clave',estado='$estado' WHERE id='$id'";
$resultado=$cn->query($sql);
$respuesta=$resultado->rowCount();
if($respuesta>0){
    header("location: ../index.php?res=1");
}
else {
    header("location: ../index.php?res=0");
}
?>