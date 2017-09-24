<?php
$id=$_GET['id'];
include ('../conexion.php');
$sql= " SELECT * FROM persona WHERE id='$id'";
$resultado=$cn->query($sql);
$datos=$resultado->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="container">
<div class="row">
   <form action="actualizarUsuario.php" method="POST" role="form">
       <legend>Formulario de editar</legend>
       <input type="hidden" class="form-control" name="id" value="<?php echo $datos['id']; ?>" >
       <div class="form-group">
           <label for="">Editar usuario</label>
           <input type="text" class="form-control" name="user" value="<?php echo $datos['usuario']; ?>" >
       </div>

       <div class="form-group">
           <label for="">Editar contraseña</label>
           <input type="password" class="form-control" name="clave" value="<?php echo $datos['password']; ?>" >
       </div>

       <div class="form-group">
           <label for="">Editar estado</label>
           
           <select name="estado" value="<?php echo $datos['estado']; ?>" class="form-control">
               <option value="1">Disponible</option>
               <option value="0">No disponible</option>
           </select>
           
       </div>
       <button type="submit" class="btn btn-primary">Guardar</button>
   </form> 
   </div>
   </div> 
</body>
</html>