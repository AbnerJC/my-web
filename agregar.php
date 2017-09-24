<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>agregar</title>
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
<div class="row">
   <form action="controladores/registrarUsuario.php" method="POST" role="form">
       <legend>Formulario de agregar</legend>
   
       <div class="form-group">
           <label for="">Agregar usuario</label>
           <input type="text" class="form-control" name="user" placeholder="Ingrese usuario">
       </div>

       <div class="form-group">
           <label for="">Agregar contraseña</label>
           <input type="password" class="form-control" name="clave" placeholder="Ingrese contraseña">
       </div>

       <div class="form-group">
           <label for="">Agregar estado</label>
           
           <select name="estado" class="form-control">
               <option value="1">Disponible</option>
               <option value="0">No disponible</option>
           </select>
           
       </div>
       <button type="submit" class="btn btn-primary">Registrar</button>
   </form> 

   <?php
   if(isset($_GET["res"])){
    $respuesta=$_GET["res"];
    if($respuesta=1){
        echo "Se insertó correctamente";
    }
    else {
        echo "Hubo un error";
    }
   }
   
   ?>
   </div>
   </div> 
</body>
</html>