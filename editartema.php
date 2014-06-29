<link href='icono.ico' rel='shortcut icon' type='image/x-icon'/>
<link href='icono.ico' rel='icon' type='image/x-icon'/>
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
  <head><title>BLOG T.I.A 6&deg;</title>
  	 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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
 <table border="0" ALIGN=Center> 
	<form action="validareditartema.php" method="post" name="editartema"><br>
		<tr><td><h2>Editar Tema<h2></td></tr> 		 
		 <tr><td><i>Usuario <?php echo"$usuario"; ?></i></td></tr>
         <tr><td>
         	<input type="hidden" value="<?php echo $id_tema; ?>" name="idtema">
         	<label>Tema:<input class="form-control" name="temaaeditar" type="text"  id="temaaeditar" value="<?php echo $tema['titulo']; ?>"></td></tr>
		 <tr><td>Contenido:</td></tr>
		 <tr><td><textarea class="form-control" rows="10" cols="50" name="conteaeditar" id="conteaeditar"><?php echo $tema['contenido']; ?></textarea></td></tr>
		 <tr><td ALIGN=Center><input class="btn btn-success" type="submit" value="Editar">	</form> <a href='blog.php'><button class="btn btn-danger">Cancelar</button></a></td></tr>

 </table>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 6&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>
