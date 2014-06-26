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
session_start();
if($_SESSION['tipo']==1){

include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$database = @mysql_select_db('proyecto', $conexion) or die(mysql_error());
$sql      = "select usuarios.* from usuarios where usuarios.id";
$usuarios    = @mysql_query($sql, $conexion);


?>
<!doctype html>
<html>  
	<body> 
	  <center>
		<center>
          <h1>Panel de contol de usuarios</h1>
        </center>
		<TABLE BORDER="0" CELLSPACING="18" WIDTH="150">  
          <?php
          		echo"<tr>";
            		 echo "<td><b><center>Nombre</center></b></td>";
            		 echo "<td><b><center>Usuario</center></b></td>";
            		 echo "<td><b><center> </center></b></td>";
            		 echo "<td><b><center> </center></b></td>";
                 echo "<td><b><center> </center></b></td>";
            		 echo "<td><b><center>Tipo</center></b></td>";
            	echo"</tr>";
    while($usuario = @mysql_fetch_array($usuarios)){
              echo"<tr>";
          	    echo "<td><i><center>".$usuario['nombre']."</center></i></td>";
             	  echo "<td><i><center>".$usuario['usuario']."</center></i></td>";
              	echo "<td><a href='validarcontrolusuario.php?tipo=1&idcusu=".$usuario['id']."'><button>Administrador</button></a></td>";
                echo "<td><a href='validarcontrolusuario.php?tipo=2&idcusu=".$usuario['id']."'><button>Editor</button></a></td>";
                echo "<td><a href='validarcontrolusuario.php?tipo=3&idcusu=".$usuario['id']."'><button>Usuario</button></a></td>";
             	  echo "<td><b><center>".$usuario['tipo']."</center></b></td>";
                echo "<td><a href='validarcontrolusuario.php?bidusr=".$usuario['id']."'><button>Borrar</button></a></td>";
                echo "<td><a href='editarpass.php?idcusu=".$usuario['id']."'><button>Cambiar password</button></a></td>";
	   		      echo"</tr>";
	   	    }
          
	   	  
	   	  ?>	
		</center>
		</table>
    <TABLE BORDER="0" CELLSPACING="18" WIDTH="500">
     <tr>
      <td><a href='blog.php'><button>Cerrar</button></a></td>
      <td><a href='registro.php'><button>Agregar Usuario</button></a></td>
     </tr>
    </table>
	  </center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>s
	</body>
</html>
<?php
}else{
header("location:blog.php");
}
?>
<html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>
