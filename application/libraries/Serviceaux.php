 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Serviceaux extends CI_Controller{
	
	public function gette()
	{
		//$this->load->library('rest');

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



		//return $mercadopublico = $this->rest->get('statuses/user_timeline/'.$username.'.xml');
		return $mercadopublico = $this->rest->get();
		//return $this->rest->get('http://api.mercadopublico.cl/servicios/v1/Publico/Empresas/');
	}
}
