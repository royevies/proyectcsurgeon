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
		$this->load->view('fronted_inicio/index',[
			"procedimientos" => $this->Cirujano_model->get_procedimientos(),
			"curriculum"     => $this->Cirujano_model->get_curriculum()->result(),
			"img_curriculum"     => $this->Cirujano_model->get_curriculum_img()->result()
			]);
	}

	public function por(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/index_por',[
			"procedimientos" => $this->Cirujano_model->get_procedimientos_por(),
			"curriculum"     => $this->Cirujano_model->get_curriculum_por()->result(),
			"img_curriculum"     => $this->Cirujano_model->get_curriculum_img()->result()
			]);
	}

	public function procedimientos(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header');
		$this->load->view('fronted_inicio/procedimientos', ["procedimientos" => $this->Cirujano_model->get_procedimientos()->result()] );
		$this->load->view('fronted_inicio/footer');
	}

	public function testimonios(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header');
		$this->load->view('fronted_inicio/testimonios', ["testimonios" => $this->Cirujano_model->get_testimonios()->result()] );
		$this->load->view('fronted_inicio/footer');
	}
}
