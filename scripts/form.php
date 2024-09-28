<form action="../scripts/actualizarPermisos.php" method=POST>
              <div class="mb-2 form-check">
                <!--<label for="txtEmail">Cuidador</label>class="form-control"-->
                <input type="name"  name="txtEmail" id="txtEmail" value="<?= $_GET['cuidador']?>">
              </div>  

            
              <?php foreach ($gettodosANIMALES as $gettodosANIMALES) :?>
              <div class="checkbox"> 
                  
                    <label>
                      <input type="checkbox" name="animales[]<?php $gettodosANIMALES[0]?>" ><?=$gettodosANIMALES[1] ?>
                    </label>
                 </div>  
                 <?php endforeach ?>
              </div>  
              </div>
    
              <div class="mb-3 form-check">
              <button type="submit" class="btn btn-primary">CONFIRMA</button></div>
            </form>
         