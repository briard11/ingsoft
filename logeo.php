<?php  
include "conexion.php";
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];

$query="select usr_type from usuarios where usr_name='".$usuario."' and usr_password='".$clave."'";

if($resultado = mysqli_query($enlace, $query)){
	$valor = mysqli_fetch_array($resultado, MYSQLI_NUM);
	
	echo '<script language="javascript">alert("Ha ingresado con exito.");</script>';
	if ($valor[0]==1) {
		echo '<script language="javascript"> window.location="inicio_2.php"; </script>';
	}else{
		echo '<script language="javascript"> window.location="inicio_2_consumidor.php"; </script>';
	}
	
	
}else{
	echo '<script language="javascript">alert("Usuario o clave incorrectas.");</script>';
	echo '<script language="javascript"> window.location="index.php"; </script>';
}
?>
