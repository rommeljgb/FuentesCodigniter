<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Persona_model');
        $this->load->model('Usuario_model');
         //´para gestionar sessiones
        $this->load->library('session');
        
        // correo PHPMailer
        $this->load->library('My_PHPMailer');
        $this->load->model('Global_model');
    }
    
    function load_view_persona(){
         $this->load->view('header');
		$this->load->view('_frm_persona_registra');
        $this->load->view('footer');
    }
    
    // cargamos el formulario de registro basico de la persona
    function vregis(){
         $this->load->view('header');
		$this->load->view('_frm_person_reg');
        $this->load->view('footer'); 
    }
    
    function registro_basico_persona(){    
        $Rowdate = $this->Global_model->datetime();
        
        $data_rep="";/*array(          
        "nombres" => ltrim(rtrim($this->input->post('nombres'))),
	"email" => ltrim(rtrim($this->input->post('email'))),
        "password"=> ltrim(rtrim($this->input->post('password'))),
        "fecha_reg"=> $Rowdate->smalldatetime,
	"estado" => '0'
           );*/
        
        // consultamos si ya existe un correo similar registrado por el mismo o otro persona
        $Pk_Person = false; //$this->Persona_model->Valid_Id_Correo(ltrim(rtrim($this->input->post('email'))));
        
        $Response =array();
        if (!$Pk_Person){
            
            // insertamos datos en la tabla persona
            $resp_rep = true; //$this->Persona_model->insert_persona("PERSONA",$data_rep);
            
            if ($resp_rep){
                // seleccionamos el codigo de la persona
                $Pkpersona = 5;//$this->Persona_model->Valid_Id_Correo(ltrim(rtrim($this->input->post('email'))));

               $mdcinco = md5($Pkpersona);
               $ahref= "<a href='".base_url('persona/valid/'.$mdcinco.'')."'>".base_url('persona/valid/'.$mdcinco.'')."</a>"; 
                // se  envia un mensage para que conteste lo cual se va a validar
                    $mail = new PHPMailer();
                $mail->IsSMTP();
                //$mail->SMTPDebug  = 2;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465;
                $mail->Username = "noejgb@gmail.com";
                $mail->Password = "basura123";

                $mail->From = "noejgb@gmail.com";
                $mail->FromName = "INTICO CHILE SOCIEDAD ANONIMA CERRADA";
                $mail->Subject = "Confirme sus datos";
                //$mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
                $nombres = $this->input->post('nombres');
                $mail->MsgHTML("Hola $nombres.<br> Para darte de alta en RUEDA DE NEGOCIOS,<br>por fabor haga click en el LINK inferior que le enviamos para confirmar sus datos.<br>Gracias.<br>$ahref");
                //$mail->AddAttachment("application/libraries/PHPMailer/files/files.zip");
                //$mail->AddAttachment("application/libraries/PHPMailer/files/img03.jpg");
                $mail->AddAddress($this->input->post('email'), "Destinatario");
                //$mail->IsHTML(true);
                
                $Response['respuesta'] = true;                 
                $Response['email'] = true;
                if(!$mail->Send()) {            
                 $Response['emailMsg'] = $mail->ErrorInfo; 
                 $Response['email'] = false;
                }
                // fin de envio correos                       
            }else{
                $Response['respuesta'] = false;
                $Response['email'] = '';

            }            
            
            
                
        }else{
            $Response['emailExist'] = true;
        }
         echo json_encode($Response);
        
    }
    
    // validamos el link de confirmacion del correo del usuario
    function valid(){
             $md5Valid = $this->uri->segment(3);
             
             // Ejecutamos un SP para validar  comparando
            $Datos  = $this->Persona_model->Get_Correo($md5Valid);
            $valor['debug'] = $Datos;
            $valor['Id'] ="";
            // cambiamos de estado del usuario despues de validar el LINK
            if ($Datos>0){
               $Resp = $this->Persona_model->update_estado($Datos);
               if ($Resp){
                   $valor['upda']= "Actualizado";
                   
                   // traemos datos para enviar a la vista de confirmacion
                   $SQLs = "SELECT nombres, email FROM PERSONA WHERE id_persona='".$Datos."'";
                   $GetRow = $this->Persona_model->Query_Person($SQLs);
                   $valor['Id'] = $Datos;
                   $valor['nombres'] = $GetRow->nombres;
                   $valor['email'] = $GetRow->email;                  
               }
            }
            
            $this->load->view('header');
            $this->load->view('_confirm_data_url',$valor);
            $this->load->view('footer');
             
    }
    // grabamos el registro de personas
    function save_persona(){ 
        
        $data_rep=array(          
        "nombres" => $this->input->post('nombres'),
	"email" => $this->input->post('email'),
        "password"=> $this->input->post('password'), 
	"telefono" => $this->input->post('telefono'),
	"celular" => $this->input->post('celular'),	
	"estado" => '0', // valor 1  activo
	"interes" => $this->input->post('interes'),
        "cargo" => $this->input->post('cargo')
           );
        
        // insertamos datos en la tabla persona
        $resp_rep = $this->Persona_model->insert_persona("PERSONA",$data_rep);
        
        
        // insertamos el usuario y la clave del representate
        /*$Pkpersona = $this->persona_model->get_id_persona($pkEmpresa);
        $data_user = array(
            "nombre_usuario" => $this->input->post('nombre_usuario'),
            "password" => $this->input->post('password'),
            "id_persona" => $Pkpersona
        );        
        $this->Usuario_model->insert_usuario("USUARIO", $data_user);*/
        
        
        if ($resp_rep){
            // eliminamos session pkEmpresa  
            //$this->session->unset_userdata('pkEmpresa');
            
             echo "true";            
        }else{
             echo "false";
        }
    }
    
     // cargamos la página de  inicio para administrar la rueda de negocios para el usuario de la  empresa
    function adm_ruedav(){
        
		$Data['Nombre'] = $this->session->userdata('nombres');
		$Data['id_persona'] = $this->session->userdata('id_persona');
		 
		$this->load->view('header');
		$this->load->view('adm_rueda_user',$Data);
        $this->load->view('footer');
    }
    
    function getperfil(){
        $id = $this->uri->segment(3);
        // traemos datos para enviar a la vista de confirmacion
                   $SQLs = "SELECT id_persona,
                                    nombres,
                                    nro_doc_identidad,
                                    email,
                                    password,
                                    telefono,
                                    celular,
                                    estado,
                                    fecha_reg,
                                    interes,
                                    lugar_trabajo,
                                    cargo,
                                    id_empresa FROM PERSONA WHERE id_persona='".$id."'";
                   
                   $GetRow = $this->Persona_model->Query_Person($SQLs);
                   
                   $Rows['data']= $GetRow;
                   
                   
	$this->load->view('_frm_perfil.php',$Rows);        
    }
    
    
    function getGridEventAsist(){
        $this->load->view('grid_list_persona_asiste_evento','');        
    }
    
    function getGridListContac(){
        $this->load->view('grid_list_contactos','');        
    }
    
    function getGridListContacBuscar(){
        $this->load->view('GridBuscarContactos','');        
    }
    
    function getGridRegistroParticipante(){
        $this->load->view('GridRegistroParticipantes','');  
    }
    
    function getFrmRegistroActivarParticipante(){
        $this->load->view('FrmActivarParticipantes','');  
    }
    
    function getGridAdminActivarEvento(){
        $this->load->view('GridAdminActiveEvent','');  
    }
    function getFrmdAdminActivarEvento(){
        $this->load->view('_frm_activar_eventos','');  
    }
    
    
    function actualiza_perfil_persona(){    
        
        
        $data = array(          
                        "nombres" => ltrim(rtrim($this->input->post('nombres'))),
                        "email" => ltrim(rtrim($this->input->post('email'))),
                        "password"=> ltrim(rtrim($this->input->post('password'))),
                        "nro_doc_identidad"=>ltrim(rtrim($this->input->post('nro_doc_identidad'))),
                        "telefono"=>ltrim(rtrim($this->input->post('telefono'))),
                        "celular"=>ltrim(rtrim($this->input->post('celular'))),
                        "lugar_trabajo"=>ltrim(rtrim($this->input->post('lugar_trabajo'))),
                        "cargo"=>ltrim(rtrim($this->input->post('cargo'))),
                        "password"=>ltrim(rtrim($this->input->post('password')))
                   );
        
        $Response =array();     
            
            // insertamos datos en la tabla persona
            $resp_rep = $this->Persona_model->update_persona($this->input->post('idPersona'), $data);
            
            if ($resp_rep){              
                          
                $Response['respuesta'] = true;
                                     
            }else{
                $Response['respuesta'] = false;
              

            }   
        
         echo json_encode($Response);
        
    }
    
}
