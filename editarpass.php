      <?php
        session_start();
        if (isset($_SESSION["nombre"])) {
          echo "<h1></h1>";

include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$database = @mysql_select_db('proyecto', $conexion) or die(mysql_error());
$idus = $_GET["idcusu"];
$_SESSION["idepass"] = $_GET["idcusu"];
$sql      = "select usuarios.* from usuarios where usuarios.id=$idus";
$usuarios    = @mysql_query($sql, $conexion);

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
<html>
<body>
 <table border="0"> 
	<form action="validarepass.php" method="post" name="comen"><br>
		<tr><td><h2>Cambiar Password<h2></td></tr> 		 
		 <tr><td><?php
     while($usuario = @mysql_fetch_array($usuarios)){
          echo "<i>Usuario " .$usuario['nombre']."</i>";
        }
          ?></td></tr>
		 <tr><td><input name="etxtpass" type="password" id="etxtpass"  value=""></td></tr>
		 <tr><td><input type="submit" value="Cambiar"></form> <a href='controlusuario.php'><button>Cancelar</button></a></td></tr>

	
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
