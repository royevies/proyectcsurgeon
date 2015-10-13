<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Cirujano_model');
	}

	public function index()
	{
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/index');
	}

	public function procedimientos(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header');
		$this->load->view('fronted_inicio/procedimientos', ["procedimientos" => $this->Cirujano_model->get_procedimientos()] );
		$this->load->view('fronted_inicio/footer');
	}

	public function testimonios(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header');
		$this->load->view('fronted_inicio/testimonios');
		$this->load->view('fronted_inicio/footer');
	}
}
