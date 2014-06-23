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
	<form action="validartema.php" method="post" name="tema"><br>
		<tr><td><h2>Tema Nuevo<h2></td></tr> 		 
		 <tr><td><?php
          echo "<i>Usuario " .$_SESSION["usuario"]."</i>";
          ?></td></tr>
         <tr><td><label>Tema:<input name="txttema" type="text"  id="txttema" value="" ></td></tr>
		 <tr><td>Contenido:</td></tr>
		 <tr><td><textarea name="txtconte" id="txtconte"></textarea></td></tr>
		 <tr><td><input type="submit" value="Agregar"></form><a href='blog.php'><button>Cancelar</button></a></td></tr>
	
 </table>
</body>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>
