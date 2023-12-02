<?php

include("conexion.php");

$email = $_POST["usuario"];
$pass   = $_POST["pass"];

//Login
if(isset($_POST["ingresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$email' AND password='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $email'); window.location='principal.html' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
	}
}

//Registrar
if(isset($_POST["crear"]))
{
	$sqlgrabar = "INSERT INTO login(usuario,password) values ('$email','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $email'); window.location='index.php' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysqli_error($conn);
	}
}


?>


