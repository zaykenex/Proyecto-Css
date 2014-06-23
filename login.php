<!DOCTYPE html>
<html>
  <head><title>BLOG T.I.A 5&deg;</title></head>
</html>
 <?php
  $mensaje = " ";
  if (isset($_GET["error"])) {
  	$error =$_GET ["error"];
  	if ($error <> ""){

  		switch ($error) {
  			case '1':
  				$mensaje= "El usuario no existe.";
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
 <table border="0"> 
	<form action="validarlogin.php" method="post" name="login"><br>
		<tr><td><h2>Inicio de Sesion<h2></td></tr> 		
		<tr><td><?php echo $mensaje; ?></td><tr> 
		 <tr><td><label>Usuario<input name="txtusuario" type="text"  id="txtusuario" value="" ></td></tr>
		 <tr><td><label>Contrase&ntildea<input name="txtpass" type="password" id="password"  value=""></td></tr>
		 <tr><td><input type="submit" value="Iniciar Sesion">   </form> <a href='registro.php'><button>Registrarse</button></a><right> </td></tr>

 </table>
</body>
</html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5></html>
<html>