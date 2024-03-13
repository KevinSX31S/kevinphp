<?php
if (!empty($_POST["Registrar"]))    {
    if(!empty($_POST["Codigo"]) and !empty($_POST["Usuario"]) and !empty($_POST["Clave"]) and !empty($_POST["CodigoEmpleado"])) {
    $Codigo = $_POST["Codigo"];
    $Usuario = $_POST["Usuario"];
    $Clave = $_POST["Clave"];
    $CodigoEmpleado = $_POST["CodigoEmpleado"];

        $sql = $conexion->query("Insert into usuario(Codigo,Usuario,Clave,CodigoEmpleado)values('$Codigo','$Usuario','$Clave','$CodigoEmpleado')");
        if ($sql ==1){
        echo '<div class="alert alert-success">Persona Registrada Correctamente</div>';
        }else{
        echo '<div class="alert alert-danger">Persona Registrada Erronea</div>';
  
      }

    }else{
        echo '<div class="alert alert-danger">Algun Campo Falta Por Completar, Verifica</div>';
    }
}

?>