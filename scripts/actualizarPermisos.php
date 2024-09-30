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
            //echo "se eliminan permisos cuidador";
            //var_dump($cuidador);
            $animal = getANIMAL();
            //$animales = gettodosANIMALES();
            //var_dump($animales);

            foreach ($animal as $animal):
                if (isset($_POST['animal'.$animal[0]]))
                    echo "--se ha marcado el animal con id: ".$animal[0];
                    //asignarPermisos ($cuidador, $animal[0]);
                    echo "---asigna categoria";
            endforeach;
           var_dump($animal[0]);

           //header('Location: ../Super/editarPermisos.php');
        //  if (isset($_POST['email'])) {
        //   $email = $_POST['email'];
         // } else {
        //   echo "El campo 'email' no ha sido enviado.";
         //    exit; } // PARA PODER VER Y SEGUIR 
                      
           
            // ($cuidador);
            //var_dump($cuidador);

            //$animales = $_POST['animales'];
            //echo "Se ha marcado el animal ".$animales;
            //foreach ($animales as $animal): 
               // if (isset($_POST[$animal])) {
               //     echo "Se ha marcado el animal con id: ".$animal[0];
              //  }
            
            //endforeach;
            desconectar();
    ?>
