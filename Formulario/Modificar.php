<?php
include ('Conectar.php');
$id = $_GET["id"];
$sql = $conexion->query("select *from usuario where Codigo=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Modify Users</title>
</head>
<body>
    <!--Formulario-->
    <form class ="col-4 p-3 m-auto" method= "POST">
    <h3>Modificar Personas</h3>
    <?php
    include 'Modificarusuario.php';
    while($datos = $sql->fetch_object())   { ?>
          <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Ingresa Codigo </label>
          <input type="text" id="disabledTextInput" class="form-control" name="Codigo" value="<?= $datos->Codigo?>">
          </div>
          <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Ingresa Usuario</label>
          <input type="text" id="disabledTextInput" class="form-control" name="Usuario"  value="<?= $datos->Usuario?>">
          </div>
          </div>
          <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Ingresa Clave</label>
         <input type="TEXT" id="disabledTextInput" class="form-control" name="Clave"  value="<?= $datos->Clave?>">
          </div>
         </div>
         <div class="mb-3">
         <label for="disabledTextInput" class="form-label">Ingresa Codigo De Empleado</label>
         <input type="text" id="disabledTextInput" class="form-control" name="CodigoEmpleado"  value="<?=  $datos->CodigoEmpleado?>">
          </div>
         </div>
    <?php }
    ?>

    <button type="submit" class="btn btn-primary" name ="Modificar"value = "Ok">Modificar</button>
    </form>
</body>
</html>