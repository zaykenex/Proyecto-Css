<!DOCTYPE html>
<html>
  <head><title>BLOG T.I.A 5&deg;</title></head>
    <center>
      <?php
        session_start();
        if (isset($_SESSION["nombre"])) {


          echo "<h1>Bienvenido " .$_SESSION["nombre"]."</h1>";
          echo"</center>";
          echo"<DIV ALIGN=right><a href='cerrar.php'><button ALIGN=right>Cerrar sesion</button></a></div>";
          if($_SESSION['tipo']==1){echo"<DIV ALIGN=right><a href='controlusuario.php'><button>Usuarios</button></a></div>";} 

        }
        else
        {
          echo "<h1>Bienvenido Invitado</h1>";
          echo"<DIV ALIGN=right><a href='login.php'><button ALIGN=right>Login</button></a> <a href='registro.php'><button ALIGN=right>Registrarse</button></a></div>";
          $_SESSION['tipo']=0;
        }
      ?> 

</html>

<?php
include_once("settings/settings.inc.php"); 

$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
$sql      = "select temas.*, usuarios.nombre from temas, usuarios where temas.id_usuario = usuarios.id ORDER BY temas.id DESC";
$temas    = @mysql_query($sql, $conexion);




if($_SESSION['tipo']==1){

 echo"<DIV ALIGN=left><a href='tema.php'><button>Nuevo Tema</button></a></div>";
echo "<table border='0' align=center width='80%'>";


while($tema = @mysql_fetch_array($temas))
  
{
  $itema=$tema['id'];
$sql1  = "select comentarios.*, usuarios.nombre from comentarios, temas, usuarios where comentarios.id_usuarios = usuarios.id and comentarios.id_tema = temas.id and comentarios.id_tema=$itema ORDER BY comentarios.id DESC";
$comentario = @mysql_query($sql1, $conexion);
$sqltipo = "select usuarios.tipo from usuarios";
  
    echo "<tr>";
      echo"<td  colspan = '2'><h2 align='center'><i><b>".$tema['titulo']."</b></i></h2></td>";
      echo"<td align='right'><a href='megustatema.php?iddecoment=".$tema['id']."'><button>Me Gusta</button></a> ".$tema['megusta']." <a href='editartema.php?id_tema=".$tema['id']."'><button>Editar</button></a> <a href='validareliminartema.php?idelimitema=".$tema['id']."'><button>Borrar</button></a></td>";
    echo "</tr>";
 

    echo "<tr>";
      echo "<td colspan = '2'>".$tema['fecha_pub']." - ". $tema['nombre']."</td>";
    echo "</tr>";
             
    echo "<tr>";
      echo "<td colspan = '5'><h4>".$tema['contenido']."</h4></td>";
    echo "</tr>";


    echo"<tr>";
      echo"<td colspan = '5'><a href='comentar.php?idtemacoment=".$tema['id']."'><button>Comentar</button></a></td>";
    echo"</tr>";


         while($comentarios = @mysql_fetch_array($comentario))
        {

         echo"<tr>";
          echo"<td colspan = '3'><i><b>" . $comentarios['comentarios'] . "</b></i> - " . $comentarios['fecha_pub']." - " . $comentarios['nombre']."</td>";
         echo"</tr>";


        echo"<tr><DIV ALIGN=center>";  
          echo"<td><a href='editarcomentario.php?id_com=".$comentarios['id']."'><button>Editar</button></a> <a href='validareliminarcomen.php?idelimcom=".$comentarios['id']."'><button>Borrar</button></a> <a href='megusta.php?iddecoment=".$comentarios['id']."'><button>Me Gusta</button></a><i><b> ".$comentarios['megusta']."</b></i></td>";
        echo"</tr></div>";

        }
}
echo "</table>";
}
#editor
if($_SESSION['tipo']==2){

echo "<table border='0' align=center width='80%'>";


while($tema = @mysql_fetch_array($temas))
  
{
  $itema=$tema['id'];
$sql1  = "select comentarios.*, usuarios.nombre from comentarios, temas, usuarios where comentarios.id_usuarios = usuarios.id and comentarios.id_tema = temas.id and comentarios.id_tema=$itema ORDER BY comentarios.id DESC";
$comentario = @mysql_query($sql1, $conexion);
$sqltipo = "select usuarios.tipo from usuarios";
  
    echo "<tr>";
      echo"<td  colspan = '2'><h2 align='center'>".$tema['titulo']."</h2></td>";
      echo"<td align='right'><a href='megustatema.php?iddecoment=".$tema['id']."'><button>Me Gusta</button></a><i><b> ".$tema['megusta']."</i></b>  <a href='editartema.php?id_tema=".$tema['id']."'><button>Editar</button></a> <a href='validareliminartema.php?idelimitema=".$tema['id']."'><button>Borrar</button></a></td>";
    echo "</tr>";
 

    echo "<tr>";
      echo "<td colspan = '2'>".$tema['fecha_pub']." - ". $tema['nombre']."</td>";
    echo "</tr>";
             
    echo "<tr>";
      echo "<td colspan = '5'><h4>".$tema['contenido']."</h4></td>";
    echo "</tr>";


    echo"<tr>";
      echo"<td colspan = '5'><a href='comentar.php?idtemacoment=".$tema['id']."'><button>Comentar</button></a></td>";
    echo"</tr>";


         while($comentarios = @mysql_fetch_array($comentario))
        {

         echo"<tr>";
          echo"<td colspan = '3'><i><b>" . $comentarios['comentarios'] . "</b></i> - " . $comentarios['fecha_pub']." - " . $comentarios['nombre']."</td>";
         echo"</tr>";


        echo"<tr><DIV ALIGN=center>";  
          echo"<td><a href='editarcomentario.php?id_com=".$comentarios['id']."'><button>Editar</button></a> <a href='validareliminarcomen.php?idelimcom=".$comentarios['id']."'><button>Borrar</button></a> <a href='megusta.php?iddecoment=".$comentarios['id']."'><button>Me Gusta</button></a><i><b> ".$comentarios['megusta']."</b></i></td>";
        echo"</tr></div>";

        }
}
echo "</table>";
}
#usuaro
if($_SESSION['tipo']==3){

echo "<table border='0' align=center width='80%'>";


while($tema = @mysql_fetch_array($temas))
  
{
  $itema=$tema['id'];
$sql1  = "select comentarios.*, usuarios.nombre from comentarios, temas, usuarios where comentarios.id_usuarios = usuarios.id and comentarios.id_tema = temas.id and comentarios.id_tema=$itema ORDER BY comentarios.id DESC";
$comentario = @mysql_query($sql1, $conexion);
$sqltipo = "select usuarios.tipo from usuarios";
  
    echo "<tr>";
      echo"<td  colspan = '2'><h2 align='center'>".$tema['titulo']."</h2></td>";
      echo"<td align='right'><a href='megustatema.php?iddecoment=".$tema['id']."'><button>Me Gusta</button></a> <i><b>".$tema['megusta']."</b></i></td>";
    echo "</tr>";
 

    echo "<tr>";
      echo "<td colspan = '2'>".$tema['fecha_pub']." - ". $tema['nombre']."</td>";
    echo "</tr>";
             
    echo "<tr>";
      echo "<td colspan = '5'><h4>".$tema['contenido']."</h4></td>";
    echo "</tr>";


    echo"<tr>";
      echo"<td colspan = '5'><a href='comentar.php?idtemacoment=".$tema['id']."'><button>Comentar</button></a></td>";
    echo"</tr>";


         while($comentarios = @mysql_fetch_array($comentario))
        {

         echo"<tr>";
          echo"<td colspan = '3'><i><b>" . $comentarios['comentarios'] . "</b></i> - " . $comentarios['fecha_pub']." - " . $comentarios['nombre']."</td>";
         echo"</tr>";
if($_SESSION['nombre']== $comentarios['nombre']) {

        echo"<tr><DIV ALIGN=center>";  
          echo"<td><a href='validareliminarcomen.php?idelimcom=".$comentarios['id']."'><button>Borrar</button></a> <a href='megusta.php?iddecoment=".$comentarios['id']."'><button>Me Gusta</button></a><i><b> ".$comentarios['megusta']."</b></i></td>";
        echo"</tr></div>";
      }
      else
      {
      echo"<tr><DIV ALIGN=center>";  
        echo"<td><a href='megusta.php?iddecoment=".$comentarios['id']."'><button>Me Gusta</button></a> ".$comentarios['megusta']."</td>";
      echo"</tr></div>"; 
      }

        }
}
echo "</table>";
}
#initado
if($_SESSION['tipo']==0){


echo "<table border='0' align=center width='80%'>";


while($tema = @mysql_fetch_array($temas))
  
{
  $itema=$tema['id'];
$sql1  = "select comentarios.*, usuarios.nombre from comentarios, temas, usuarios where comentarios.id_usuarios = usuarios.id and comentarios.id_tema = temas.id and comentarios.id_tema=$itema ORDER BY comentarios.id DESC";
$comentario = @mysql_query($sql1, $conexion);
$sqltipo = "select usuarios.tipo from usuarios";
  
    echo "<tr>";
      echo"<td  colspan = '2'><h2 align='center'>".$tema['titulo']."</h2></td>";
    echo "</tr>";
 

    echo "<tr>";
      echo "<td colspan = '2'>".$tema['fecha_pub']." - ". $tema['nombre']."</td>";
    echo "</tr>";
             
    echo "<tr>";
      echo "<td colspan = '5'><h4>".$tema['contenido']."</h4></td>";
    echo "</tr>";


         while($comentarios = @mysql_fetch_array($comentario))
        {

         echo"<tr>";
          echo"<td colspan = '3'><i><b>" . $comentarios['comentarios'] . "</b></i> - " . $comentarios['fecha_pub']." - " . $comentarios['nombre']."</td>";
         echo"</tr>";
        } 

        
}
}
echo "</table>";

@mysql_close($conexion);
?>
<html>
<h5 ALIGN=right><i> Joaquin Cueto y Angel Landero T.I.A 5&deg;, Derechos Reservados&reg; Copyright all rights reserved&copy;</i></h5>
</html>