function load_grid_lista_reunion(id_rueda){ 
   
         // open dialog
         /*var $div = $("<div/>").dialog({
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
         });   */      
         //  fin open dialog
         
    var paths = base_url('reunion/getGridReunion');
         
        $.ajax({
            url: paths,
            data:{ id_rueda: id_rueda} ,
            type: 'post',
            dataType: 'html',
            beforeSend: function() {
                $("#load_gif").html('<img src="'+base_url('public/img/circulo_load.gif')+'" />');
            },
            
            error: function(e) {
                
                //alert(e.responseText);
            },
            
            success: function(r) {
                 $("#load_gif").html('');                 
                 $('#div_seccion_form').html(r);                    
            }

        });
}


function guardar_reunion_temas(){    
       
    var form=$("#frmreunion");
        var paths = base_url('reunion/guardar_reunion_temas');
        
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
         var eval = Validar_Require_Form('frmreunion'); 
         if (eval>0){
            $div.dialog('open');
            $div.html("! Complete Datos para continuar ¡");
            
            return false;
         }
         $( "#BtnRegReu" ).prop( "disabled", true );
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
                alert(e.responseText);
            },
            success: function(r) {
                alert(r)
                $("#BtnRegReu" ).prop("disabled", false);
                $("#BtnReset").click();
                
                $("#load_gif").html('');               
                 var objson = JSON.parse(r);
                 
                if (objson.respuesta != true){
                    $div.dialog('open');
                    $div.html("Se Grabo los  datos.");
                    
                    load_cbo_empresa();
                    //var path_repre = base_url('persona/load_view_persona/');
                    //window.location.href = path_repre;                    
                }
            }

        });
}