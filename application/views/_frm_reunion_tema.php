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
<form id="frmreunion" name="frmreunion">
<table width="673" border="0">
  <tr>
    <td colspan="4" style="color:#00C"><strong>Registrar  Reunion Para el evento</strong></td>
  </tr>
  <tr>
    <td colspan="4" style="color:#00C"><strong>Empresa: GRAÑA & MONTERO</strong></td>
  </tr>
  <tr>
    <td colspan="4" style="color:#00C"><strong>Evento: Gran exposición Mineria</strong></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Datos de la Reunion<input type="text" style="width:10px" value="<?php echo $id_rueda;?>" id="idRuedas" name="idRuedas"></strong></td>
  </tr>
  <tr>
    <td width="177">Nombre Tema:</td>
    <td colspan="2"><label for="nombre_tema"></label>
    <input type="text" name="nombre_tema" id="nombre_tema" required="required"></td>
    <td width="215">&nbsp;</td>
  </tr>
  <tr>
    <td>Fecha Reunión</td>
    <td colspan="2"><input type="text" value="" readonly name="fecha_reunion" id="fecha_reunion" required="required">&nbsp;<img src="../../public/images/iconco_calendario.jpg" width="18" height="18" style="cursor:pointer" onclick="displayCalendar(document.forms[0].fecha_reunion,'dd/mm/yyyy',this)" id="im_date1" name="im_date1" title="Calendario"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hora Inicio</td>
    <td width="124"><label for="hora_inicio"></label>
    <input name="hora_inicio" type="text" id="hora_inicio" style="width:70px;" required="required"></td>
    <td width="139">Hora Final:</td>
    <td><label for="hora_final"></label>
    <input name="hora_final" type="text" id="hora_final" style="width:70px;" required="required"></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Datos de la Mesa / Zona</strong></td>
  </tr>
  <tr>
    <td>Zona</td>
    <td><label for="nombre_ubicacion"></label>
      <label for="nombre_ubicacion"></label>
      <select name="id_tipo_zona" id="id_tipo_zona" required="required">
      <option value="" selected="selected"></option>
      <option value="1">Mesa</option>
      <option value="2">Stand</option>
      <option value="3">Sala</option>
      </select></td>
    <td>Nombre Zona:</td>
    <td><label for="nombre_ubicacion2"></label>
      <input type="text" name="nombre_ubicacion" id="nombre_ubicacion"  required="required"/></td>
  </tr>
  <tr>
    <td>Capacidad</td>
    <td colspan="2"><label for="capacidad"></label>
    <input type="text" name="capacidad" id="capacidad" required="required"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Datos del Expocitor</strong></td>
  </tr>
  <tr>
    <td>Nombre Expocitor</td>
    <td colspan="2"><label for="expocitores"></label>
    <input type="text" name="expocitores" id="expocitores" required="required"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="49">Estudio/Especialización</td>
    <td colspan="2"><label for="estudio_especializacion"></label>
    <textarea name="estudio_especializacion" id="estudio_especializacion" cols="20" rows="2" required="required"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><button type="button" class="btn btn-primary" onclick="guardar_reunion_temas()" id="BtnRegReu" name="BtnRegReu">Grabar</button>&nbsp;&nbsp;
<button type="reset" class="btn btn-primary" id="BtnReset" name="BtnReset">Nuevo</button>&nbsp;
</td>
  </tr>
  </table>
</form></div>
<div class="DivFrmCol2" >
  <div class="DivBack">
       <img src="../../public/img/back.png"  onclick="load_grid_lista_reunion('<?php echo $id_rueda;?>');" style="cursor:pointer;" width="64" height="64" title="Retornar"/>
  </div>
</div>
</div>