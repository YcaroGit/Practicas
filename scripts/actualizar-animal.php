<?php
            require 'funciones.php';

            if (! haIniciadoSesion() || ! esSuper() )
    {
             header('Location: ../index.html');
    }

             if (isset($_POST['txtId']) && isset($_POST['txtNombre'])
              && isset($_POST['txtFecha']) && isset($_POST['txtGenero']) ) 
            {
              $id = $_POST['txtId'];
              $nombre = $_POST['txtNombre'];
              $fecha = $_POST['txtFecha'];
              $genero = $_POST['txtGenero'];
            }
                else header('Location: ../index.html');
            
            conectar();
            
            editarAnimal ($id, $nombre, $fecha, $genero);


            header('Location: ../Super/editarAnimales.php?id='.$id);

            desconectar();
?>
