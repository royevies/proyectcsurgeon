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
				$this->load->view("admin/menu", [ "novistos" => $this->Cirujano_model->no_vistos()->num_rows() ] );
				$this->load->view("admin/modals");

				$this->load->view("admin/cuerpo",[ 
					"usuario"        => $this->session->userdata('usuario') , 
					"procedimientos" => $this->Cirujano_model->get_procedimientos(),
					"contactos"      => $this->Cirujano_model->get_contactos(),
					"curriculum"     => $this->Cirujano_model->get_curriculum(),
					"curriculum_por" => $this->Cirujano_model->get_curriculum_por(),
					"curriculum_img" => $this->Cirujano_model->get_curriculum_img(),
					"testimonios"    => $this->Cirujano_model->get_testimonios(),
					"datos_contacto" => $this->Cirujano_model->ver_datos_contacto(),
					"slider_master"  => $this->Cirujano_model->get_slider()->result(),
					"bonus_cirujano" => $this->Cirujano_model->get_bonos_cirujano()->result()
					]);

			}else{
				redirect('Admin');
			}

		}

		
		public function datos_contacto(){
			if( $this->input->post() ){
				#print_r($_POST);
				$usuario = $this->input->post("usuario_sesion");
				$direccion  = $this->input->post("direccion");
				$email = $this->input->post("email");
				$clave_email = $this->input->post("clave_email");
				$telefono = $this->input->post("telefono");
				$fax = $this->input->post("fax");
				$facebook = $this->input->post("facebook");
				$twiiter = $this->input->post("twitter");
				$instagram = $this->input->post("instagram");
				$googlepluss = $this->input->post("gloogleplus");

				$this->Cirujano_model->cambiar_datos($direccion,$email,$clave_email,$telefono,$fax,$facebook,$twiiter,$instagram,$googlepluss);
				$this->Cirujano_model->cambiar_usuario($usuario);
				redirect("Admin/panel?msg=Los datos han sido actualizados");
			}else{
				redirect("Admin");
			}

		}


		public function guardar_testimonio(){
			if( $this->input->post() ) {		
				$nombres_del_descriptor = $this->input->post("template-testimonialform-name");
				$email_del_descriptor = $this->input->post("template-testimonialform-email");
				$titulo_testimonio = $this->input->post("template-contactform-subject");
				$detalle_testimonio = $this->input->post("template-contactform-message");
				$img_principal_testimonio = ( $_FILES["template-testimonialform-file"]["name"] == null ? "user.png" : $_FILES["template-testimonialform-file"]["name"] );

				$uploads_testimonios ='./fronted_inicio/testimonios/';
				opendir($uploads_testimonios);
				move_uploaded_file($_FILES["template-testimonialform-file"]["tmp_name"],$uploads_testimonios.$img_principal_testimonio);


				$this->Cirujano_model->crear_testimonios(
					$nombres_del_descriptor,
					$email_del_descriptor,
					$titulo_testimonio,
					$detalle_testimonio,
					$img_principal_testimonio
					);

				redirect("web?msg=Su testimonio se envio correctamente y esta en espera de aprobación, gracias por su comentario.");
			}else{
				redirect("web");
			}
		}

		/*
		public function procesar_testimonio(){
			if( $this->input->post() ){
				$id_testimonio = $this->input->post("id_testimonio_aprobado");
				$aprobado = $this->input->post("aprobar");

				$this->Cirujano_model->procesar_testimonio($id_testimonio,$aprobado);

				redirect('Admin/panel?msg=');
			}else{
				redirect('Admin');
			}

		}

		*/

		public function mostrar_testimonio_inicio(){
			/*echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			*/
			if( $this->input->post() ){

				$size = sizeof($this->input->post("id_testimonio"));
				$mensaje = "";

				if( $this->input->post("opcion_testimonio") == 'orden_inicio'){
					for ($i=0; $i < $size ; $i++) { 
						foreach ($this->Cirujano_model->ver_testimonios_especifico($this->input->post("id_testimonio")[$i])->result()  as $testid_orden) {
							
							if ( $testid_orden->orden_inicio == 0){								
								$this->Cirujano_model->procesar_testimonio_inicio($this->input->post("id_testimonio")[$i],1);
							}else{
								$this->Cirujano_model->procesar_testimonio_inicio($this->input->post("id_testimonio")[$i],0);
							}
						}
					}

					$mensaje = "Nuevo orden de muestra para los testimonios en el inicio actualizado";

				}elseif( $this->input->post("opcion_testimonio") == 'aprobado') {
					
					for ($i=0; $i < $size ; $i++) { 
						
						foreach ($this->Cirujano_model->ver_testimonios_especifico($this->input->post("id_testimonio")[$i])->result()  as $testid) {

							if ( $testid->aprobado == 0){
								$this->Cirujano_model->procesar_testimonio($this->input->post("id_testimonio")[$i],1);
							}else{
								$this->Cirujano_model->procesar_testimonio($this->input->post("id_testimonio")[$i],0);							 	
							}

						}						
					}

					$mensaje = "Testimonio(s) Aprobado(s)";

				}elseif( $this->input->post("opcion_testimonio") == 'eliminar' ) {
					for ($i=0; $i < $size ; $i++) { 
						$this->Cirujano_model->eliminar_testimonio($this->input->post("id_testimonio")[$i]);
					}

					$mensaje = "Testimonio(s) Eliminado(s)";

				}

				redirect("Admin/panel?msg=".$mensaje);

			}else{
				redirect("Admin");
			}

		}


		public function eliminar_contacto(){
			if( $this->input->post() ){

				$id_contacto = $this->input->post("id_contacto");
				$size_contact = sizeof($this->input->post("id_contacto"));

				for ($i=0; $i < $size_contact ; $i++) { 

					$this->Cirujano_model->del_contacto($id_contacto[$i]);

				}

				redirect('Admin/panel?msg=Contacto(s) Eliminado(s) correctamente.');
			}else{
				redirect('Admin');
			}

		}

		public function administrar_procedimiento(){
			if( $this->input->post() ){
				/*echo "<pre>";
				print_r($_POST);
				echo "</pre>";
				*/
				$alerta = "";
				$id_procedimiento = $this->input->post("id_procedimiento");
				$size_procedimiento = sizeof($this->input->post("id_procedimiento"));

				if( $this->input->post("opcion_procedimiento") == "orden_inicio" ){

					for ($i=0; $i < $size_procedimiento ; $i++) { 
						foreach ($this->Cirujano_model->ver_procedimiento_especifico($id_procedimiento[$i])->result() as $proc_inic) {

							if( $proc_inic->orden_inicio == 0 ){
								$this->Cirujano_model->procesar_procedimiento_inicio($id_procedimiento[$i],1);
							}else{
								$this->Cirujano_model->procesar_procedimiento_inicio($id_procedimiento[$i],0);
							}

						}

					}

					$alerta = "Orden de muestra para los procedimientos en el inicio actualizado";

				}elseif( $this->input->post("opcion_procedimiento") == "eliminar"){

					for ($i=0; $i < $size_procedimiento ; $i++) { 

						$this->Cirujano_model->del_procedimiento($id_procedimiento[$i]);

					}

					$alerta = "Procedimiento(s) Eliminado(s)";

				}



				#$id_proc = $this->input->post("id_eliminar_procedimiento");
				#$this->Cirujano_model->del_procedimiento($id_proc);

				redirect('Admin/panel?msg='.$alerta);
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

				$titulo_portugues = $this->input->post("nombre_procedimiento_portugues");
				$subtitulo_portugues = $this->input->post("subtitulo_procedimiento_portugues");
				$detalle_portugues = $this->input->post("detalle_procedimiento_portugues");

				$uploads_procedure_update ='./fronted_inicio/procedimientos/';
				$img_procedimiento_nueva = ( isset($_FILES["nueva_img_procedimiento"]["name"]) && $_FILES["nueva_img_procedimiento"]["name"] != null ? $_FILES["nueva_img_procedimiento"]["name"] : $this->input->post("imgsola") );

				opendir($uploads_procedure_update);

				move_uploaded_file($_FILES["nueva_img_procedimiento"]["tmp_name"],$uploads_procedure_update.$img_procedimiento_nueva);

				$this->Cirujano_model->actualizar_procedimiento($id_procedimiento,$titulo,$titulo_portugues,$subtitulo,$subtitulo_portugues,$detalle,$detalle_portugues,$img_procedimiento_nueva);

				redirect('Admin/panel?msg=Procedimiento actualizado');
			}else{
				redirect('Admin');
			}

		}

		public function procedimiento_edit_idioma(){

			if( $this->input->post() ){ 
				$id_procedimiento  =  $this->input->post("id_procedimiento");		

				$procedimientos = $this->Cirujano_model->get_procedimiento_idiomas($id_procedimiento);

				$spanish   = $procedimientos[0]->result();
				$portugues = $procedimientos[1]->result();


				foreach ($spanish as $procedure1) {

					$idioma["spanish"] = [
					"titulo"    =>  $procedure1->titulo ,
					"sub_titulo" =>  $procedure1->sub_titulo,
					"detalle"   =>  $procedure1->detalle
					];				
				}

				foreach ($portugues as $procedure2) {

					$idioma["portugues"] = [
					"titulo"    =>  $procedure2->titulo ,
					"sub_titulo" =>  $procedure2->sub_titulo,
					"detalle"   =>  $procedure2->detalle
					];				
				}

				echo json_encode($idioma);

			}else{
				redirect('Admin');
			}

		}

		public function editar_curriculum(){
			if( $this->input->post() ){

				$id_curriculum = $this->input->post("id_curriculum");
				$curriculum_completo = trim( $this->input->post("text_curriculum") );
				$curriculum_completo_portugues =trim(  $this->input->post("text_curriculum2") );
				$img_curriculum_nueva = ( isset($_FILES["img_curriculum"]["name"]) && $_FILES["img_curriculum"]["name"] != null ? $_FILES["img_curriculum"]["name"] : $this->input->post("img_curriculum_sola") );

				$this->Cirujano_model->actualizar_curriculum($id_curriculum,$curriculum_completo,$curriculum_completo_portugues,$img_curriculum_nueva);

				$uploads_curriculum_update ='./fronted_inicio/curriculum/';
				opendir($uploads_curriculum_update);
				move_uploaded_file($_FILES["img_curriculum"]["tmp_name"],$uploads_curriculum_update.$img_curriculum_nueva);

				redirect('Admin/panel?msg=La información del perfil profesional ha sido actualizada');
			}else{
				redirect('Admin');
			}
		}

		public function gestion_slider(){
			if( $this->input->post("opcion_slider") ){

				$nombre_archivos = array();

				$uploads_dir ='./fronted_inicio/slider/';
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
				redirect('Admin/panel?msg=Carrucel de imagenes actualizado');

			}else{
				redirect('Admin');
			}			

		}

		public function procesar_slider(){
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			$id_slider = $this->input->post("opciones_slider");
			$orden = $this->input->post("orden");
			$size_slider = sizeof($id_slider);

			if( $this->input->post() ){
				if( $this->input->post("opcion_flag_slider") == "ordenar" ){

					for ($i=0; $i < $size_slider ; $i++) { 

						$this->Cirujano_model->actualizar_orden_slider($id_slider[$i],$orden[$i]);
					}

					redirect('Admin/panel?msg=Carrucel de imagenes actualizado');

				}else if( $this->input->post("opcion_flag_slider")  == "eliminar"){

					for ($i=0; $i < $size_slider ; $i++) { 
						$this->Cirujano_model->eliminar_slider($id_slider[$i]);
					}

					redirect('Admin/panel?msg=Imagenes eliminadas del carrucel correctamente');
				}
				
			}else{
				redirect('Admin');
			}	
		}


		public function visto(){
			if( $this->input->post() ){
				
				$id_contacto =  $this->input->post("id_contacto");
				$this->Cirujano_model->actualizar_visto($id_contacto);

			}else{
				redirect('Admin');
			}

		}


		public function crear_procedimiento(){
			if( $this->input->post() ){
				$titulo = $this->input->post("nombre_procedure");
				$sub_titulo = $this->input->post("subtitulo_procedure");
				$detalle = $this->input->post("detalle_procedure");
				
				$titulo_portugues = $this->input->post("nombre_procedure_por");
				$sub_titulo_portugues = $this->input->post("subtitulo_procedure_por");
				$detalle_portugues = $this->input->post("detalle_procedure_por");

				$uploads_procedure ='./fronted_inicio/procedimientos/';
				$img_procedimiento = $_FILES["img_procedimiento"]["name"];

				opendir($uploads_procedure);

				move_uploaded_file($_FILES["img_procedimiento"]["tmp_name"],$uploads_procedure.$img_procedimiento);

				$this->Cirujano_model->crear_procedimiento($titulo,$titulo_portugues,$sub_titulo,$sub_titulo_portugues,$detalle,$detalle_portugues,$img_procedimiento);

				redirect("Admin/panel?msg=Procedimiento creado correctamente");
			}else{
				redirect("Admin");
			}

		}

		public function cambiar_clave(){
			if( $this->input->post() && $this->session->userdata('usuario') ){

				$usuario = $this->session->userdata('usuario');
				$clave = sha1( $this->input->post("clave") );

				$this->Cirujano_model->actualizar_clave($clave);
				redirect("Admin/panel?msg=Clave de acceso al administrador de contenido actualizada");
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

						//cargamos la libreria email de ci
				$this->load->library("email");

		//configuracion para gmail
				$configGmail = array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_port' => 465,
					'smtp_user' => 'jhonnyvanckruz@gmail.com',
					'smtp_pass' => 'sdfd',
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n"
					);    

		//cargamos la configuración para enviar con gmail
				$this->email->initialize($configGmail);

				$this->email->from('nombre o correo que envia');
				$this->email->to("para quien es");
				$this->email->subject('Nuevo contacto');
				$this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Bienvenido al blog');
				$this->email->send();

				echo "Mensaje Enviado Exitosamente";

			}else{
				redirect( $this->config->base_url()."index.php/web" );
			}

		}

		public function ver_img_procedimientos(){
			if( $this->input->post() ){

				$id_img_procedimiento = $this->input->post("id_procedimiento");

				if($this->Cirujano_model->ver_img_procedimientos($id_img_procedimiento)->result() != null){ 

					foreach ($this->Cirujano_model->ver_img_procedimientos($id_img_procedimiento)->result() as $imagenes) {
						echo "<div class='sobre_img_antes_despues' style='position:relative;border:1px solid black;float:left'>";
						echo '<div class="sobre_img_antes_despues_disparador" style="width:100%;height:100%;background:rgba(0,0,0,0.8);position:absolute;top:0;left:0;display:none;font-size:1.3em;color:white;padding-top:40px;text-align:center;" data-id="'.$imagenes->id_img_procedimiento.'" data-imgantes="'.$imagenes->img_antes.'" data-imgdespues="'.$imagenes->img_despues.'" ><span class="glyphicon glyphicon-fullscreen"></span> Ver Imagen<hr></div>';
						echo "<img src='".$this->config->base_url()."fronted_inicio/procedimientos/".$imagenes->img_antes."' style='width:140px;height:140px;cursor:pointer;'>";
						echo "<img src='".$this->config->base_url()."fronted_inicio/procedimientos/".$imagenes->img_despues."' style='width:140px;height:140px;cursor:pointer;'>";
						echo "</div>";
					}

				}else{
					echo "<div style='padding:25px;font-size:1.4em;'>'Este procedimiento no tiene imágenes relacionadas, por favor presione el boton 'Agregar imagen' para agregar una imagen a la galeria'.</div>";
				}

			}
			
		}

		public function crear_parejas(){
			
			if( $this->input->post() ){

				$id_procedimiento = $this->input->post("id_procedimiento");

				$img_pareja = $_FILES["img_antes"]["name"];
				$img_pareja2 = $_FILES["img_despues"]["name"];
				
				$galeria_procedure ='./fronted_inicio/procedimientos/';
				opendir($galeria_procedure);

				move_uploaded_file($_FILES["img_antes"]["tmp_name"],$galeria_procedure.$img_pareja);
				move_uploaded_file($_FILES["img_despues"]["tmp_name"],$galeria_procedure.$img_pareja2);
				
				$this->Cirujano_model->crear_parejas($id_procedimiento,$img_pareja,$img_pareja2);

				redirect("Admin/panel?msg=Imagenes Guardadas con exito.");
			}else{
				redirect("Admin");
			}
		}

		public function eliminar_img_parejas(){
			if( $this->input->post() ){
				
				$id_pareja =	$this->input->post("eliminar_pareja");
				$this->Cirujano_model->eliminar_parejas($id_pareja);
				redirect("Admin/panel?msg=Imagenes eliminadas");

			}else{
				redirect("Admin");
			}

		}

		public function bonus_cirujano(){
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
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

