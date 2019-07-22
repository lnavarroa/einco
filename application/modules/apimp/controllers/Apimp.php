<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Apimp extends MX_Controller {

	public function __construct()
 	{
 		parent::__construct();
 	}
 	
	public function index_()
	{
		$config = array('server' 		=> 'http://api.mercadopublico.cl/servicios/v1/Publico/Empresas/',
					//'api_key'			=> 'Setec_Astronomy'
					//'api_name'		=> 'X-API-KEY'
					//'http_user' 		=> 'username',
					//'http_pass' 		=> 'password',
					//'http_auth' 		=> 'basic',
					//'ssl_verify_peer' => TRUE,
					//'ssl_cainfo' 		=> '/certs/cert.pem'
					);

		// Run some setup

		$this->rest->initialize($config);

		$mercadopublico = $this->rest->get('http://api.mercadopublico.cl/servicios/v1/Publico/Empresas/');
		var_dump($mercadopublico);
		//$this->load->view('apiView',$mercadopublico);
	}

	function index__()
	{
    	$this->load->library('rest', array(
        	'server' => 'http://api.mercadopublico.cl/',
        	'http_user' => 'admin',
        	'http_pass' => '1234',
        	'http_auth' => 'basic' // or 'digest'
    	));
     	
    	$user = $this->rest->get('servicios/v1/Publico/Empresas/');
    	//echo $user;
    	$this->response($user);
//     	$this->load->view('apiView',$user);
    	//echo $user->name;
	}

	public function contacto()
	{
		$this->load->view('contact');
	}

	public function index()
	{
		$config = array('server' 		=> 'http://api.mercadopublico.cl/',
					//'api_key'			=> 'Setec_Astronomy'
					//'api_name'		=> 'X-API-KEY'
					//'http_user' 		=> 'username',
					//'http_pass' 		=> 'password',
					//'http_auth' 		=> 'basic',
					//'ssl_verify_peer' => TRUE,
					//'ssl_cainfo' 		=> '/certs/cert.pem'
					);

		// Run some setup
		$this->rest->initialize($config);
		$test = $this->rest->get('servicios/v1/Publico/Empresas/BuscarProveedor?rutempresaproveedor=70.017.820-k&ticket=F8537A18-6766-4DEF-9E59-426B4FEE2844');
		/*foreach ($test as $key => $value) {
		 	echo json_encode($key)."  ";
		 } 

		 echo "<br>";
		 		
		 foreach ($test as $key => $value) {
		 	echo json_encode($value)."  ";
		 }
		 echo "<br>";

		 foreach ($test as $campo => $valores) {
		 	echo $campo." = ".json_encode($valores)."<br>";
		 }
*/

		//echo json_encode($test,TRUE);
		//print_r($test);
		//test link http://api.mercadopublico.cl/servicios/v1/Publico/Empresas/BuscarProveedor?rutempresaproveedor=70.017.820-k&ticket=F8537A18-6766-4DEF-9E59-426B4FEE2844

		/*return $this->output
						->set_content_type('application/json')
						->set_header('Content-Type: application/json; charset=utf-8')
					 	->set_output(json_encode(array($key),array($value)));*/
					 

		$this->load->view('apiView',$test);

					 	/*
    $jsonObject = json_decode($datos);
    echo "------- Sólo valores -------\n\n";
    foreach ($jsonObject->rates as $v){
        echo "$v\n";
    }
					 	*/

		//return $mercadopublico = $this->rest->get('statuses/user_timeline/'.$username.'.xml');
		//return $mercadopublico = $this->rest->get('http://api.mercadopublico.cl/servicios/v1/Publico/Empresas/');
		//return $this->rest->get('http://api.mercadopublico.cl/servicios/v1/Publico/Empresas/');
	}

}
