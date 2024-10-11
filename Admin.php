<?php
require 'scripts/funciones.php';

if (! haIniciadoSesion() || ! esSuper()) {
  header('Location: index.html');
}


conectar();

$cuidador = getCuidador();
// $HABITATS = gettodosHABITATS(); 

desconectar();
?>
<?php include 'Super/cuerpo.php';  ?>
<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php include 'Super/menu-izq.php';  ?>


<?php include 'Super/menu-superior.php';  ?>



<!-- <form date="Fecha" method="POST">
  <label for="Fech">feca</label><input type="text" name="fecha" id="fech">

  <div class="d-flex gap-2 justify-content-center py-5">
    <button type="button" id="enviar">
      Fecha de hoy
      <svg class="bi ms-1" width="20" height="20">
        <use xlink:href="#arrow-right-short" />
      </svg>
    </button>
</form>


<div date="resultado">


</div> -->
<!-- <script>
  $("·enviar").click(function() {
    $.ajax({
      url: "datos.php",
      type: "POST",
      data: $("#Fecha").serialize(),
      success: function(resultado) {
        $("#resultado").html(resultado);
      }

    })
  });
</script> -->


<!-- 
<div class="panel-body" type="Text">
  meter fecha
  <svg class="bi ms-3" width="20" height="20">
    <use xlink:href="#arrow-right-short" />
  </svg>
</div> -->
<!-- </div> -->



<h1 class="h1">SELECCIONA ANIMALES O PERSONAS.</h1>
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
      $i = 1;
      foreach ($cuidador as $cuidador):  ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $cuidador[0] ?></td>
          <td><a href="Super/permisos.php?cuidador=<?= $cuidador[0] ?>"><a href="Super/editarPermisos.php?cuidador=<?= $cuidador[0] ?>">Editar Permisos</a></a></td>
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

</script>
<script src="js/dashboard.js"></script>
</body>

</html>