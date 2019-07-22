<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_globalviews extends CI_Controller {
/*
	public function __construct()
 	{
 		parent::__construct();
 	}*/

 
	public function header()
	{
		$this->load->view('global_views/header');
	}

	//funcion para cargar el footer
	public function footer()
 	{
		$this->load->view('global_views/footer');
 	}

}
