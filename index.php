<?php 
session_start();
session_destroy();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet"  href="css/acceso.css">  
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
<form action="<?php echo htmlspecialchars('sesion.php');?>" method="post">

<div class="login-box"> 
    
      <table width="100%" border="0">
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td>	          
             <b style="font-size:14px">USUARIO</b>
             <input type="text" id="username" name="txtUsuario" style="width:83%; padding-left:35px">
          </td>
        </tr> 
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td>
             <b style="font-size:14px !important">CONTRASE&Ntilde;A</b>
             <input type="password" id="password" name="txtClave" style="width:83%;padding-left:35px">
          </td>
        </tr> 
         <tr><td>&nbsp;</td></tr>
        <tr><td align="center"><input type="submit" value="Iniciar Sesión"  size="90%"></td></tr>
      </table>
</form>
</body>
</html>
