<style type="text/css">
#columna1 {
  float:left; 
  width:900px;
  /*background-color:#ff5;*/
  border:1px solid #555;
}
</style>
<div style="margin-left: 10px;margin-top: 15px">
 
    <div id="">
 <a href="<?php echo  base_url('index/index')?>" class="btn btn-primary btn-lg btn-primary" role="button">Retornar al Inicio</a><br><br>    
</div>
    
    <form enctype="multipart/form-data" class="form-horizontal" id="frm_repre" name="frm_repre" method="post">
             
        <div id="columna1">
        <legend>Datos del persona</legend>
          <p>
              <label>Nombres(*)</label><input type="text" name="nombres" id="nombres" required="required"  maxlength="40"/>
          </p>
          <p>
            <label>Email </label>
            <input type="text" name="email" id="email" required="required" maxlength="22"/>
          </p>
          <p>Ingrese Contraseña (*)
            <input type="password" name="password" id="password" required="required" size="25"/>
             Confirmar Contraseña(*) 
             <input type="password" name="password_confirm" id="password_confirm" required="required" size="25"/>
            <br />
            <br />
            <br /><label>Teléfono(*) </label>
            <input type="text" name="telefono" id="telefono" required="required" maxlength="10"/>
            <br />
            <br />
            <br />
            <label>Celular </label>
            <input type="text" name="celular" id="celular" maxlength="10" />
            <br />
            <br />
            <br />
            <label>Interes</label>
            <textarea name="interes" id="interes" cols="45" rows="2" maxlength="150"></textarea>
          </p>
          <p><label>Cargo(*)</label>
            <input type="text" name="cargo" id="cargo" maxlength="10" />
            <br />
            <br />
          </p>
                 <button type="button" class="btn btn-primary" onclick="reg_persona_empresa()">Grabar</button>
<button type="reset" class="btn btn-success" id="BtnReset" name="BtnReset">Nuevo</button> 
        </div>
</form>
</div>
