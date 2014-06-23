<?php
if(isset($_GET['idelimitema'])) {

include_once("settings/settings.inc.php");
$conexion= mysql_connect (SQL_HOST,SQL_USER,SQL_PWD) or die(mysql_error());
$database = mysql_select_db('proyecto', $conexion) or die(mysql_error());
$idtedit = $_GET['idelimitema'];
mysql_query("select temas.* FROM temas WHERE  id='".$idtedit."'",$conexion);

mysql_query("DELETE FROM `temas` WHERE id='".$idtedit."'",$conexion);

$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al eliminar los valores. $my_error";

} else {

echo "Los datos han sido eliminados satisfactoriamente";
header("location:blog.php");
mysqli_close($conexion);

} 
}
?>
