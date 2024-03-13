<!DOCTYPE html>
<?php
require('Conectar.php');
session_start();
$usuario = $_SESSION['Usuario'];
echo "<h4>Bienvenid@
'User Ingresado : $usuario ' </h4>";
?>
<html lang = "en">
        <!--Cabecera-->
    <head>
        <link rel="stylesheet" href="Style/estilos.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE-edge">
        <meta name="viewport" content = "width=device-width, Initial-scale=1.0">
        <title>Welcome Form Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <h1 class= "text-center p-3">Bienvenido Lista De  Usuarios</h1>
    <?php
    include "Conectar.php";
    include "Eliminar.php";
    ?>
    <div class = "container-fluid row">
    <!--Formulario-->
    <form class ="col-4 p-3" method= "POST">
    <h3>Registro De Personas</h3>
        <!--Conexiones De Files-->
    <?php
    include "Conectar.php";
    include "Registro.php";
    ?>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Ingresa Codigo </label>
      <input type="text" id="disabledTextInput" class="form-control" name="Codigo">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Ingresa Usuario</label>
      <input type="text" id="disabledTextInput" class="form-control" name="Usuario">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Ingresa Clave</label>
      <input type="TEXT" id="disabledTextInput" class="form-control" name="Clave">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Ingresa Codigo De Empleado</label>
      <input type="text" id="disabledTextInput" class="form-control" name="CodigoEmpleado">
    </div>
    <button type="submit" class="btn btn-primary" name ="Registrar"value = "Ok">Registrar</button>
    </form>

    <div class ="col-8 p-4">
      <table class="table">
        <thead class ="bg-info">

    <tr>
      <th scope="col">Codigo </th>
      <th scope="col">Usuario</th>
      <th scope="col">Clave</th>
      <th scope="col">CodigoEmpleado</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "Conectar.php";
    $sql= $conexion->query(" select * from usuario");
    while ($datos = $sql->fetch_object()) { ?>
    <tr>
      <td><?=$datos->Codigo?></td>
      <td><?=$datos->Usuario?></td>
      <td><?=$datos->Clave?></td>
      <td><?=$datos->CodigoEmpleado?></td>
         <td>
          <a href = "Modificar.php?id=<?=$datos->Codigo?>" >Editar</a>
          <a href = "Inicio.php?id=<?=$datos->Codigo?>">Eliminar</a>
         </td>
      </tr>
      <?php }
      ?>



      </tbody>
       </table>
      </div>
   </div>
    <!---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>
