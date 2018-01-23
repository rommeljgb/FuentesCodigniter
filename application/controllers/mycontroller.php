<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycontroller extends CI_Controller {
    public function Mycontroller(){
        //parent::CI_Controller();
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('utilitarios_helper','url'));
        $this->load->library('My_PHPMailer');
    }
    public function send_mail() {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 2;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "noejgb@gmail.com";
        $mail->Password = "basura123";

        $mail->From = "noejgb@gmail.com";
        $mail->FromName = "jhimy";
        $mail->Subject = "Subject del Email";
        $mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
        $mail->MsgHTML("Hola, te doy mi nuevo numero<br><b>xxxx</b>.");
        //$mail->AddAttachment("application/libraries/PHPMailer/files/files.zip");
        //$mail->AddAttachment("application/libraries/PHPMailer/files/img03.jpg");
        $mail->AddAddress("jngb2013@gmail.com", "Destinatario");
        $mail->IsHTML(true);

        if(!$mail->Send()) {
          $debug = "Error: " . $mail->ErrorInfo;
        } else {
          $debug = "Mensaje enviado correctamente";
        }
        
        $valor['debug'] = $debug;
            
        $this->load->view('header');
        $this->load->view('send_email',$valor);
        $this->load->view('footer');
    }
}