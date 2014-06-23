<?php
if(isset($_POST['txttema']) && !empty($_POST['txtconte'])){

include_once("settings/settings.inc.php");

$conexion= mysql_connect (SQL_HOST,SQL_USER,SQL_PWD);
$database = mysql_select_db('proyecto', $conexion);
session_start();

mysql_query("INSERT INTO temas (id_usuario, titulo, contenido) 
	VALUES ('{$_SESSION['idusr']}','{$_POST['txttema']}','{$_POST['txtconte']}')",$conexion);

$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al insertar los valores. $my_error";

} else {

echo "Los datos han sido introducidos satisfactoriamente";
header("location:blog.php");
mysqli_close($conexion);
}

} else {

echo "Error, no ha introducido todos los datos";

} 
?>
