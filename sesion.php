<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Iniciar Sesión</title>
<link rel="stylesheet" href="css/acceso.css">  
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .login-container {
        width: 300px;
        margin: 100px auto;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .login-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/sweetalert.min.js"></script>
</head>
<body>
<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="<?php echo htmlspecialchars('sesion.php');?>" method="post">
        <input type="text" id="username" name="txtUsuario" placeholder="Usuario">
        <input type="password" id="password" name="txtClave" placeholder="Contraseña">
        <input type="submit" value="Iniciar Sesión">
    </form>
</div>
</body>
</html>