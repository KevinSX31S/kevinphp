<?php
require 'Conectar.php';
session_start();

$usuario = $_POST['Usuario'];
$clave = $_POST['Clave'];

$query = "Select Count(*) as Contar from usuario where Usuario = '$usuario' and Clave = '$clave'";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

    if ($array['Contar']>0){
		$_SESSION['Usuario'] = $usuario;
	header("Location: Inicio.php");
    }else {
     echo "DATOS INCORRECTOS";
	}


?>