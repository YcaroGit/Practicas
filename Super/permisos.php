<?php
require '../scripts/funciones.php';

if (! haIniciadoSesion() || ! esSuper() )
{
  header('Location: index.html');
}
//conectar();

  if(isset($_GET['cuidador']))
   $cuidador = $_GET['cuidador'];
  else  header('Location: index.html');

  conectar();
  $cuidador = getnombrecuidador ();
  $gettodosANIMALES = gettodosANIMALES ()
  //$cuidador = getCuidador();
  //$cuidador = getCuidador2();
  
//$_GET['cuidador'] = getnombrecuidador();

  //desconectar()
?>
<?php include 'cuerpo.php';  ?>
<?php include 'menu-izq.php';  ?>
<?php include 'menu-superior.php';  ?>
<?php include 'editarPermisos.php';  ?>
    