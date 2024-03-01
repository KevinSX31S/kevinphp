<?php
require_once('conectar.php');//se llama a la clase cado de conectar.php, es require once porq necesariamente se debe realizar la conexion

class GrupoUsuario{
	function listarGrupos(){
		$objCado= new cado();//se llama a la clase cado y se almacena ern una variable
		$sql="SELECT * FROM usuario_grupo;";
			$ejecutar=$objCado->ejecutar($sql);//se ejecuta la consulta
			return $ejecutar;
		} 
}
?>