



function autentificacion_user(){ 
    
        var paths = base_url('usuario/login');
        
         // open dialog
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
       
              
          // validar campos obligatorios del formulario
         var eval = Validar_Require_Form('frmlog'); 
         if (eval>0){
            $div.dialog('open');
            $div.html("! Complete Datos")
         }
         
         var user=$("#userName").val();
    var pass = $("#userPassword").val();
         
        $.ajax({
            url: paths,
            data:{ userName: user, userPassword:pass} ,
            type: 'post',
            dataType: 'html',
            beforeSend: function() {
                //$div.html('Guardando...');
            },
            
            error: function(e) {
                //$div.html('error.' + e.responseText);
                //alert(e.responseText);
            },
            
            success: function(r) {
                
                 var objson = JSON.parse(r);                
                 
                if (objson.respuesta != true){
                    $div.dialog('open');
                    $div.html("No Tiene acceso.");
                    return false;
                }
               
               var path_repre = base_url('persona/adm_ruedav/');
                    window.location.href = path_repre;   
            }

        });
}