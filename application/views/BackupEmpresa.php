<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<div id="">
 <a href="<?php echo  base_url('index/index')?>" class="btn btn-primary btn-lg btn-primary" role="button">Retornar al Inicio</a><br><br>    
</div>
<form enctype="multipart/form-data" class="form-horizontal" id="frm_emp_cli" name="frm_emp_cli" method="post">
<table width="531" border="1">
  <tr>
    <td colspan="3" style="color:#00C;"><strong>Mis Empresas</strong></td>
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
    <td colspan="3"><strong>Otros..</strong></td>
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
<input type="file" name="file" id="file" onchange="llamar_upload_image()" /><input type="submit" value="Upload" class="submit" name="BtnUpload" id="BtnUpload" />
</div>
<h4 id='loading' style="display:none;position:absolute;top:50px;left:850px;font-size:25px;border:1px solid #006;">loading...</h4>
		<div id="message"> 			
        </div></td>
  </tr>
  <tr>
    <td colspan="3"><button type="button" class="btn btn-primary" onclick="reg_empresa_cliente()">Grabar</button>&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-success" onclick="Existencia_Rut()">Nuevo</button> </td>
  </tr>
</table>
</form>
</body>
</html>