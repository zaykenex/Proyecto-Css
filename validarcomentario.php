<?php
if(isset($_POST['txtcom'])) {

include_once("settings/settings.inc.php");

$conexion= @mysql_connect (SQL_HOST,SQL_USER,SQL_PWD);
$database = @mysql_select_db('proyecto', $conexion);
session_start();

@mysql_query("INSERT INTO comentarios (id_usuarios, id_tema, comentarios, megusta) 
	VALUES ('{$_SESSION['idusr']}','{$_SESSION['iddetemanue']}','{$_POST['txtcom']}', 0)",$conexion);

$my_error = @mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al insertar los valores. $my_error";

} else {

echo "Los datos han sido introducidos satisfactoriamente";
header("location:blog.php");
@mysqli_close($conexion);
}

} else {

echo "Error, no ha introducido todos los datos";

} 
?>
