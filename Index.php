<?php
session_start();
session_destroy();?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Welcome Web Site "JumeX"</title>
    <link rel="stylesheet" href="Style/estilos.css">
          <script src="js/jquery-2.1.4.min.js"></script>

    </head>
    <body>


    
    <div class="login-box"> 

    <h1>Inicia Sesion</h1>

    <table width="100%" border="0">
      <tr><td>&nbsp;</td></tr>
      <tr>

      <center>
      <form action="Formulario/IniciarSesion.php" method="POST">

        <td>	          
           <b style="font-size:14px">USUARIO</b>
           <input type="text" id="Usuario" name="Usuario" style="width:83%; padding-left:35px">
        </td>
      </tr> 
      <tr><td>&nbsp;</td></tr>
      <tr>
        <td>
           <b style="font-size:14px !important">CONTRASE&Ntilde;A</b>
           <input type="password" text = id="Usuario" name="Clave" style="width:83%;padding-left:35px">
        </td>
      </tr> 
       <tr><td>&nbsp;</td></tr>
       
      <tr><td align="center"><input type="submit" value="Iniciar Sesión"  size="140%"></td></tr>
      <center>
    </table>
</form>
</html>
<!DOCTYPE html>
    