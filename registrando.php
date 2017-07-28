<?php
include "conexion.php";
	$usuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	$opcion=$_POST["opc"];
	
	$query="insert into usuarios(usr_name,usr_password,usr_type)values('".$usuario."','".$clave."',".$opcion.")";
	
	if ($resultado = mysqli_query($enlace, $query)) {
		echo '<script language="javascript">alert("Ha sido registrado con exito.");</script>';
		echo '<script language="javascript"> window.location="index.php"; </script>';
	} else {
		echo '<script language="javascript">alert("Ups, no se que paso.");</script>';
		echo '<script language="javascript"> window.location="registro.php"; </script>';
	}
	
?>