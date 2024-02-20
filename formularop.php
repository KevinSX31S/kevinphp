<!doctype html>
<html>
<head>
<link> rel = "stylesheet" href="mystyle.css" type = "text/css">
<meta charset = "utf-8">
<tittle>Practica</tittle>
</head>
<body>
    <?php
    if ($_SERVER["Request_Method"] == "POST")
    {
       if (empty($_POST["apepaterno"]))
       {
        $errorPaterno = "Porfavor Ingresa Apellido Paterno";
       } else{
        $apepaterno = Validar($_POST["apepaterno"]);
         if (!preg_match("/^[a-zA-Z]*$/",$apepaterno)){
            $errorPaterno = "Solo se permite letras";
         }
       }

       if(empty($s_post["apematerno"])){
        $errormaterno = " Porfavor Ingresa Apellido Materno";
       }else{
        $apematerno = Validar($s_post["apematerno"]);
        if(!preg_match("/^[a-zA-Z]*$/",$apematerno)){
            $errormaterno = " Solo se permite Letras";
        }
       }
    }