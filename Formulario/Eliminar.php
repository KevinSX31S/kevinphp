<?php
if(!empty($_GET["id"])){
    $Codigo = $_GET["id"];
    $sql = $conexion->query("delete from usuario where Codigo='$Codigo'");
    if($sql ==1){
         echo '<div class="alert alert-success">Eliminado Correctamente</div>';
    }else{
        echo '<div class="alert alert-success">Eliminado Erronea , Verifica</div>';

    }
}
?>