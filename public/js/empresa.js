// funcion que permite primero  buscar si existe ya un rut de  en  otra  empresa
function Existencia_Rut(){
    var paths = base_url('empresa/Obtener_Rut_Existente');
    var nro_rut = $('#rut').val();
     var jqXHR = $.ajax({
            url: paths,
            data:{ rut: nro_rut},
            type: 'post',
            dataType: 'html',
            async: false,         
            success: function(r) {
            }

        });
        
    return jqXHR.responseText;
}

// Graba las empresas y los clientes por primera vez si no estan registrados
function reg_empresa_cliente(){    
       
    var form=$("#frm_emp_cli");
        var paths = base_url('empresa/save_empresa');
        
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
         
          // validar previa existencia de RUT
         var RutEvalua = Existencia_Rut();        
         if (RutEvalua !=0){
            $div.dialog('open');
            $div.html("! El valor RUT ya existe ¡");
            $('#rut').focus();       

            return false;
         }
              
          // validar campos obligatorios del formulario
         var eval = Validar_Require_Form('frm_emp_cli'); 
         if (eval>0){
            $div.dialog('open');
            $div.html("! Complete Datos para continuar ¡")
            return false;
         }
         
         var Data =form.serialize()+ '&pkPersona='+$('#id_persona').val();
         
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
                $('#btnReset').click();
                if (r=="true"){
                    $div.dialog('open');
                    $div.html("Se Grabo los  datos.");
                    
                    //load_cbo_empresa();
                    //var path_repre = base_url('persona/load_view_persona/');
                    //window.location.href = path_repre;                    
                }
            }

        });
}