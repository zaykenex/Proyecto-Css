<?php
if(isset($_POST['conteaeditar'])) {

include_once("settings/settings.inc.php");
$conexion= mysql_connect (SQL_HOST,SQL_USER,SQL_PWD) or die(mysql_error());
$database = mysql_select_db('proyecto', $conexion) or die(mysql_error());
session_start();
$cedit = $_POST["conteaeditar"]; 
$idtedit = $_SESSION["iddecom"];

mysql_query("UPDATE comentarios SET comentarios = '".$cedit."' WHERE id='".$idtedit."'",$conexion);

$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al modificar los valores. $my_error";

} else {

echo "Los datos han sido modificados satisfactoriamente";
header("location:blog.php");
mysqli_close($conexion);

} 
}
?>
