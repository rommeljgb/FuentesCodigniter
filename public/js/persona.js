// Graba las empresas y los clientes por primera vez si no estan registrados
function reg_persona_empresa(){    
       
    var form=$("#frm_repre");
        var paths = base_url('persona/save_persona');
        
        // open dialog 1
        var $div_save = $("<div/>").dialog({
         width: 500,
         height: 200,
         autoOpen: false,
         title: "Informacion",
         modal: true,
         close : function(){           
               var path_repre = base_url('persona/adm_ruedav/');
                    window.location.href = path_repre;  
         },
         buttons: {                
                "Cerrar": function () {
                    $(this).dialog("close");
                }
            }
         }); 
         
         // open dialog 2
        var $div = $("<div/>").dialog({
         width: 500,
         height: 200,
         title: "Informacion",
         modal: true,
         close : function(){           
               
         },
         buttons: {                
                "Cerrar": function () {
                    $(this).dialog("close");
                }
            }
         });       
         //  fin open dialog
        
        // Validamos  el password
        if ($('#password').val() != $('#password_confirm').val()){
            $div.dialog('open');
            $div.html("! Las Contraseñas no coinciden ¡");
            return false;            
        }
          // validar campos obligatorios del formulario
         var eval = Validar_Require_Form('frm_repre');      
         if (eval>0){
            $div.dialog('open');
            $div.html("! Complete Datos para continuar ¡");
            return false;
         }
         
        $.ajax({
            url: paths,
            data:form.serialize(),
            type: 'post',
            dataType: 'html',
            beforeSend: function() {
                $("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
            },
            error: function(e) {
                //$div.html('error.' + e.responseText);
                  alert(e.responseText);
            },
            success: function(r) {
                 //alert(r.responseText);
                if (r=="true"){
                    $('#BtnReset').click();
                    $("#load_gif").html('');
                    $div_save.dialog('open');
                    $div_save.html("Se Grabo los  datos.");                    
                }
            }

        });
}

// registro basico de las personas

function reg_basico_persona(){    
       
       // validamos
        
        // open dialog 1
        var $div_save = $("<div/>").dialog({
         width: 500,
         height: 220,
         autoOpen: false,
         title: "Informacion",
         modal: true,
         close : function(){           
               //var path_repre = base_url('persona/adm_ruedav/');
               //window.location.href = path_repre;   
         },
         buttons: {                
                "Cerrar": function () {
                    $(this).dialog("close");
                }
            }
         }); 
        
         // open dialog 2
        var $div = $("<div/>").dialog({
         width: 500,
         height: 200,
         autoOpen: false,
         title: "Informacion",
         modal: true,
         close : function(){           
               
         },
         buttons: {                
                "Cerrar": function () {
                    $(this).dialog("close");
                }
            }
         });      
         //  fin open dialog
        
        // Validamos  el password
        if ($('#password').val() != $('#password_confirm').val()){
            $div.dialog("open");
            $div.html("! Las Contraseñas no coinciden ¡");
            return false;            
        }
        
        // validar campos obligatorios del formulario
         var eval = Validar_Require_Form('frm_repre');      
         if (eval>0){
            $div.dialog("open");
            $div.html("! Complete Datos para continuar ¡");
            return false;
         }
         
         // validamos el correo
        var emails = validarEmail($('#email').val());
       
        if (emails==0){
               $div.dialog("open");
               $div.html("! Email invalido.¡");
               return false;
        }        
  
     var form=$("#frm_repre");
        var paths = base_url('persona/registro_basico_persona');
        
     $("#BtnRegBasic").attr("disabled", true);
     $("#BtnReset").attr("disabled", true);     
        $.ajax({
            url: paths,
            data:form.serialize(),
            type: 'post',
            dataType: 'html',
            beforeSend: function() {            
               $("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
            },
            error: function(e) {
                //$div.html('error.' + e.responseText);
                  alert(e.responseText);
            },
            success: function(r) {                
               alert(r)
                var objson = JSON.parse(r);
                if (objson.emailExist==true){
                    
                    $div_save.dialog("open");
                    $div_save.html("<br><br>Escriba otro EMAIL al parecer ya está registrado.");
                    
                    $("#BtnRegBasic").attr("disabled", false);
                    $("#BtnReset").attr("disabled", false); 
                    $("#load_gif").html('');
                }
                if (objson.email==true){
                    
                    $('#BtnReset').click();
                    $("#load_gif").html('');
                    
                    $div_save.dialog("open");
                    $div_save.html("Para Terminar su proceso de registro se le ha <br>enviado a su CORREO un enlace para confirmación de sus datos.<br><br>\n\
                                    ! por fabor confirme ¡");                   
                }
            }

        });
}

// funcion que actualiza los datos restantes del usuario
function actualizar_perfil_persona(){    
  
        // open dialog 1
        var $div_save = $("<div/>").dialog({
         width: 500,
         height: 220,
         autoOpen: false,
         title: "Informacion",
         modal: true,
         close : function(){           
               //var path_repre = base_url('persona/adm_ruedav/');
               //window.location.href = path_repre;   
         },
         buttons: {                
                "Cerrar": function () {
                    $(this).dialog("close");
                }
            }
         }); 
        
         // open dialog 2
        var $div = $("<div/>").dialog({
         width: 500,
         height: 200,
         autoOpen: false,
         title: "Informacion",
         modal: true,
         close : function(){           
               
         },
         buttons: {                
                "Cerrar": function () {
                    $(this).dialog("close");
                }
            }
         });      
         //  fin open dialog
        
        // Validamos  el password
        if ($('#password').val() != $('#password_confirm').val()){
            $div.dialog("open");
            $div.html("! Las Contraseñas no coinciden ¡");
            return false;            
        }
        
        // validar campos obligatorios del formulario
         var eval = Validar_Require_Form('frmPerfil');      
         if (eval>0){
            $div.dialog("open");
            $div.html("! Complete Datos para continuar ¡");
            return false;
         }
         
         // validamos el correo
        var emails = validarEmail($('#email').val());
       
        if (emails==0){
               $div.dialog("open");
               $div.html("! Email invalido.¡");
               return false;
        }        
  
     var form=$("#frmPerfil");
        var paths = base_url('persona/actualiza_perfil_persona');
        
     $("#BtnRegBasic").attr("disabled", true);
     
        $.ajax({
            url: paths,
            data:form.serialize(),
            type: 'post',
            dataType: 'html',
            beforeSend: function() {            
               $("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
            },
            error: function(e) {
                //$div.html('error.' + e.responseText);
                  alert(e.responseText);
            },
            success: function(r) {                
               $("#load_gif").html('');
                $("#BtnRegBasic").attr("disabled", false); 
                var objson = JSON.parse(r);
                if (objson.respuesta==true){
                    
                    $div_save.dialog("open");
                    $div_save.html("Se actualizo sus datos.");
                }               
            }

        });
}