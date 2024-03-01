<script src="js/sweetalert.min.js"></script>
<?php
session_start();
if(!isset($_SESSION["Nombres"])) {
	header('Location: index.php');
}
if(!isset($_SESSION["Dni"])) {
	header('Location: index.php');
}
include('cado/clase_usuario.php');//se llama al archivo de clase_usuario.php

$user=$clave="";
$user=validar($_POST["txtUsuario"]);

$clave=validar($_POST["txtClave"]);

$objUsuario=new Usuario();//se llama a la clase usuario
$validar=$objUsuario->iniciarSesion($user,md5($clave));
$sesion=$validar->fetch();

$_SESSION["id"]=$sesion[0];
$_SESSION["Nombres"]=$sesion[1];
$_SESSION["Apellidos"]=$sesion[2];
$_SESSION["Dni"]=$sesion[3];
$_SESSION["Codigo"]=$sesion[4];

if(empty($user)){
	?>
	<script>	
		
	alert("Ingrese usuario");
	window.location.href="index.php";

	</script>
				
	<?php
	exit;
	}
elseif(empty($clave)){
	?>
	<script>	
		
	alert("Ingrese contraseña");
	window.location.href="index.php";

	</script>
				
	<?php
	exit;
	}
	
if(!empty($sesion)){
		header('Location: usuario.php');		

	}
					else
					{	
						?>
						<script>	

						alert("Usuario o contraseña incorrectas");
						window.location.href="index.php";

						</script>

						<?php
					}
	

function validar($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>