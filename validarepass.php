<?php
session_start();
if (isset($_SESSION["idepass"]) & isset($_POST["etxtpass"])){
include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$database = @mysql_select_db('proyecto', $conexion) or die(mysql_error());
$idus = $_SESSION["idepass"];
$pass = $_POST["etxtpass"];

// Actualiza tipo de usuario
if (isset($_SESSION["idepass"])){
	mysql_query("UPDATE usuarios SET password = '".$pass."' WHERE id = '".$idus."'",$conexion);
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
?>