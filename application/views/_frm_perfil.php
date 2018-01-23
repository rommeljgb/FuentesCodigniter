<div style="margin-left: 20px;">
    <form id="frmPerfil" name="frmPerfil">
        <table width="375" border="0">
  <tr>
      <td colspan="3" style="color: #003bb3"><strong>Mi Perfil</strong></td>
  </tr>
    <tr>
      <td colspan="3"><!---------------></td>
  </tr>
  <tr>
      <td colspan="3"><strong><u>Datos Personales</u></strong></td>
  </tr>
  <tr>
    <td width="157">Nombres:</td>
    <td width="162"><label for="nombres"></label>
        <input type="text" name="nombres" id="nombres" value="<?php echo $data->nombres;?>" required="required" /></td>
    <td width="34">&nbsp;</td>
  </tr>
  <tr>
    <td>Documento.Identidad:</td>
    <td><label for="nro_doc_identidad"></label>
        <input type="text" name="nro_doc_identidad" id="nro_doc_identidad" value="<?php echo $data->nro_doc_identidad;?>" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Teléfono:</td>
    <td><input type="text" name="telefono" id="telefono" value="<?php echo $data->telefono;?>" required="required"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Celular:</td>
    <td><input type="text" name="celular" id="celular" value="<?php echo $data->celular;?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong><u>Datos como Usuario de la WEB</u></strong></td>
    </tr>
    <tr>
    <td>Email:</td>
    <td><input type="text" name="email" id="email" value="<?php echo $data->email;?>" /></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>Password:</td>
    <td><input type="password" name="password" id="password"  value="<?php echo $data->password;?>" required="required" /></td>
    <td><input type="checkbox" name="chkvalid" id="chkvalid" required="required"/>
      <label for="chkvalid"></label></td>
  </tr>
    <tr>
    <td>Confirme Password:</td>
    <td><input type="password" name="password_confirm" id="password_confirm"  value="<?php echo $data->password;?>" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
      <td>Estado:</td>
      <td><label for="estado"></label>
        <select name="estado" id="estado">
            <option value="1" selected="selected">Activarse</option> 
            <option value="1">Darse de Baja</option> 
        </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td colspan="3"><strong><u>Dato Laboral</u></strong></td>
  </tr>
  <tr>
    <td>Lugar de Trabajo:</td>
    <td><input type="text" name="lugar_trabajo" id="lugar_trabajo" value="<?php echo $data->lugar_trabajo;?>" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Cargo:</td>
    <td><input type="text" name="cargo" id="cargo" value="<?php echo $data->cargo;?>" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td colspan="2" style="text-align: center">
          <button id="BtnRegBasic" class="btn btn-primary" name="BtnRegBasic" onclick="actualizar_perfil_persona()" type="button">Actualizar</button>
          <input type="hidden" name="idPersona" id="idPersona" value="<?php echo $data->id_persona;?>" size="10">
      </td>
    <td>&nbsp;</td>
  </tr>
</table>
    </form>
</div>