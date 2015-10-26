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
			"img_curriculum" => $this->Cirujano_model->get_curriculum_img()->result(),
			"datos_personales" => $this->Cirujano_model->ver_datos_contacto()->result(),
			"testimonios_inicio" => $this->Cirujano_model->get_testimonios_aprobados_inicio()->result()
			]);
	}

	public function procedimientos(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header',[
			"ruta_esp" => $this->config->base_url()."index.php/web/procedimientos",
			"ruta_por" => $this->config->base_url()."index.php/por/procedimientos"
			]);
		$this->load->view('fronted_inicio/procedimientos', ["procedimientos" => $this->Cirujano_model->get_procedimientos()->result()] );
		$this->load->view('fronted_inicio/footer');
	}

	public function testimonios(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header',[
			"ruta_esp" => $this->config->base_url()."index.php/web/testimonios",
			"ruta_por" => $this->config->base_url()."index.php/por/testimonios"
			]);
		$this->load->view('fronted_inicio/testimonios', ["testimonios" => $this->Cirujano_model->get_testimonios_aprobados()->result()] );
		$this->load->view('fronted_inicio/footer');
	}



	public function galeria(){
		$procedimientos = $this->Cirujano_model->get_procedimientos()->result();

		foreach($procedimientos as $proc){
			$info = array($proc->detalle, $proc->titulo);
			$i = $this->Cirujano_model->ver_img_procedimientos($proc->id_procedimiento)->result();
			foreach($i as $a){
				$a->sub = $proc->sub_titulo;
				$a->titulo = $proc->titulo;
				$a->img_principal = $proc->img_principal_procedimiento;
			}
			$imgs[] = $i;
		}
//            echo "<pre>";
//            print_r($imgs);
//            echo "</pre>";
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header',[
			"ruta_esp" => $this->config->base_url()."index.php/web/galeria",
			"ruta_por" => $this->config->base_url()."index.php/por/galeria"
			]);
		$this->load->view('fronted_inicio/galeria', ["galeria" => $imgs] );
		$this->load->view('fronted_inicio/footer');
		;
	}
}
