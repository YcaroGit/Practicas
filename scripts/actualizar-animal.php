<?php
require 'funciones.php';

if (! haIniciadoSesion() || ! esSuper()) {
  header('Location: ../index.html');
}
conectar();

if (
  isset($_POST['txtId']) && isset($_POST['txtNombre'])
  && isset($_POST['txtFecha']) && isset($_POST['txtGenero'])
) {
  $id = $_POST['txtId'];
  $nombre = $_POST['txtNombre'];
  $fecha = $_POST['txtFecha'];
  $genero = $_POST['txtGenero'];
} else header('Location: ../index.html');


//$animales =getANIMALESPorid ();
editarAnimal($id, $nombre, $fecha, $genero);

// foreach ($animales as $animal){
//   if (isset($_POST['animal'.$animal[0]]))}

header('Location: ../Super/editarAnimales.php?id=' . $id);

desconectar();
