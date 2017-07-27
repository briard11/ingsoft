<?php  
include "conexion.php";
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];

$query="select usuario, clave from usuarios where usr_name=".usuario." and usr_password=".clave;
if($resultado = mysqli_query($enlace, query)){
	echo '<script language="javascript">alert("Ha ingresado con exito.");</script>';
	echo '<script language="javascript"> window.location="inicio.php"; </script>';
}else{
	echo '<script language="javascript">alert("Usuario o clave incorrectas.");</script>';
	echo '<script language="javascript"> window.location="index.php"; </script>';
}
?>
