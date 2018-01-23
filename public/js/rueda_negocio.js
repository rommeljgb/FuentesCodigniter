function registrar_rueda_negocio(){    
       
    var form=$("#frmrueda");
        var paths = base_url('rueda_negocio/save_rueda_negocio');
        
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
         var eval = Validar_Require_Form('frmrueda'); 
         if (eval>0){
            $div.dialog('open');
            $div.html("! Complete Datos para continuar ¡");
            return false;
         }
         
         var Data =form.serialize();
         
         $.ajax({
            url: paths,
            data:Data,
            type: 'post',
            dataType: 'html',
            beforeSend: function() {
                $("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
            },
            error: function(e) {
                //$div.html('error.' + e.responseText);
               // alert(e.responseText);
            },
            success: function(r) {             
                $("#load_gif").html('');
                if (r=="true"){
                    $div.dialog('open');
                    $div.html("Se Grabo los  datos.");
                    
                    load_cbo_empresa();
                    //var path_repre = base_url('persona/load_view_persona/');
                    //window.location.href = path_repre;                    
                }
            }

        });
}