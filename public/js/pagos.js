// Graba las empresas y los clientes por primera vez si no estan registrados
function reg_pago_rueda(){    
       
    var form=$("#frmpago");
        var paths = base_url('pago/save_pago');
        
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
         var eval = Validar_Require_Form('frmpago'); 
         if (eval>0){
            $div.dialog('open');
            $div.html("! Complete Datos para continuar ¡")
         }
         
         var id_motivo = $('#id_motivo_pago').val();
         var Data =form.serialize()+"&id_motivo_pago="+id_motivo;
         
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
                var objson = JSON.parse(r);
                if (objson.response == true){
                    $div.dialog('open');
                    $div.html("Se Grabo los  Datos.");
                    
                    //load_cbo_empresa();
                    //var path_repre = base_url('persona/load_view_persona/');
                    //window.location.href = path_repre;                    
                }
            }

        });
}