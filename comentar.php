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
<html>
<body>
 <table border="0"> 
	<form action="validarcomentario.php" method="post" name="comen"><br>
		<tr><td><h2>Comentario<h2></td></tr> 		 
		 <tr><td><?php
          echo "<i>Usuario " .$_SESSION["usuario"]."</i>";
          ?></td></tr>
		 <tr><td><textarea name="txtcom" id="txtcom"></textarea></td></tr>
		 <tr><td><input type="submit" value="Comentar"></form> <a href='blog.php'><button>Cancelar</button></a></td></tr>

	
 </table>
  <?php
  $_SESSION["iddetemanue"] = $_GET['idtemacoment']
  ?>
</body>
</html>
<html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>
