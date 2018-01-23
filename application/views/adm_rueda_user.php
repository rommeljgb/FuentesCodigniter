<style>
    .container {        
        margin-left: 0px;
        width: 100%;
        height: 100%;
    }
    .row {
        height: 96%;
    }
     .span3{
        background: #ccc;
        height: 400px;
    }
    .well{
        height: 96%;
    }
    
    
   
    .span9{
        background: #f5f5f5;
        border: 1px solid #e3e3e3;
        width: 70%;
        height: 98%;
        
    }
    
    
</style>

<script>
 
	function load_frm(PathSegment){
			var idsegment = $('#id_persona').val(); 
			var paths = base_url(PathSegment+'/'+idsegment);
				 
				$.ajax({
					url: paths,
					data:{ id_rueda: ''} ,
					type: 'post',
					dataType: 'html',
					beforeSend: function() {
						$("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
					},
					
					error: function(e) {						
						alert(e.responseText);
					},
										
					success: function(r) {
						 $("#load_gif").html('');                 
						 $('#div_seccion_form').html(r);                    
					}
		
				});
	}
	/*-----*/    
	
	function load_frm_general(path, idtabla){			
			var paths = base_url(path);
				 
				$.ajax({
					url: paths,
					data:{ pk_tabla: idtabla} ,
					type: 'post',
					dataType: 'html',
					beforeSend: function() {
						$("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
					},
					
					error: function(e) {						
						alert(e.responseText);
					},
										
					success: function(r) {
						 $("#load_gif").html('');                 
						 $('#div_seccion_form').html(r);                    
					}
		
				});
	}
    
     // cargamos el combo empresa
    function load_cbo_empresa(){     
        var idsegment = $('#id_persona').val(); 
        var url=base_url('empresa/LoadComboEmpresa'+'/'+idsegment);
        $("#tdcombo").load(url);
    }
</script>

<div class="container" style="width: 100%;">
            <div class="navbar navbar-inverse">
            <div class="navbar-inner">
            <div style="font-size:18px;color:#FFF;margin-left:800px;padding-top:7px;">
                  <?php 
    if (strlen($Nombre) !=""){
        echo "[Bienvenido: ".$Nombre."]";
    }else{
        echo "No se creo la Sesssion.";
    }
    ?>&nbsp;&nbsp;
    <a href="<?php echo base_url('usuario/destroy')?>">Cerrar Session</a>
          </div>
            </div>
            </div>
        </div>

<?php 
 if (strlen($Nombre) !=""){
?>
<div class="container" style="margin-top:15px;">

    <div class="row">

        <div class="span3">
            <div class="well">
                <ul class="nav nav-list" id="menu_registro">
                    
                    <li class="nav-header">Opciones del Menu</li>
                    <li class="divider"></li>
                    <li><a href="#" onclick="load_frm('persona/getperfil');"><i class="icon-download-alt"></i> Mi Perfil</a></li>
                    <li><a href="#" onclick="load_frm('empresa/getGridEmpresa');"><i class="icon-cog"></i><!----load_frm('empresa/getEmpresa');----> Mis Empresas</a></li>           
                   
                 <li><a href="#" onclick="load_frm('rueda_negocio/getgrilla');"><i class="icon-signal"></i> Eventos Organizados<!--load_frm('rueda_negocio/getFrmRueda');--></a></li>
                 <li><a href="#" onclick="load_frm('rueda_negocio/getGridEventoReunion');"><i class="icon-hdd"></i>Reuniones Por Evento</a></li>
                 <li><a href="#" onclick="load_frm('persona/getGridListContac');"><i class="icon-hdd"></i>Mis Contactos</a></li>
                 <li><a href="#" onclick="load_frm('persona/getGridRegistroParticipante');"><i class="icon-hdd"></i>Registro de Participantes</a></li>
                  <li><a href="#" onclick="load_frm('persona/getGridEventAsist')"><i class="icon-signal"></i>Mis Eventos Asistidos</a></li>  
                 <li><a href="#" onclick="load_frm('persona/getGridAdminActivarEvento');"><i class="icon-hdd"></i>Operatividad Administrador</a></li>                     
                 <li class="divider">-----------------------------------</li>     
                    <li><a href="#<?php //echo base_url('programacion/load_form_mante')?>" onclick="$('#div_seccion_form').html('');"><i class="icon-pencil"></i>Forma de pago</a></li>
                    <li><a href="#" onclick="$('#div_seccion_form').htm('');"><i class="icon-camera"></i> Envio de Mensages</a></li>
                    <li><a href="#" onclick="$('#div_seccion_form').htm('');"><i class="icon-pencil"></i> Filtros</a></li>
                    <li><a href="#" onclick="$('#div_seccion_form').htm('');"><i class="icon-tint"></i> Utilitarios</a></li>
                    <li class="divider"></li>                                
                </ul>
            
            </div>
            
        </div>

        <div class="span9">
            <input readonly="readonly" name="id_persona" id="id_persona" value="<?php  if (isset($id_persona)){echo $id_persona;};?>"  style="width: 7px">
            <div id="div_seccion_form">
                                            
            </div>
        </div>

   </div>

</div>
<?php 
 }
?>

<!-----load_frm('empresa/getEmpresa')----->