    
    // funciones de uso general en el sistema
    function base_url(p) {
        try {
            var l = window.location;
            var url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1] + '/' + p;
            return url;
        }
        catch (arg) {
            return null;
        }
    }     
    // Funcion que permite validar los campos requeridos de un formulario
    function Validar_Require_Form(idformulario){
        
            var resp=0;
            var frm = document.getElementById(idformulario);
            
            for (i=0;i<frm.elements.length;i++){
                
                var ids = frm.elements[i].id;
                if (ids !=""){
                var tipo = document.querySelector('#'+ids).getAttribute('type');
                
                if (tipo !="radio" || tipo !="button" || tipo !="submit" || tipo !="reset"){
                    
                    var valor = document.querySelector('#'+ids).getAttribute('required');                
                    if (valor == "true" || valor == 'required' || valor ==true ){
                        if (document.getElementById(ids).value == ""){
                            resp ++;
                            document.getElementById(ids).style.border="1px solid red";
                        }
                    }
                    
                }
                }
            }
            
        return resp;
    }
    
    // valida un correo electronico
    function validarEmail(email) {
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if ( !expr.test(email) ){
            return 0;
        }else{
             return 1;    
        }
    }
    
    //-----Pintar filas
    function Pintar_Tr(idtr, controlrow){
        if (idtr !=""){            
            Restaurar_Color(controlrow);
            $('#'+controlrow).val(idtr);
           $('#'+idtr).css('background-color','#B9E4EB');                    
        }
    }
    
    function Restaurar_Color(controlrow){
            var rowtr = $('#'+controlrow).val();
               if (rowtr !=""){
                $('#'+rowtr).css('background-color','#f5f5f5');
            }
    }
    
    function PaintMouseOver(rowtr){       
        $('#'+rowtr).css('background-color','#B9E4EB');
    }
    
    function PaintMouseOut(rowtr, controlrow){
        if (rowtr != $('#'+controlrow).val()){
            $('#'+rowtr).css('background-color','#F5F5F5');
        }
    }
    
    //--- fin pintar filas TR
    
   /*        
    function SetScrollDiv(div_id,valuescroll){       
            $("#"+div_id ).scrollTop(valuescroll);
    }

    function SetPintarRowTr(idTr){
        if (idTr !=""){        
            $('#'+idTr).css('background-color','#aaa');
        }
    }

    function GetValueScroll(divid, criterio){
        var vals = "";
         if (criterio ==""){
             vals =  $("#"+divid).scrollHeight;   

             var trueDivHeight = $('#'+divid)[0].scrollHeight;
             var divHeight = $('#'+divid).height();
            var vals = trueDivHeight - divHeight;


        }else{
            vals = $("#"+divid).scrollTop();
        }   

        return vals;
    }  
    
    //-----Pintar las filas de las grillas
    function AppendElementCombo_Json(idelement,jsondat,id_fk_equip){        
        var $combo = $("#"+idelement);
            $combo.empty();
            $combo.append("<option value='' >" + "Seleccione" + "</option>");
          
            for(var rowss in jsondat){               
               var selecteds="";               
               if (id_fk_equip == jsondat[rowss].idtable){selecteds="selected";};
               
               $combo.append("<option value='"+jsondat[rowss].idtable+"' "+selecteds+">" + jsondat[rowss].descrip + "</option>");
            }
              
    }
    
    // hace un reset a un formulario
    function clearForm(oForm) {
        var elements = document.forms[oForm].elements; 
        for(i=0; i<elements.length; i++) {
             field_type = elements[i].type.toLowerCase();             
             switch(field_type) {

                     case "text": 
                     case "password": 
                     case "textarea":
                     case "hidden":	

                             elements[i].value = ""; 
                             break;

                     case "radio":
                     case "checkbox":
                             if (elements[i].checked) {
                                     elements[i].checked = false; 
                             }
                             break;

                     case "select-one":
                     case "select-multi":
                             elements[i].selectedIndex = "";
                             break;

                     default: 
                             break;
             }
         }
    }
    
    // Permite digitar solo numeros decimales
    function WriteNumDecimal(e, field) {
        key = e.keyCode ? e.keyCode : e.which
        if (key == 8) return true
        if (key > 47 && key < 58) {
          if (field.value == "") return true
          regexp = /.[0-9]{6}$/
          return !(regexp.test(field.value))
        }
        if (key == 46) {
          if (field.value == "") return false
          regexp = /^[0-9]+$/
          return regexp.test(field.value)
        }
        return false
    }    
    
    // valida que se escriba solo numeros enteros
    function writeInteger(e){
            var caracter 
            caracter = e.keyCode ? e.keyCode : e.which 
            status = caracter     
            if (caracter>47 && caracter <58 || caracter == 8 || caracter == 46){
                    return true
            }

            return false   
    }
    
    // Obtenr solo los Radio Buttons seleccionados
    function obtenerRadioSeleccionado(formulario, nombre){
         elementos = document.getElementById(formulario).elements;
         longitud = document.getElementById(formulario).length;
         for (var i = 0; i < longitud; i++){
             if(elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true){
                 return elementos[i].value;
             }
         }
         return false;
    }

    // Funcion que permite validar los campos requeridos de un formulario
    function Validar_Require_Form(idformulario){
        
            var resp=0;
            var frm = document.getElementById(idformulario);
            
            for (i=0;i<frm.elements.length;i++){
                
                var ids = frm.elements[i].id;
                if (ids !=""){
                var tipo = document.querySelector('#'+ids).getAttribute('type');
                
                if (tipo !="radio" || tipo !="button" || tipo !="submit" || tipo !="reset"){
                    
                    var valor = document.querySelector('#'+ids).getAttribute('required');
                    if (valor == "true" && document.getElementById(ids).value == ""){
                        resp ++;
                        document.getElementById(ids).style.border="1px solid red";
                    }
                    
                }
                }
            }
            
        return resp;
    }*/
    