<!DOCTYPE html>
<html>
  <head><title>BLOG T.I.A 5&deg;</title>
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
  $mensaje = " ";
  if (isset($_GET["error"])) {
  	$error =$_GET ["error"];
  	if ($error <> ""){

  		switch ($error) {
  			case '1':
  				$mensaje = "El usuario no existe.";
  				break;
  			case '2':
  				$mensaje= "Contrase&ntildea Erronea.";
  				break;	
  			case '3':
  				$mensaje= "Debe identificarse para poder entrar al sistema.";
  				break;	
  			case '4':
  				$mensaje= "Felicitasiones su registro se ha hecho con exito.";
  				break;	
  				
  		}
  	}
  } else {
  	$error ="";
  }
 ?>

<doctype html>
<html>
	<head>
<title>Inicio de sesion</title>
	</head>
<body>
 <table border="0" ALIGN=center> 
	<form action="validarlogin.php" method="post" name="login"><br>
		<tr><td><h2>Inicio de Sesion<h2></td></tr> 		
		<tr><td><?php echo $mensaje; ?></td><tr> 
		 <tr><td><label>Usuario<input name="txtusuario" class="form-control" type="text"  id="txtusuario" value="" ></td></tr>
		 <tr><td><label>Contrase&ntildea<input name="txtpass" class="form-control" type="password" id="password"  value=""></td></tr>
		 <tr><td class="text-center"><input type="submit" class="btn btn-success" value="Iniciar Sesion">   </form> <a href='registro.php'><button class="btn btn-success">Registrarse</button></a><right> </td></tr>

 </table>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5></html>
<html>