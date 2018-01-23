<style>
  .DivFrmCol1{
	  float:left;
	  position:relative;
	  /*border:1px solid #039;*/
	  width:85%;
   }
 .DivFrmCol2{
		margin-left:auto;
		
		/*border:1px solid #063;*/
		width:14%;		
		position:relative
}
.DivBack{
	    margin-left:70px;
		margin-right:10px;
		margin-top:10px;		
		position:relative;
		width:65px;
		height:65px;
	}
</style>
<?php 
foreach($RowRue as $Rueda){
   $idRueda = $Rueda->id_rueda_negocio; 	
   $RazonSoc = $Rueda->razon_social;
   $NomEven = $Rueda->nombre_evento;
}

if ($RowPago <> false){
	$codigo_operacion = $RowPago->codigo_operacion;
	$monto = $RowPago->monto;
    $comentario = $RowPago->comentario;
}
?>
<div>
<div class="DivFrmCol1">
<form method="post" id="frmpago" name="frmpago">
<table width="511" border="0">
  <tr>
    <td colspan="3" style="color:#009"><strong>Pago de Eventos</strong></td>
  </tr>
  <tr>
    <td colspan="3"><strong>Dato del Cliente</strong></td>
  </tr>
  <tr>
    <td width="153">Empresa:</td>
    <td width="279"><label for="razon_social"></label>
    <input readonly="readonly" name="razon_social" id="razon_social"  value="<?php echo $RazonSoc;?>" /><input type="text" name="id_rueda_negocio" id="id_rueda_negocio" style="width:20px;" value="<?php echo $idRueda;?>"></td>
    <td width="57">&nbsp;</td>
  </tr>
  <tr>
    <td>Evento:</td>
    <td><label for="nombre_evento"></label>
    <input readonly="readonly" name="nombre_evento" id="nombre_evento" value="<?php echo $NomEven;?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>Datos del Pago</strong></td>
  </tr>
  <tr>
    <td>Motivo Pago:</td>
    <td><label for="id_motivo_pago"></label>
      <select name="id_motivo_pago" id="id_motivo_pago" disabled>
      <?php 
	   
	  	foreach($RowMot as $Row){
		$sel = "";
		if ($Row->id_motivo_pago==1){
			$sel = "selected";
	    }	
	   ?>
      <option <?php echo $sel;?> value="<?php echo $Row->id_motivo_pago;?>"><?php echo $Row->nombre_pago;?></option>
      <?php 
	  	}
	  ?>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Código de Operación</td>
    <td><label for="codigo_operacion"></label>
    <input type="text" name="codigo_operacion" id="codigo_operacion" value="<?php if (isset($codigo_operacion)){ echo $codigo_operacion;};?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Monto:</td>
    <td><label for="monto"></label>
    <input type="text" name="monto" id="monto" style="width:85px;" value="<?php if (isset($monto)){ echo $monto;};?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Comentario</td>
    <td><label for="comentario"></label>
    <textarea name="comentario" id="comentario" cols="10" rows="2"><?php if (isset($comentario)){ echo $comentario;};?></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="text-align:center">
    <button type="button" class="btn btn-primary" onclick="reg_pago_rueda()">Confirmar Pago</button>
    </td>
  </tr>
</table>
</form>
</div>
<div class="DivFrmCol2" >
  <div class="DivBack">
       <img src="../../public/img/back.png"  onclick="load_frm('rueda_negocio/getgrilla');" style="cursor:pointer;" width="64" height="64" title="Retornar"/>
  </div>
</div>
</div>