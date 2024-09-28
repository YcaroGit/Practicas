<?php
require 'scripts/funciones.php';

if (! haIniciadoSesion() || ! esSuper() )
{
  header('Location: index.html');
}


conectar();

$cuidador = getCuidador();
 // $HABITATS = gettodosHABITATS(); 

desconectar();
?>
<?php include 'Super/cuerpo.php';  ?>
<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<?php include 'Super/menu-izq.php';  ?>
       

<?php include 'Super/menu-superior.php';  ?>
          

      <h2>Seleccion</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col"># ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Edicion</th>
              
            </tr>
          </thead>
          <tbody>
          <?php 
          $i =1;
          foreach ($cuidador as $cuidador ):  ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $cuidador [0] ?></td>
              <td><a href ="Super/permisos.php?cuidador=<?= $cuidador [0] ?>"><a href ="Super/editarPermisos.php?cuidador=<?= $cuidador [0] ?>">Editar Permisos</a></a></td>
           </tr>
           <?php endforeach ?>

            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"> -->

    </script><script src="js/dashboard.js"></script></body>
</html>
