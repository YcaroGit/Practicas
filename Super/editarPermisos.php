<?php
require '../scripts/funciones.php';

if (! haIniciadoSesion() || ! esSuper() )
{
  header('Location: index.html');
  
}

if(isset($_GET['cuidador']))
$cuidador = $_GET['cuidador'];
else { header('Location: ../Admin.php');

}


conectar();
$gettodosANIMALES = gettodosANIMALES();
//$gettodosANIMALES = gettodosANIMALES ();
//$cuidador = getCuidador();

desconectar();
?>
    <?php include 'cuerpo.php';  ?>
    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   
    <?php include 'menu-izq.php';  ?>
 <?php include 'menu-superior.php';  ?>
<!--   <?= $cuidador?>  -->
 <h1>Bienvenido  </h1>
    <h2>Vas a EDITAR los permisos de :  </h2>
  <div class="row">
     <div class="col-sm-6 col-sm-offset-3">
     <div class="panel panel-default">
      <!--<div class="panel-heading"><h3 class="panel-title">Permisos</h3></div> -->
      <div class="panel-body">
        <?php include '../scripts/form.php';?>
        <!--?php include '../scripts/email.php';?-->

      </div>
      </div>
      </div>
    
    
    </div>
    </div>
    </div>
  </div>

     <!--<?php foreach ($cuidador as $fila):?>-->
        <!--<td><?php echo $fila [0] ?></td>-->
        <!-- <h2><a href="CUIDADORES/<?=  $fila[0] ?>"<?=  $fila[5] ?></a></h2>-->
        
      <!--<p class="col-md-8 fs-4"> <?php echo  $fila [0]?></p>-->
      <!-- <?php  endforeach ?>-->

     
      <!--<p>Modificacion de permisos para: <?= $cuidador [0] ?></p>-->
      
      <!--<?php foreach ($cuidador as $cuidador ):?>-->
        
      <!--<?php endforeach ?>-->

    </main>
  </div>
</div>
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"> 

    </script><script src="js/dashboard.js"></script></body>
</html>