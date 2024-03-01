<?php
require_once('conectar.php');//se llama a la clase cado de conectar.php, es require once porq necesariamente se debe realizar la conexion

class Usuario{
	
	function iniciarSesion($usuario,$clave){
		$objCado= new cado();//se llama a la clase cado y se almacena en una variable
		$sql="select u.id_user, u.nombres, u.apellidos, u.dni, u.codigo from usuario u where u.user= '$usuario' and u.pass= '$clave';";
			$ejecutar=$objCado->ejecutar($sql);//se ejecuta la consulta
			return $ejecutar;
		} 
}
?>