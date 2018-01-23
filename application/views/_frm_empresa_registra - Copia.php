<style type="text/css">
    #columna1 {
  float:left; 
  width:460px;
  /*background-color:#ff5;*/
  border:1px solid #555;
}
</style>
<script>
function llamar_upload_image(){
	setTimeout(function (){
            $('#BtnUpload').click();            
        },200);
	}
</script>
<div id="">
 <a href="<?php echo  base_url('index/index')?>" class="btn btn-primary btn-lg btn-primary" role="button">Retornar al Inicio</a><br><br>    
</div>
<div style="margin-left: 10px;margin-top: 15px">
 
    <form enctype="multipart/form-data" class="form-horizontal" id="frm_emp_cli" name="frm_emp_cli" method="post">
        
        <div id="columna1">
<legend>Datos de su empresa</legend>
<p>
  <label>Numero de RUT(*)</label>
  <input type="text" name="rut" id="rut" required="required" maxlength="20" />
</p>
<p>
  <label>Razon Social (*)</label> 
 
  <input type="text" name="razon_social" id="razon_social" required="required" maxlength="60"  />
<label>Nombre Fantasia(*)</label> 
<input type="text" name="nombre_fantasia" id="nombre_fantasia" required="required"  maxlength="40"/>
<label>Direccion Legal(*)</label> 
<input type="text" name="direccion_legal" id="direccion_legal" required="required"  maxlength="120"/>
<br />
 <br />
<label>Direccion Actividad Comercial</label>
<input type="text" name="direc_activ_comercial" id="direc_activ_comercial" maxlength="120" />
<br />
<br /> 
<label>Ubigeo(*)</label>
<select name="id_ubigeo" id="id_ubigeo" required="required" >
<option></option>
<option value="1">Arica</option>
<option value="2">Santiago</option>
</select>
<p><label>Teléfono</label>
  &nbsp; 
  <label for="telefono"></label>
  <input type="text" name="telefono" id="telefono" maxlength="100"/>
</p>
<p><label>Web Site</label>
  &nbsp; 
  <label for="website"></label>
  <input type="text" name="website" id="website" maxlength="100"/>
  </p>
<p>
  <label>  Red Social</label> 
  <input type="text" name="redsocial" id="redsocial" maxlength="80" />
  <br />
  <p>
  <label>  Email</label> 
  <input type="text" name="email" id="email" maxlength="80" />
  <br />
  <br /> 
  <label >Rubro(*)</label>
  <select name="id_rubro" id="id_rubro" required="required">
    <option></option>
    <option value="2">Educacion</option>
    <option value="2">Salud / Medicina</option>
  </select>
  <br />
  <br /><label>Giro Comercial(*) </label>
  <input type="text" name="giro_comercial" id="giro_comercial" required="required"  maxlength="80" />
  <br />
  <br />
  Perfil Empresa(*) 
  <textarea name="perfil_empresa" id="perfil_empresa" cols="45" rows="2" required="required" maxlength="200"></textarea>
  <br />
</p>
<p>
Logo(Imagen) 
<div id="image_preview"><img id="previewing" src="noimage.png" /></div>
<label for="imagenlogo"></label>
<div id="selectImage">
<input type="file" name="file" id="file" onchange="llamar_upload_image()" /><input type="submit" value="Upload" class="submit" name="BtnUpload" id="BtnUpload" />
</div>
<h4 id='loading' style="display:none;position:absolute;top:50px;left:850px;font-size:25px;border:1px solid #006;">loading...</h4>
		<div id="message"> 			
        </div>
</p>
<button type="button" class="btn btn-primary" onclick="reg_empresa_cliente()">Grabar</button>
<button type="button" class="btn btn-success" onclick="Existencia_Rut()">Nuevo</button> 
        </div>     

     
</form>
</div>
