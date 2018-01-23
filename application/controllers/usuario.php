<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    //const C_TABLA = 'tbl_equipo';
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Empresa_model'); 
        $this->load->model('Usuario_model');
         $this->load->model('Persona_model');        
        //´para gestionar sessiones
        $this->load->library('session');
        /*$this->load->model('Global_model');*/
    }   
 
    //Si evalua si la  empresa  ya  existe
    function Obtener_Rut_Existente(){
        
        $Valor_Rut = $this->Empresa_model->get_rut($this->input->post('rut'));
        
        if ($Valor_Rut){
          echo $Valor_Rut;          
        }else{
          //cero
          echo "0";          
        }
    }
    
    
    function Upload_Image(){  
        if(isset($_FILES["file"]["type"])){
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]); 
            $file_extension = end($temporary);

            if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
                ) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
                && in_array($file_extension, $validextensions)) 
            {

            if ($_FILES["file"]["error"] > 0)
                    {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
            } 
                    else 
                    { 
                                    if (file_exists("upload/" . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
                                    } 
                                    else 
                                    {					
                                            $sourcePath = $_FILES['file']['tmp_name'];   // Storing source path of the file in a variable
                                            $targetPath = "upload/".$_FILES['file']['name'];  // Target path where file is to be stored
                                            move_uploaded_file($sourcePath,$targetPath) ; //  Moving Uploaded file						

                                            echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
                                            echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
                                            echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
                                            echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                                            echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";

                                    }				       
            }        
        }   
            else 
            {
            echo "<span id='invalid'>***Invalid file Size or Type***<span>";
        }
    }       
    }
    
     // carga el formulario de login para autentificarse
    function load_vlogin(){
         $this->load->view('header');
		$this->load->view('vlog');
        $this->load->view('footer');
    }
    
    //login del usuario
    function login(){       
        
        $Rows = $this->Usuario_model->login_user($this->input->post('userName'),$this->input->post('userPassword'));
        $Response = array();
        if (count($Rows)>0){           
         
            $SessionUser = array(
                   'id_persona'  => $Rows->id_persona,
                   'nombres'  => $Rows->nombres,
                   'email'  => $Rows->email                  
               );
               // guardamos en en session el array de usuarios
               $this->session->set_userdata($SessionUser);
                 
          // recuperando el valor de array de   sessiones
          //$this->session->userdata('session_id');   
          //$this->session->userdata('nombre').", ".$this->session->userdata('apellidos')
          $Response['respuesta'] = true;
          //$Response['nombres'] = $this->session->userdata('nombres');
          
        }else{        
           $Response['respuesta'] = false;
           $Response['nombres'] = '';
        }
        
         echo json_encode($Response);        
    }
    
    //login del usuario por URL de confirmacion de la PERSONA
    function login_url(){       
           
        $id = $this->input->post('idPer');
        
        $SQLs = "SELECT nombres, email FROM PERSONA WHERE id_persona='".$id."'";
        $GetRow = $this->Persona_model->Query_Person($SQLs);
        
        if (strlen($GetRow->nombres)>0){
            $SessionUser = array(
                   'id_persona'  => $this->input->post('idPer'),
                   'nombres'  => $GetRow->nombres,
                   'email'  => $GetRow->email                  
            );

            // guardamos en en session el array de usuarios
            $this->session->set_userdata($SessionUser);               
        }
          
        $EvalValor['Nombre'] = $this->session->userdata('nombres');
        $EvalValor['id_persona'] = $this->input->post('idPer');
        
        
        
        $this->load->view('header');        
        $this->load->view('adm_rueda_user', $EvalValor);        
        $this->load->view('footer');
    }
    
    // funcion para destruir sessiones
    function destroy(){
        $this->session->sess_destroy();
        
        $datos['nombre'] = $this->session->userdata('nombre');
        $datos['email'] = $this->session->userdata('email');   
        
        // cargamos las vistas pasando variables
        $this->load->view('header');
        //$this->load->view('v_sessions', $datos);
		$this->load->view('conten_home_default');
        $this->load->view('footer');
    }    
}