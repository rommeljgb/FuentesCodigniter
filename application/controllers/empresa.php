<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->model('Empresa_model');      
        //´para gestionar sessiones
        $this->load->library('session');
        /*$this->load->model('Global_model');*/
    }   
 
    function Obtener_Rut_Existente(){  
       
       // grabamos el persona d ela empresa
        $Valor_Rut = $this->Empresa_model->get_rut($this->input->post('rut'));
        
        if ($Valor_Rut){
          echo $Valor_Rut;          
        }else{
          //cero
          echo "0";          
        }
    }
    
    function save_empresa(){
            $this->Empresa_model->lista_empresa();

            // grabamos la empresa
            $data_emp= array(          
                "rut" => $this->input->post('rut'),
                "razon_social" =>  $this->input->post('razon_social'),
                "nombre_fantasia" => $this->input->post('nombre_fantasia'),
                "direccion_legal" => $this->input->post('direccion_legal'),
                "telefono" => $this->input->post('telefono'),
                "website" =>  $this->input->post('website'),
                "redsocial" => $this->input->post('redsocial'),
                "email" => $this->input->post('email'),
                "imagenlogo" => $this->input->post('imagenlogo'),        
                "direc_activ_comercial" => $this->input->post('direc_activ_comercial'),
                "giro_comercial" => $this->input->post('giro_comercial'),
                "perfil_empresa" => $this->input->post('perfil_empresa'),
                "id_ubigeo" => $this->input->post('id_ubigeo'),
                "id_rubro" => $this->input->post('id_rubro'),
                "id_persona" =>$this->input->post('pkPersona')               
            );

            $resp = $this->Empresa_model->insert_empresa("EMPRESA",$data_emp);

            // Seleccionamos el ID de la empresa
            $Idtable = $this->Empresa_model->get_id_empresa($this->input->post('rut'));

            // Guardamos  en una session el PK_empresa para usar
            // al  grabar personas de la empresa
            $SessionUser = array(
                        'pkEmpresa'  => $Idtable                  
                    );
            $this->session->set_userdata($SessionUser);


            if ($Idtable>0){
               echo "true";        
            }else{          
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
    
    function getGridEmpresa(){
       
       $id_persona = $this->session->userdata('id_persona');
       $Data['rows'] = $this->Empresa_model->get_empresa_list($id_persona);
       
       
        $this->load->view('grid_list_empresas',$Data);
    }
    
    function getEmpresa(){
       $this->load->view('_frm_empresa_registra');
    }
    
    function LoadComboEmpresa(){
       // consulta           
        $Data['rows'] = $this->Empresa_model->get_empresa_list($this->uri->segment(3));
        
        //eviamos a la vista los datos
        $this->load->view('cbo_empresa',$Data); 
    }    
}