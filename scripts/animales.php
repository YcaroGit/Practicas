<?php
require 'funciones.php';

if (! haIniciadoSesion() || ! esSuper() )
{
  header('Location: index.html');
}
conectar();

  // if(isset($_GET['animales']))
  // $animal = $_GET['animales'];
  // else  header('Location: index.html');

  //$animal = getANIMAL()
  //$cuidador = getnombrecuidador ();
 $animales = gettodosANIMALES ()
 //$animal = getANIMALESPorid ()
  //$cuidador = getCuidador();
  //$cuidador = getCuidador2();}
  
//$_GET['cuidador'] = getnombrecuidador();

  //desconectar()
?>
<?php include '../super/cuerpo.php';  ?>
<link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> 
<!-- <?php include '../super/menu-izq.php';  ?> -->
<?php include '../super/menu-superior.php';  ?>

<a href ="../Admin.php"?>
<button type="button" class="btn btn-sm btn-outline-secondary"  >ATRAS</button></a>


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
          foreach ($animales as $animal ):  ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $animal[1] ?></td>
              <td><a href ="animales.php?animal=<?= $animal [0] ?>"><a href ="../super/editarAnimales.php?animal=<?= $animal [1] ?>">editar animal</a></a></td>
              
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

  