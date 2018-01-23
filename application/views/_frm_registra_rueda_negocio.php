<script>
    
    setTimeout("load_cbo_empresa()",600);
</script>
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
<div>
<div class="DivFrmCol1">
<form id="frmrueda" name="frmrueda">
<table width="731" border="0">
  <tr>
    <td colspan="4" style="color:#009"><strong>Mis Eventos de Rueda de Negocios</strong></td>
  </tr>
  <tr>
    <td id="TextEmpre"><u>Seleccione Empresa</u></td>
<td id="tdcombo"><select name="select_empresa" id="select_empresa" required="required" >
<option></option>
<option value="">Ninguna</option>
</select></td>
    <td id="TextEmpre">&nbsp;</td>
    <td id="TextEmpre">&nbsp;</td>
  </tr>
  <tr>
    <td width="148">Nombre Evento</td>
    <td colspan="2"><label for="nombre_evento"></label>
    <input type="text" name="nombre_evento" id="nombre_evento" required="required" /></td>
    <td width="245">&nbsp;</td>
  </tr>
  <tr>
    <td height="57">Comentario</td>
    <td colspan="2"><label for="comentario"></label>
    <textarea name="comentario" id="comentario" cols="30" rows="2" required="required"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dirección</td>
    <td colspan="2"><label for="direccion"></label>
    <input type="text" name="direccion" id="direccion" style="width:300px" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Logo/Publicación</td>
    <td colspan="2"><label for="imagen_logo"></label>
    <input type="file" name="imagen_logo" id="imagen_logo" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Fecha Inicio</td>
    <td width="232"><label for="fecha_inicio"></label>
    <input type="text" value="" readonly name="fecha_inicio" required="required" id="fecha_inicio" style="width:90px">&nbsp;<img src="../../public/images/iconco_calendario.jpg" width="18" height="18" style="cursor:pointer" onclick="displayCalendar(document.forms['frmrueda'].fecha_inicio,'dd/mm/yyyy',this)" id="im_date1" name="im_date1" title="Calendario"/>
    </td>
    <td width="88">Fecha Final</td>
    <td><label for="fecha_fin"></label>     
    <input type="text" value="" readonly name="fecha_fin" required="required" id="fecha_fin" style="width:90px">&nbsp;<img src="../../public/images/iconco_calendario.jpg" width="18" height="18" style="cursor:pointer" onclick="displayCalendar(document.forms['frmrueda'].fecha_fin,'dd/mm/yyyy',this)" id="im_date2" name="im_date2" title="Calendario"/>
    </td>
  </tr>
  <tr>
    <td>Hora Inicio</td>
    <td colspan="2"><label for="hora_inicio"></label>
    <input name="hora_inicio" type="text" id="hora_inicio" value="9:00 am" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Costo Evento</td>
    <td><input type="text" name="costo" id="costo" required="required" /></td>
    <td>Forma Pago</td>
    <td><label for="forma_pago"></label>
      <select name="forma_pago" id="forma_pago" required="required">
      <option value="0">SIN COSTO</option>
      <option value="1">UN SOLO PAGO</option>
      <option value="2">POR REUNION / EVENTO</option>
    </select></td>
  </tr>
  <tr>
    <td style="color:#F00;">Estado Evento</td>
    <td colspan="2"><select name="estado" id="estado" required="required">
      <option value="0">Pagado</option>
      <option value="1">Sin Pagar</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" style="text-align:center;">
    <button type="button" class="btn btn-primary" onclick="registrar_rueda_negocio()">Grabar</button>&nbsp;
<button type="button" class="btn btn-primary" onclick=""><!--Existencia_Rut()-->Nuevo</button></td>
  </tr>
</table>
</form>
</div>
<div class="DivFrmCol2" >
  <div class="DivBack">
       <img src="../../public/img/back.png"  onclick="load_frm('rueda_negocio/getgrilla')" style="cursor:pointer;" width="64" height="64" title="Retornar"/>
  </div>
</div>
</div>