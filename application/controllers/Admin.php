	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin  extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			
			$this->load->helper('url');
			$this->load->model('Cirujano_model');
		}

		public function index()
		{
			if( $this->session->userdata('usuario') ){
				
				redirect('Admin/panel');

			}else{
				
				$this->load->view("layout/head.php",[ "titulo" => "Login"]);
				$this->load->view("login");				

			}

		}

		public function valogin(){

			//print_r($_POST);
			if( $this->input->post() ){

				$usuario = $this->input->post("usuario");
				$clave   = sha1( $this->input->post("clave") );
				//echo md5($clave);
				//$this->Cirujano_model->val_log($usuario,$clave)->result();

				$num_rows = $this->Cirujano_model->val_log($usuario,$clave)->num_rows();

				if( $num_rows > 0){
					$sesion = array();

					$sesion =array('usuario' => $usuario,
						'login'   => true
						);

					$this->session->set_userdata($sesion);

					redirect('Admin/panel');
				}else{
					redirect('Admin?error');
				}

			}else{
				redirect('Admin');
			}

		}

		public function panel(){
			if($this->session->userdata('usuario')){
				
				$this->load->view("layout/head.php",[ "titulo" => "Panel administrativo"]);
				$this->load->view("admin/menu");
				$this->load->view("admin/cuerpo",[ 
					"usuario" => $this->session->userdata('usuario') , 
					"procedimientos" => $this->Cirujano_model->get_procedimientos(),
					"contactos" => $this->Cirujano_model->get_contactos(),
					"curriculum" => $this->Cirujano_model->get_curriculum(),
					"galeria" => $this->Cirujano_model->get_galeria(),
					"testimonios" => $this->Cirujano_model->get_testimonios()
					]);

			}else{
				redirect('Admin');
			}

		}

		

		public function procesar_testimonio(){
			if( $this->input->post() ){
				$id_testimonio = $this->input->post("id_testimonio_aprobado");
				$aprobado = $this->input->post("aprobar");

				$this->Cirujano_model->procesar_testimonio($id_testimonio,$aprobado);

				redirect('Admin');
			}else{
				redirect('Admin');
			}

		}

		public function eliminar_testimonio(){
			if( $this->input->post() ){

				$id_testimonio = $this->input->post("id_eliminar_testimonio");

				$this->Cirujano_model->eliminar_testimonio($id_testimonio);

				redirect('Admin');
			}else{
				redirect('Admin');
			}

		}



		public function eliminar_contacto(){
			if( $this->input->post() ){
				$id_contacto = $this->input->post("id_eliminar_contacto");
				$this->Cirujano_model->del_contacto($id_contacto);
				redirect('Admin');
			}else{
				redirect('Admin');
			}

		}

		public function eliminar_procedimiento(){
			if( $this->input->post() ){
				$id_proc = $this->input->post("id_eliminar_procedimiento");
				$this->Cirujano_model->del_procedimiento($id_proc);
				redirect('Admin');
			}else{
				redirect('Admin');
			}

		}

		public function editar_proc(){
			if( $this->input->post() ){
				$id_procedimiento = $this->input->post("id_procedimiento");

				$titulo = $this->input->post("nombre_procedimiento");
				$subtitulo = $this->input->post("subtitulo_procedimiento");
				$detalle = $this->input->post("detalle_procedimiento");

				$uploads_procedure_update ='./fronted_inicio/procedimientos/';
				$img_procedimiento_nueva = $_FILES["nueva_img_procedimiento"]["name"];

				opendir($uploads_procedure_update);

				move_uploaded_file($_FILES["nueva_img_procedimiento"]["tmp_name"],$uploads_procedure_update.$img_procedimiento_nueva);

				$this->Cirujano_model->actualizar_procedimiento($id_procedimiento,$titulo,$subtitulo,$detalle,$img_procedimiento_nueva);
				redirect('Admin');
			}else{
				redirect('Admin');
			}

		}

		public function editar_curriculum(){
			if( $this->input->post() ){
				$curriculum_completo = $this->input->post("text_curriculum");
				$this->Cirujano_model->actualizar_curriculum($curriculum_completo);
				redirect('Admin');
			}else{
				redirect('Admin');
			}
		}

		public function insert_galeria(){
			/*echo "<pre>";
			print_r($_FILES);
			echo "</pre>";*/
			if( $this->input->post() ){

				$nombre_archivos = array();

				$uploads_dir ='./fronted/img/cirujano/galeria/';
				opendir($uploads_dir);

				foreach ($_FILES["archivosgaleria"]["error"] as $key => $error){
					if ($error == UPLOAD_ERR_OK){
						if(  $_FILES["archivosgaleria"]["name"] != null){
							$tmp_name 		= $_FILES["archivosgaleria"]["tmp_name"][$key];
							$nombre_archivo = $_FILES["archivosgaleria"]["name"][$key];
							$nombre_archivos[] = $_FILES["archivosgaleria"]["name"][$key];
							move_uploaded_file($tmp_name,$uploads_dir.$nombre_archivo);

						}

					}
				}    

				$num_archivos = sizeof($nombre_archivos);

				$this->Cirujano_model->insert_galeria($nombre_archivos,$num_archivos);
				redirect('Admin');

			}else{
				redirect('Admin');
			}			

		}


		public function crear_procedimiento(){
			/*echo "<pre>"; print_r($_POST);echo "</pre>";*/
			if( $this->input->post() ){
				$titulo = $this->input->post("nombre_procedure");
				$sub_titulo = $this->input->post("subtitulo_procedure");
				$detalle = $this->input->post("detalle_procedure");


				$uploads_procedure ='./fronted_inicio/procedimientos/';
				$img_procedimiento = $_FILES["img_procedimiento"]["name"];

				opendir($uploads_procedure);

				move_uploaded_file($_FILES["img_procedimiento"]["tmp_name"],$uploads_procedure.$img_procedimiento);

				$this->Cirujano_model->crear_procedimiento($titulo,$sub_titulo,$detalle,$img_procedimiento);

				redirect("Admin");
			}else{
				redirect("Admin");
			}

		}

		public function cambiar_clave(){
			if( $this->input->post() && $this->session->userdata('usuario') ){

				$usuario = $this->session->userdata('usuario');
				$clave = sha1( $this->input->post("clave") );

				$this->Cirujano_model->actualizar_clave($usuario,$clave);
				redirect("Admin");
			}else{
				redirect("Admin");
			}
			
		}

		public function crear_contacto(){

			if( $this->input->post() ){

				$nombres_contacto	= $this->input->post("template-contactform-name");
				$servicio	= $this->input->post("template-contactform-service");
				$telefono_movil_contacto	= $this->input->post("template-contactform-phone");
				$email_contacto	= $this->input->post("template-contactform-email");
				$asunto_contacto	= $this->input->post("template-contactform-subject");
				$descripcion_contacto	= $this->input->post("template-contactform-message");

				$this->Cirujano_model->crear_contacto(
					$nombres_contacto,
					$servicio,
					$telefono_movil_contacto,
					$email_contacto,
					$asunto_contacto,
					$descripcion_contacto
					);

				echo "Mensaje Enviado Exitosamente";

			}else{
				redirect( $this->config->base_url()."index.php/web" );
			}

		}


		///*************************************************************///
		public function salir(){
			$datasession = array();
			$this->session->unset_userdata($datasession);
			$this->session->sess_destroy();
			redirect("Admin");
		}
		///*************************************************************///
	}

