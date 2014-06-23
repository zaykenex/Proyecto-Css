<?php
session_start();
if(isset($_GET["idcusu"]) && isset($_GET['tipo'])) {
include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$database = @mysql_select_db('proyecto', $conexion) or die(mysql_error());
$idus = $_GET["idcusu"];
$tipo = $_GET['tipo'];

// Actualiza tipo de usuario
if (isset($_GET["idcusu"])){
	mysql_query("UPDATE usuarios SET tipo = '".$tipo."' WHERE id = '".$idus."'",$conexion);
}
$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al modificar el usuario. $my_error";

} else {

echo "El usuario ha sido modificado satisfactoriamente";
header("location:controlusuario.php");
mysqli_close($conexion);

} 
}


if(isset($_GET['bidusr'])) {
include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$database = @mysql_select_db('proyecto', $conexion) or die(mysql_error());
$eliminrusu = $_GET['bidusr'];

if (isset($_GET['bidusr'])) {
mysql_query("DELETE FROM usuarios WHERE id = '".$eliminrusu."'",$conexion);  
}
$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al eliminar el usuario. $my_error";

} else {

echo "El usuario ha sido eliminado satisfactoriamente";
header("location:controlusuario.php");
mysqli_close($conexion);

} 
}

?>
