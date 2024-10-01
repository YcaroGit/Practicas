<?php
            require 'funciones.php';

            if (! haIniciadoSesion() || ! esSuper() )
    {
             header('Location: index.html');
    }

             if (isset($_POST['txtId'])) 
                 $animales = $_POST['txtId'];
                 else 
                 header('Location: index.html');
            
            conectar();
            
            $animales = getANIMALESPorid ();
            ?>
    <?php include '../Super/cuerpo.php';  ?>
    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   
    <!-- <?php include '../Super/menu-izq.php';  ?> -->
 <?php include '../Super/menu-superior.php';  ?>
 <a href ="animales.php"?>
<button type="button" class="btn btn-sm btn-outline-secondary"  >ATRAS</button></a>
 <h1>Estamos con el Animal  </h1>
    <h2>Que vas a cambiar :  </h2>
  <div class="row">
     <div class="col-sm-6 col-sm-offset-3">
     <div class="panel panel-default">
      <!--<div class="panel-heading"><h3 class="panel-title">Permisos</h3></div> -->
      <div class="panel-body">



      <!-- <form action="../Super/editarAnimales.php" method="POST"> -->

              <div class="form-group">
                <label for="txtId">Id Animal</label>
                <input type="number" class="form-control" id="txtId" value="<?= $animales[0]?>">
              </div>  
                     
<?php foreach ($animales as $animal): ?>
              <label>
                      <input type="checkbox" name="animal<?= $animal[0] ?>" > <?=$animal[1] ?>
                    </label>
                 </div> 
<?php endforeach 
  //desconectar();
  ?>
 
              </div>  
              </div>
    
              <div class="mb-3 form-check">
              <button type="submit" class="btn btn-primary">cambiar</button></div>
            </form>

        <!--?php include '../scripts/form.php';?>-->
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
