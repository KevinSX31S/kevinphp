<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/Estilo1.css" type="text/css">
<meta charset="utf-8">
<title>Examen_01</title>
</head>
<body>
<?php 
	$ApePaterno=$ApeMaterno=$Nombres="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["apepaterno"])) {
        $errorPaterno = "Porfavor ingrese Apellido Paterno";
    	}else{
    	$ApePaterno = validar($_POST["apepaterno"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$ApePaterno)) {
      		$errorPaterno = "Solo se permiten letras";
    		}
    	}
	
		
		if (empty($_POST["apematerno"])) {
        $errorMaterno = "Porfavor ingrese Apellido Materno";
    	}else{
    	$ApeMaterno = validar($_POST["apematerno"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$ApeMaterno)) {
      		$errorMaterno = "Solo se permiten letras";
    		}
    	}
	
		
		if (empty($_POST["nombre"])) {
        $errorNombre = "Porfavor ingrese Nombre";
    	}else{
    	$Nombres = validar($_POST["nombre"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$Nombres)) {
      		$errorNombre = "Solo se permiten letras";
    		}	
    	}
		
		
		if (empty($_POST["dni"])) {
        $errorDNI = "Porfavor ingrese DNI";
    	}else{
    		if (!preg_match("/^[a-zA-Z ]*$/",$DNI)) {
				
				$errorDNI = "Solo se permiten números";
			}else{
				$DNI = validar($_POST["dni"]);
				if(strlen($_POST["dni"])==8){
					$DNI = validar($_POST["dni"]);
				}else{
					$errorDNI = "dni NO válido por cantidad caracteres";
				}
				
      		}	
    	}
		
	}
	
	
	function validar($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<style>
	.error{
		color: red;
	}
</style>
<form method="post" action="#">
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td>INGRESE PACIENTE</td>
      <td><input type="checkbox" name="tipo[]" value="reniec">Reniec</td>
      <td><input type="checkbox" name="tipo[]" value="manual">Manual</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2">DNI</td>
      <td>Ape.Paterno</td>
      <td>Ape.Materno</td>
      <td>Nombres</td>
      
    </tr>
    <tr>
      <td></td>
      <td colspan="2"><input type="text" name="dni"><span class="error">* <?php echo $errorDNI;?></span></td>
      <td><input type="text" name="apepaterno"><span class="error">* <?php echo $errorPaterno;?></span></td>
      <td><input type="text" name="apematerno"><span class="error">* <?php echo $errorMaterno;?></span></td>
      <td><input type="text" name="nombre"><span class="error">* <?php echo $errorNombre;?></span></td>
      
    </tr>
    <tr>
      <td></td>
      <td>Fe. Nacimiento</td>
      <td>Edad(Ayuda)</td>
      <td>Sexo</td>
      <td>Estado Civil</td>
      <td>Estatura</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="fechanaci"></td>
      <td><input type="text" name="edad"></td>
      <td><input type="checkbox" name="sexo[]" value="Masculino">M
      <input type="checkbox" name="sexo[]" value="Femenino">F
      </td>
      <td><input type="text" name="EstadoCivil"></td>
      <td><input type="text" name="estatura"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Departamento</td>
      <td>Provincia</td>
      <td>Distrito</td>
      <td>Dirección</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="Departamento"></td>
      <td><input type="text" name="Provincia"></td>
      <td><input type="text" name="Distrito"></td>
      <td><input type="text" name="Direccion"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Telefono</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input type="text" name="telefono"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit"></td>
      <td><input type="reset"></td>
    </tr>
  </tbody>
</table>
	</form>
	
	
	<?php
	
	if (!preg_match("/^[a-zA-Z ]*$/",$ApePaterno)) {
      $ApePa = "";
    }else{
		$ApePa=$_POST['apepaterno'];
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$ApeMaterno)) {
      $ApeMa = "";
    }else{
		$ApeMa=$_POST['apematerno'];
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$Nombres)) {
      $Nombres = "";
    }else{
		$Nombres=$_POST['nombre'];
	}
	
	
	
	$DNI=$_POST['dni'];
	$Fecha=$_POST['fechanaci'];
	$Edad=$_POST['edad'];
	$Sexo=$_POST['sexo'];
	$EstadoCivil=$_POST['EstadoCivil'];
	$Estatura=$_POST['estatura'];
	$Departamento=$_POST['Departamento'];
	$Provincia=$_POST['Provincia'];
	$Distrito=$_POST['Distrito'];
	$Direccion=$_POST['Direccion'];
	$Telefono=$_POST['telefono'];
?>
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="2">USUARIO REGISTRADO</td>
      
    </tr>
    <tr>
      <td>AP. PATERNO:</td>
      <td><?=$ApePa?></td>
    </tr>
    <tr>
      <td>AP. MATERNO:</td>
      <td><?=$ApeMa?></td>
    </tr>
    <tr>
      <td>NOMBRES:</td>
      <td><?=$Nombres?></td>
    </tr>
    <tr>
      <td>FECHA NACIMIENTO:</td>
      <td><?=$Fecha?></td>
    </tr>
    <tr>
      <td>EDAD:</td>
      <td><?=$Edad?></td>
    </tr>
    <tr>
      <td>SEXO:</td>
      <td><?php foreach($Sexo as $valor){
		echo $valor."<br>";
}?></td>
    </tr>
    <tr>
      <td>ESTADO CIVIL:</td>
      <td><?=$EstadoCivil?></td>
    </tr>
    <tr>
      <td>ESTATURA:</td>
      <td><?=$Estatura?></td>
    </tr>
    <tr>
      <td>DEPARTAMENTO:</td>
      <td><?=$Departamento?></td>
    </tr>
    <tr>
      <td>PROVINCIA:</td>
      <td><?=$Provincia?></td>
    </tr>
    <tr>
      <td>DISTRITO:</td>
      <td><?=$Distrito?></td>
    </tr>
    <tr>
      <td>DIRECCIÓN:</td>
      <td><?=$Direccion?></td>
    </tr>
    <tr>
      <td>TELÉFONO:</td>
      <td><?=$Telefono?></td>
    </tr>
     <tr>
      <td>DNI:</td>
      <td><?=$DNI?></td>
    </tr>
  </tbody>
</table>
</body>
</html>