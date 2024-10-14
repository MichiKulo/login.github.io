<?php

 include('conexion.php');

$usuario 	= $_POST["usuario"];
$password 	= $_POST["password"];
$cargo 	= $_POST["cargo"];



$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usuario' and password = '$password' and cargo = '$cargo'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($cargo=="1")
			{	
				header("Location: pag_jefe.php");
			}
		else if ($cargo=="2")
			{
				header("Location: pag_secretaria.php");
			}
		else if ($cargo=="3")
			{
				header("Location: pag_soporte.php");
			}
		else if ($cargo=="4")
			{
				header("Location: pag_auxiliar.php");
			}
		else if ($cargo=="5")
			{
				header("Location: pag_cajero.php");
			}
		else if ($cargo=="6")
			{
				header("Location: pag_agua.php");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.html' </script>";
	}


?>