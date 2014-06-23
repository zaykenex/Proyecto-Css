      <?php
        session_start();
        if (isset($_SESSION["nombre"])) {
          echo "<h1></h1>";

        }
        else
        {
          header("location:login.php");
        }
      ?>
<!DOCTYPE html>
<html>
  <head><title>BLOG T.I.A 5&deg;</title></head>
</html>
<?php
	include_once("settings/settings.inc.php");
	
	$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
	$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
	

	// si hay session
	if (isset($_SESSION["usuario"])) {
		$usuario = $_SESSION["usuario"];
	}
	else
	{
		header("location:login.php");
	}	
	if (isset($_GET['id_tema'])) {
		$id_tema = $_GET['id_tema'];
		$_SESSION["iddetema"] = $_GET['id_tema'];
		$sql      = "select temas.* from temas where temas.id = $id_tema";
		$temas    = @mysql_query($sql, $conexion);

		$tema = @mysql_fetch_array($temas);
	}
	else {
		$id_tema = 0;
	}

?>

<doctype html>
<html>
<body>
 <table border="0"> 
	<form action="validareditartema.php" method="post" name="editartema"><br>
		<tr><td><h2>Editar Tema<h2></td></tr> 		 
		 <tr><td><i>Usuario <?php echo"$usuario"; ?></i></td></tr>
         <tr><td>
         	<input type="hidden" value="<?php echo $id_tema; ?>" name="idtema">
         	<label>Tema:<input name="temaaeditar" type="text"  id="temaaeditar" value="<?php echo $tema['titulo']; ?>"></td></tr>
		 <tr><td>Contenido:</td></tr>
		 <tr><td><textarea rows="10" cols="100" name="conteaeditar" id="conteaeditar"><?php echo $tema['contenido']; ?></textarea></td></tr>
		 <tr><td><input type="submit" value="Editar">	</form> <a href='blog.php'><button>Cancelar</button></a></td></tr>

 </table>
</body>
</html>
<html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>
