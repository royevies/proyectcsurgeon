<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Por extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Cirujano_model');
	}

	public function index(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header_por',[
			"ruta_esp" => $this->config->base_url()."index.php/web/index"
			]);
		$this->load->view('fronted_inicio/index_por',[
			"procedimientos"     => $this->Cirujano_model->get_procedimientos_por(),
			"procs_inicio"       => $this->Cirujano_model->ver_procedimientos_inicio_por()->result(),
			"curriculum"         => $this->Cirujano_model->get_curriculum_por()->result(),
			"img_curriculum"     => $this->Cirujano_model->get_curriculum_img()->result(),
			"datos_personales"   => $this->Cirujano_model->ver_datos_contacto()->result(),
			"testimonios_inicio" => $this->Cirujano_model->get_testimonios_aprobados_inicio()->result(),
			"slider_master"      => $this->Cirujano_model->get_slider()->result(),
			"bonus_cirujano"     => $this->Cirujano_model->get_bonos_cirujano()->result()
			]);
	}

	public function procedimientos(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header_por',[
			"ruta_esp" => $this->config->base_url()."index.php/web/procedimientos",
			"ruta_por" => $this->config->base_url()."index.php/por/procedimientos"
			]);

		$this->load->view('fronted_inicio/procedimientos_por', [
			"procedimientos" => $this->Cirujano_model->get_procedimientos_por()->result()
			]);
		$this->load->view('fronted_inicio/footer',["datos_personales"   => $this->Cirujano_model->ver_datos_contacto()->result()]);
	}

	public function testimonios(){
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header_por',[
			"ruta_esp" => $this->config->base_url()."index.php/web/testimonios",
			"ruta_por" => $this->config->base_url()."index.php/por/testimonios"
			]);
		$this->load->view('fronted_inicio/testimonios_por', ["testimonios" => $this->Cirujano_model->get_testimonios_aprobados()->result()] );
		$this->load->view('fronted_inicio/footer',["datos_personales"   => $this->Cirujano_model->ver_datos_contacto()->result()]);
	}
        
        public function galeria(){
		$procedimientos = $this->Cirujano_model->get_procedimientos()->result();
		
		$this->load->view('fronted_inicio/head_inicio');
		$this->load->view('fronted_inicio/header_por',[
			"ruta_esp" => $this->config->base_url()."index.php/web/galeria",
			"ruta_por" => $this->config->base_url()."index.php/por/galeria"
			]);
		$this->load->view('fronted_inicio/galeria', ["galeria" => $procedimientos] );
		$this->load->view('fronted_inicio/footer',["datos_personales"   => $this->Cirujano_model->ver_datos_contacto()->result()]);
	}
	
	public function fotos($id){
		$images = $this->Cirujano_model->ver_img_procedimientos($id)->result();
		$this->load->view('fronted_inicio/fotos', ["imagenes" => $images] );
	}
        
        public function foto_inicio($id){
		$images = $this->Cirujano_model->ver_img_procedimientos($id)->result();
		$this->load->view('fronted_inicio/foto_inicio', ["imagenes" => $images] );
	}
}
