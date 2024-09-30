<form action="../scripts/actualizarPermisos.php" method=POST>
              <div class="mb-2 form-check">
                <!--<label for="txtEmail">Cuidador</label>class="form-control"-->
                <input type="txt"  name="txtEmail" id="txtEmail" value="<?= $_GET['cuidador']?>">
              </div>  

            
              <?php foreach ($animales as $animal) :?>
              <div class="checkbox"> 
                  
                    <label>
                      <input type="checkbox" name="animal<?php $animal[0]?>" ><?=$animal[1] ?>
                    </label>
                 </div>  
                 <?php endforeach ?>
              </div>  
              </div>
    
              <div class="mb-3 form-check">
              <button type="submit" class="btn btn-primary">CONFIRMA</button></div>
            </form>
         