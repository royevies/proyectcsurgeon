	<?php if ( ! defined('BASEPATH')) exit('Acceso denegado a este script');
	
	class Cirujano_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}


		public function val_log($usuario,$clave){
			$query = $this->db->query("select * from usuario where usuario = '$usuario' and clave = '$clave' ");
			return $query;
		}

		public function get_procedimientos(){
			$query = $this->db->query("SELECT * FROM procedimientos as p left outer join contenido_procedimiento as c on p.id_procedimiento = c.id_procedimiento GROUP BY p.id_procedimiento");
			return $query;	
		}

		public function get_procedimientos_por(){
			$query = $this->db->query("SELECT * FROM procedimientos as p left outer join contenido_procedimiento as c on p.id_procedimiento = c.id_procedimiento where id_idioma = 2 GROUP BY p.id_procedimiento");
			return $query;
		}

		public function get_contactos(){
			$query = $this->db->query("select * from contacto order by fecha_contacto desc");
			return $query;	
		}

		public function del_contacto( $id_contacto ){
			$this->db->query("delete from contacto where id_contacto = $id_contacto");
		}

		public function del_procedimiento( $id_procedimiento){
			$this->db->query("delete from contenido_procedimiento where id_procedimiento = $id_procedimiento");
			$this->db->query("delete from img_procedimientos where id_procedimiento = $id_procedimiento");
			$this->db->query("delete from procedimientos where id_procedimiento = $id_procedimiento");			
		}

		public function curriculum( $contenido_curriculum ){
			$this->db->insert("asignacion_direccion_interna", [ "curriculum_completo" => $contenido_curriculum ] );
		}

		public function get_curriculum(){
			$query = $this->db->query("select * from contenido_curriculum where id_idioma = 1 ");
			return $query;	
		}

		public function get_curriculum_por(){
			$query = $this->db->query("select * from contenido_curriculum where id_idioma = 2 ");
			return $query;	
		}

		public function get_curriculum_img(){
			$query = $this->db->query("select * from curriculum_doc where id_curriculum = 1 ");
			return $query;	
		}

		public function no_vistos(){
			return $this->db->query("select * from contacto where visto = 0");
		}

		public function actualizar_visto($id_contacto){
			$this->db->query("update contacto set visto = 1 where id_contacto = $id_contacto");
		}

		public function actualizar_curriculum($id_curriculum,$curriculum_completo,$curriculum_completo_portugues,$img_curriculum){
			$this->db->query("update contenido_curriculum set curriculum_completo= '$curriculum_completo' where id_curriculum = $id_curriculum and id_idioma = 1");
			$this->db->query("update contenido_curriculum set curriculum_completo= '$curriculum_completo_portugues' where id_curriculum = $id_curriculum and id_idioma = 2");
			$this->db->query("update curriculum_doc set img_curriculum = '$img_curriculum' where id_curriculum = $id_curriculum");
		}

		public function get_procedimiento_idiomas($id_procedimiento){
			//$query =  $this->db->query("select GROUP_CONCAT(titulo,'(-------idioma-------)') titulo,GROUP_CONCAT(sub_titulo,'(-------idioma-------)') sub_titulo,GROUP_CONCAT(detalle,'(-------idioma-------)') detalle from contenido_procedimiento where id_procedimiento = $id_procedimiento order by id_idioma asc");					
			$query = array();
			$query[0] = $this->db->query("select * from contenido_procedimiento where id_procedimiento = $id_procedimiento and id_idioma = 1");
			$query[1] = $this->db->query("select * from contenido_procedimiento where id_procedimiento = $id_procedimiento and id_idioma = 2");

			return $query;
		}

		public function actualizar_procedimiento($id_procedimiento,$titulo,$titulo_portugues,$subtitulo,$subtitulo_portugues,$detalle,$detalle_portugues,$img_procedimiento){
			$this->db->query("update contenido_procedimiento set titulo= '$titulo',sub_titulo ='$subtitulo', detalle= '$detalle' where id_procedimiento = $id_procedimiento and id_idioma = 1");
			$this->db->query("update contenido_procedimiento set titulo= '$titulo_portugues',sub_titulo ='$subtitulo_portugues', detalle= '$detalle_portugues' where id_procedimiento = $id_procedimiento and id_idioma = 2");
			$this->db->query("update procedimientos set img_principal_procedimiento ='$img_procedimiento' where id_procedimiento = $id_procedimiento");
		}

		public function insert_galeria($nombreArchivos,$num_archivos){

			for($i=0; $i < $num_archivos; $i++){ /*$insertar_file=*/
				$this->db->insert('galeria',array(
					"nombre_img"		=>$nombreArchivos[$i]
					)
				);
		   	}#llave for
		   }

		   public function crear_procedimiento($titulo,$titulo_portugues,$sub_titulo,$sub_titulo_portugues,$detalle,$detalle_portugues,$img_procedimiento){
		   	$this->db->insert("procedimientos", [ "img_principal_procedimiento" => $img_procedimiento ] );

		   	$id_procedimiento = $this->db->insert_id();

		   	$this->db->insert("contenido_procedimiento", [ "id_procedimiento" => $id_procedimiento , "titulo" => $titulo , "sub_titulo" => $sub_titulo , "detalle" => $detalle  ,"id_idioma" => 1] );
		   	$this->db->insert("contenido_procedimiento", [ "id_procedimiento" => $id_procedimiento , "titulo" => $titulo_portugues , "sub_titulo" => $sub_titulo_portugues , "detalle" => $detalle_portugues ,"id_idioma" => 2 ] );
		   }

		   public function get_testimonios(){
		   	$query = $this->db->query("select * from testimonios");
		   	return $query;	
		   }

		   public function procesar_testimonio($id_testimonio,$aprobado){
		   	$this->db->query("update testimonios set aprobado= $aprobado where id_testimonio = $id_testimonio ");
		   }

		   public function eliminar_testimonio($id_testimonio){
		   	$this->db->query("delete from testimonios where id_testimonio = $id_testimonio");
		   }


		   public function crear_contacto($nombres_contacto,$servicio,$telefono_movil_contacto,$email_contacto,$asunto_contacto,$descripcion_contacto){
		   	$this->db->insert("contacto", [ "nombres_contacto" => $nombres_contacto , "servicio" => $servicio , "telefono_movil_contacto" => $telefono_movil_contacto , "email_contacto" => $email_contacto, "asunto_contacto" => $asunto_contacto, "descripcion_contacto" => $descripcion_contacto ,"fecha_contacto" => date("Y-m-d") ] );
		   }

		   public function ver_img_procedimientos($id_procedimiento){
		   	return  $this->db->query("select * from img_procedimientos where id_procedimiento = $id_procedimiento ");
		   }


		   public function actualizar_clave($usuario,$clave){
		   	$update="update usuario set clave = '$clave' where usuario = '$usuario' ";
		   	$this->db->query($update);
		   }

		   public function crear_parejas($id_procedimiento,$img_antes,$img_despues){
		   	$this->db->insert("img_procedimientos", [ "id_procedimiento" => $id_procedimiento , "img_antes" => $img_antes , "img_despues" => $img_despues ] );
		   }

		   public function eliminar_parejas($id_pareja){
		   	$this->db->query("delete from img_procedimientos where id_img_procedimiento = $id_pareja");
		   }

		   public function ver_datos_contacto(){
		   	return  $this->db->query("select * from datos_contacto ");
		   }

		   public function cambiar_datos($direccion,$email,$telefono,$fax,$facebook,$twiiter,$instagram,$googlepluss){
		   	$this->db->query("update datos_contacto set direccion = '$direccion', email = '$email' , telefono ='$telefono' ,fax ='$fax' ,facebook ='$facebook' ,twitter ='$twiiter' ,instagram ='$instagram' ,googlepluss ='$googlepluss'  where id_datos_contacto = 1 ");
		   }
		   /*******************************Llave clase********************************************/
		}