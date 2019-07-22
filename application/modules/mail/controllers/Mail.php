<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends MX_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->library('session');
 		$this->load->library('email');
 	}
 	
	public function index()
	{
		$this->load->view('contact');
	}

	public function contacto()
	{
		//configurar solo estas 2 lineas
		$email_to = "contacto@einco.cl";
		$email_subject = "[Einco.cl] Mensaje desde el formulario de contacto";
		$email_from = "contacto@einco.cl";

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . utf8_decode($_POST['name']) . "\n";
    $email_message .= "E-mail: " . utf8_decode($_POST['email']) . "\n";
    $email_message .= "Asunto: " . utf8_decode($_POST['subject']) . "\n";
    $email_message .= "Mensaje: " . utf8_decode($_POST['message']) . "\n";

    // Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
		  redirect(base_url("mail"));

	}

	public function contact()
	{
		//Cargamos la librería email
       $this->load->library('email');
  
       //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'mail.ylit.cl'; // 'smtp.gmail.com';
         
       //Nuestro usuario
        $config["smtp_user"] = 'lnavarro@ylit.cl'; //'luis.navarro.arenas@gmail.com'; 
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'l1u2i3s4n5:)';   
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '465';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido 
       $config['validate'] = true;
       
      //Establecemos esta configuración
        $this->email->initialize($config);
 
      //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('lnavarro@ylit.cl', 'Contacto Einco');
         
      /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
        $this->email->to('contacto@clitzonan.cl', 'Contacto');
         
      //Definimos el asunto del mensaje
        $this->email->subject($this->input->post("subject"));
         
      //Definimos el mensaje a enviar
        $this->email->message(
        		"Nombre: ".$this->input->post("name").
                "Email: ".$this->input->post("email").
                " Mensaje: ".$this->input->post("message")
                );
         
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
        }else{
            $this->session->set_flashdata('envio', 'No se a enviado el email');
        }
         
        redirect(base_url());

	}



}
