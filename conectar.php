<?php
class cado{
	function conectar(){
		try{
			//date_default_timezone_set('America/Lima');
			$db=new PDO('mysql:host=localhost;dbname=instituto_sise','root','mysql123');//se crea lka cadena de conexion
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//se comprueba q no haya errores
			return $db;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}   
	}
	function ejecutar($isql){
		$conexion=$this->conectar();//se conecta la bd
		$ejecutar= $conexion->prepare($isql);//se prepara la consulta
		$ejecutar->execute();//se ejecuta la consuilta
		$conexion=null;//se limpian  los valores, es como cerra la conexion
		return $ejecutar;
		
	}
}
?>