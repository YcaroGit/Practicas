    <?php
            require 'funciones.php';

            if (! haIniciadoSesion() || ! esSuper() )
    {
             header('Location: index.html');
    }

            if (isset($_POST['txtEmail'])) 
                $cuidador = $_POST['txtEmail'];
            else 
                header('Location: index.html');
            
            conectar();
            
            
            eliminarPermisos($cuidador);
            //eliminarPermisosTODOS($cuidador);//Borrar al conseguirlo.////////////////////duplicidad por numero de animales.
            //echo "se eliminan permisos cuidador";
            //var_dump($cuidador);
           
            //$animales =getANIMALPORID ($animal)
            $animales = gettodosANIMALES();
            tienePermiso ($cuidador, $animal);
            //$animales = getANIMALES();
            //$animales = getANIMAL();
            //$animales =getANIMALESPorUser ();
            //var_dump($animales);
            foreach ($animales as $animal){
                if (isset($_POST['animal'.$animal[0]])){
                    //echo "--se ha marcado el animal con id: ".$animal[0];//nos indica el numero o nombre
                    asignarPermisos ($cuidador, $animal[0]);
                   //echo "---asigna categoria";
                }
            }
            //endforeach;
          // var_dump($animal[0]);

           header('Location: ../Super/editarPermisos.php');
      
            desconectar();
    ?>
