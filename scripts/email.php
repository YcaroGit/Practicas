<form action="../Super/actualizarPermisos.php" method=POST>
              <div class="mb-2 form-check">
                <!--<label for="txtEmail">Cuidador</label>class="form-control"-->
                <input type="name"  name="txtEmail" id="txtEmail" value="<?= $_GET['email']?>">
              </div>  

            
              <?php foreach ($email as $email) :?>
              <div class="checkbox"> 
                  
                    <label>
                      <input type="checkbox" name="email<?php $email[0]?>" ><?=$email[1] ?>
                    </label>
                 </div>  
                 <?php endforeach ?>
              </div>  
              </div>
    
              <div class="mb-3 form-check">
              <button type="submit" class="btn btn-primary">CONFIRMA</button></div>
            </form>