<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
 	{
 		parent::__construct();
 	}
 	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('carousel');
		$this->load->view('qsomos');
		$this->load->view('mvision');
		$this->load->view('valores');
		$this->load->view('organigrama');
		$this->load->view('servicios');
		$this->load->view('contacto');
		$this->load->view('footer');		
	}

	public function contacto()
	{
		$this->load->view('contact');
	}

}
