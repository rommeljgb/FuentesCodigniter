<style>
    html, body{height:100%; margin:0;padding:0;font-size: 20px;}
 
.container-fluid{
  height:100%;
  display:table;
  width: 100%;
  padding: 0;
}
 
.row-fluid {height: 100%; display:table-cell; vertical-align: middle;}
 
 

.centering {
  float:none;
  margin:0 auto;
}
</style>

<form id="frmconfirm" name="frmconfirm" action="<?php echo  base_url('usuario/login_url')?>" method="post">
  <div class="container-fluid">
    <div class="row-fluid">
        <div class="centering text-center">
           <?php 
   if ($Id>0){
    ?>
    <tabla>
        <tr><td><u><b>Sus datos a Confirmar</b></u></td></tr><br><br>
    <tr><td>Nombre:&nbsp;</td><td><?php echo $nombres;?></td></tr><br>
    <tr><td>Emails:&nbsp;</td><td><?php echo $email;?><input type="hidden" name="idPer" id="idPer" size="5" value="<?php echo $Id;?>"></td></tr><br><br>
        <tr>
            <td>              
                <button type="submit" class="btn btn-primary" >Aceptar</button>
            </td>
        </tr>
    </tabla>
    <?php 
   }
    ?>
        </div>
    </div>
</div>
</form>