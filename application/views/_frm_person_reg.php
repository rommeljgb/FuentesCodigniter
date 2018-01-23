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
        <legend>Mis datos</legend>
          <p>
              <label>Nombres(*)</label><input type="text" name="nombres" id="nombres" required="required"  maxlength="40"/>
          </p>
          <p>
            <label>Email(*)</label>
            <input type="text" name="email" id="email" required="required" maxlength="22"/>
          </p>
          <p>Ingrese Contraseña (*)
            <input type="password" name="password" id="password" required="required" size="25"/>
            <br />
            <br />
             Confirmar Contraseña(*) 
             <input type="password" name="password_confirm" id="password_confirm" required="required" size="25"/>
          </p>
<button type="button" class="btn btn-primary" onclick="reg_basico_persona()" id="BtnRegBasic" name="BtnRegBasic">Registrarse</button>
<button type="reset" class="btn btn-success" id="BtnReset" name="BtnReset">Nuevo</button>
        </div>
</form>
</div>


