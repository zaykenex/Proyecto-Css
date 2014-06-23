<?php
if(isset($_POST['txtnombre']) && !empty($_POST['txtusuario']) && isset($_POST['txtpass'])) {

include_once("settings/settings.inc.php");

$conexion= mysql_connect (SQL_HOST,SQL_USER,SQL_PWD);
$database = mysql_select_db('proyecto', $conexion);

mysql_query("INSERT INTO usuarios (nombre, usuario, password, tipo) 
	VALUES ('{$_POST['txtnombre']}','{$_POST['txtusuario']}','{$_POST['txtpass']}',3)",$conexion);

$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al insertar los valores. $my_error";

} else {

echo "Los datos han sido introducidos satisfactoriamente";
header("location:login.php?error=4");
mysqli_close($conexion);
}

} else {

echo "Error, no ha introducido todos los datos";

} 
?>
