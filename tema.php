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
<html>
<body>
 <table border="0" ALIGN=center> 
	<form action="validartema.php" method="post" name="tema"><br>
		<tr><td><h2>Tema Nuevo<h2></td></tr> 		 
		 <tr><td><?php
          echo "<i>Usuario " .$_SESSION["usuario"]."</i>";
          ?></td></tr>
         <tr><td><label>Tema:<input class="form-control" name="txttema" type="text"  id="txttema" value="" ></td></tr>
		 <tr><td>Contenido:</td></tr>
		 <tr class="text-center"><td><textarea  class="form-control" rows="3" name="txtconte" id="txtconte"></textarea></td></tr>
		 <tr class="text-center"><td><input type="submit" class="btn btn-success" value="Agregar"></form><a href='blog.php'><button class="btn btn-danger">Cancelar</button></a></td></tr>
	
 </table>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 6&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>
