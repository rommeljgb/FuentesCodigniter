<script>
    function llamar_upload_image(){
	setTimeout(function (){
            $('#BtnUpload').click();            
        },200);
	}
    //setTimeout("load_cbo_empresa()",600);
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
<form enctype="multipart/form-data" class="form-horizontal" id="frm_emp_cli" name="frm_emp_cli" method="post">
<table width="531" border="0">
  <tr>
    <td colspan="3" style="color:#00C;"><strong>Datos de Mi Empresa</strong></td>
  </tr>
  <tr>
    <td colspan="3"><strong>Datos Legales</strong></td>
  </tr>
  <tr>
    <td width="154">Valor RUT(*)</td>
    <td width="287"><input type="text" name="rut" id="rut" required="required" maxlength="20" /></td>
    <td width="60">&nbsp;</td>
  </tr>
  <tr>
    <td><label>Razon Social (*)</label></td>
    <td><input type="text" name="razon_social" id="razon_social" required="required" maxlength="60"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label>Nombre Fantasia(*)</label></td>
    <td><input type="text" name="nombre_fantasia" id="nombre_fantasia" required="required"  maxlength="40"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label>Direccion Legal(*)</label></td>
    <td><input type="text" name="direccion_legal" id="direccion_legal" required="required"  maxlength="120"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Direccion Actividad Comercial</td>
    <td><input type="text" name="direc_activ_comercial" id="direc_activ_comercial" maxlength="120" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ubigeo(*)</td>
    <td><select name="id_ubigeo" id="id_ubigeo" required="required" >
<option></option>
<option value="1">Arica</option>
<option value="2">Santiago</option>
</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>Datos de Contacto</strong></td>
  </tr>
  <tr>
    <td>Teléfono</td>
    <td><input type="text" name="telefono" id="telefono" maxlength="100"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Web Site</td>
    <td><input type="text" name="website" id="website" maxlength="100"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>RedSocial</td>
    <td><input type="text" name="redsocial" id="redsocial" maxlength="80" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" id="email" maxlength="80" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>Otros Datos..</strong></td>
  </tr>
  <tr>
    <td><label >Rubro(*)</label></td>
    <td><select name="id_rubro" id="id_rubro" required="required">
    <option></option>
    <option value="2">Educacion</option>
    <option value="2">Salud / Medicina</option>
  </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Giro Comercial(*)</td>
    <td><input type="text" name="giro_comercial" id="giro_comercial" required="required"  maxlength="80" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Perfil Empresa(*)</td>
    <td><textarea name="perfil_empresa" id="perfil_empresa" cols="45" rows="2" required="required" maxlength="200"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Logo(Imagen)</td>
    <td colspan="2"><div id="image_preview"><img id="previewing" src="noimage.png" /></div>
<label for="imagenlogo"></label>
<div id="selectImage">
    <input type="file" name="file" id="file" onchange="llamar_upload_image()" /><input type="submit" value="Upload" class="submit" name="BtnUpload" id="BtnUpload" style="visibility: hidden;" />
</div>
<h4 id='loading' style="display:none;position:absolute;top:50px;left:850px;font-size:25px;border:1px solid #006;">loading...</h4>
		<div id="message"> 			
        </div></td>
  </tr>
  <tr>
    <td colspan="3"><button type="button" class="btn btn-primary" onclick="reg_empresa_cliente()"><!--reg_empresa_cliente()-->Grabar</button>&nbsp;&nbsp;&nbsp;
<button type="reset" class="btn btn-primary" id="btnReset" name="btnReset" onclick=""><!--Existencia_Rut()-->Nuevo</button></td>
  </tr>
</table>
</form>
</div>
<div class="DivFrmCol2" >
  <div class="DivBack">
       <img src="../../public/img/back.png"  onclick="load_frm('empresa/getGridEmpresa');" style="cursor:pointer;" width="64" height="64" title="Retornar"/>
  </div>
</div>
</div>
