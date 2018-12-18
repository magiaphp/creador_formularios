<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><?php echo  $campos_label; ?></label>
    <div class="col-sm-10">
        
        
        <?php 
        echo var_dump(opciones_segun_campo("contacto, saludo","contactos"))
        ?>
        <select class="form-control" name="" id="" <?php echo $desactivado; ?>>
            
            
            <?php 
           // foreach (opciones_segun_campo($campos_campo) as $key => $value) {
            foreach (opciones_segun_campo("contacto, saludo","contactos") as $value) {
                echo "<option value=\"$campos_valor\">$value[saludo] $value[contacto] - </option>"; 
            }
            
            
            ?>
            
            
          
        </select>
    </div>
  </div>