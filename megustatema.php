v      <?php
        session_start();
        if (isset($_SESSION["nombre"])) {
          echo "<h1></h1>";

        }
        else
        {
          header("location:login.php");
        }
      ?>
<?php

include_once("settings/settings.inc.php");

$conexion= mysql_connect (SQL_HOST,SQL_USER,SQL_PWD) or die(mysql_error());
$database = mysql_select_db('proyecto', $conexion) or die(mysql_error());
$iddetema = $_GET['iddecoment'];
$sql1  = "select temas.megusta, temas.id FROM temas WHERE  id='".$iddetema."'";
$temas = @mysql_query($sql1, $conexion);
while($tema = @mysql_fetch_array($temas)){

mysql_query("UPDATE temas SET megusta=megusta+1 where  id='".$iddetema."'",$conexion);
}

$my_error = mysql_error($conexion);

if(!empty($my_error)) {

echo "Ha habido un error al insertar los valores. $my_error";

} else {

echo "Los datos han sido introducidos satisfactoriamente";
header("location:blog.php");
mysqli_close($conexion);

}
?>
