<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
<div class="row">
<?php 
    include ('conexion.php');
    $sql='SELECT * from persona';
    $resultado=$cn->query($sql);
    $datos=$resultado->fetchAll();
    ?>
    <div>
    <h1 class="centrar">Mis usuarios</h1>
    </div>
    <hr>
    <a href="agregar.php" class="btn btn-primary pull-right">Agregar</a>
    
<table class="table table-hover">
    <thead>
    <th>id</th>
    <th>usuario</th>
    <th>contraseña</th>
    <th>Estado</th>
    <th>Acción</th>
    <th>Acción 2</th>
</thead>
<tbody>
    <?php
    foreach ($datos as $dato){
        $id= $dato['id'];
        $estado= $dato['estado'];
    ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $dato['usuario']; ?></td>
        <td><?php echo $dato['password']; ?></td>
        <td><?php if($estado==0){
            echo "No disponible";
        } 
        else{
            echo "Disponible";
        }?></td>
        <td><a href="controladores/eliminarUsuario.php?id=<?php echo $id; ?>" class="btn btn-danger">Eliminar</a></td>
        <td><a href="controladores/editarUsuario.php?id=<?php echo $id; ?>" class="btn btn-warning">Editar</a></td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>
</div>
</body>
</html>


