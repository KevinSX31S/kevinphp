<?php
if (!empty($_POST["Modificar"]))  {
    if(!empty($_POST["Codigo"]) and !empty($_POST["Usuario"]) and !empty($_POST["Clave"]) and !empty($_POST["CodigoEmpleado"])) {
        $Codigo = $_POST["Codigo"];
        $Usuario = $_POST["Usuario"];
        $Clave = $_POST["Clave"];
        $CodigoEmpleado = $_POST["CodigoEmpleado"];
        $sql = $conexion->query("update usuario set Usuario='$Usuario',Clave='$Clave',CodigoEmpleado='$CodigoEmpleado' where Codigo='$Codigo'");
        if ($sql ==1){
        echo '<div class="alert alert-success">Persona Modificada Correctamente</div>';
        header("Location: Inicio.php");
        }else{
        echo '<div class="alert alert-danger">Persona Modificada Erronea</div>';
  
      }

    }else{
        echo '<div class="alert alert-danger">Algun Campo Falta Por Completar, Verifica</div>';
    }

}
?>