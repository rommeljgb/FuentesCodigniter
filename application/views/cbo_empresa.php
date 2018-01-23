<select name="select_empresa" id="select_empresa" required="required"  >
    <option></option>
    <option value="">Ninguna</option>
    <?php
       foreach ($rows as $row){    
    ?>
    <option value="<?php echo $row->id_empresa;?>"><?php echo $row->razon_social;?></option>
    <?php 
       }
    ?>
</select>