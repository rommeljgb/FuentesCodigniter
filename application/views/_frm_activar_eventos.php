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
<form id="frmActivaEvent" name="frmActivaEvent">
<table width="401" border="0">
  <tr>
    <td colspan="3" style="color:#00C;"><strong>Activación de Eventos</strong></td>
  </tr>
  <tr>
    <td colspan="3"><strong>Datos del Contacto / Empresa</strong></td>
  </tr>
  <tr>
    <td>Empresa</td>
    <td>Intico S.A.C</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="108">Contacto:</td>
    <td width="184">Luna Pacheco</td>
    <td width="95">&nbsp;</td>
  </tr>
  <tr>
    <td>Evento:</td>
    <td> Seguridad Informática</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>Datos de Pagos</strong></td>
  </tr>
<tr>
    <td>Monto</td>
    <td><input type="text" name="b2" id="b2"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Moneda</td>
    <td><label>
      <select name="select" id="select">
        <option value="1">Peso</option>
        <option value="2">Dolar</option>
      </select>
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Forma</td>
    <td><select name="select2" id="select2">
      <option value="1">Contado</option>
      <option value="2">Targeta</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Estado</td>
    <td><select name="select3" id="select3">
      <option value="1">Cancelado</option>
      <option value="2">Pendiente</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="text-align:center">
    <button type="button" class="btn btn-primary" onclick="reg_persona_empresa()">Grabar</button>&nbsp;
    </td>
  </tr>
</table>
</form>
</div>
<div class="DivFrmCol2" >
  <div class="DivBack">
       <img src="../../public/img/back.png"  onclick="load_frm('persona/getGridAdminActivarEvento');" style="cursor:pointer;" width="64" height="64" title="Retornar"/>
  </div>
</div>
</div>