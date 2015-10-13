<style>
	#animacion_logo{
		width:300px;
		height:auto;
		margin-top:100px;
		opacity:0.99;
		animation-duration:3s;
		animation-name:giro;
		animation-iteration-count:infinite;    

		-moz-animation-duration:3s;
		-moz-animation-name: giro;
		-moz-animation-iteration-count:infinite;   

		-webkit-animation-duration:3s;
		-webkit-animation-name: giro; 
		-webkit-animation-iteration-count:infinite;
	}


	@keyframes giro{
		25%{transform:rotateY(90deg);}
		50%{transform:rotateY(180deg);}
		75%{transform:rotateY(270deg);}
		100%{transform:rotateY(360deg);}
	}

	@-moz-keyframes giro{
		25%{-moz-transform:rotateY(90deg);}
		50%{-moz-transform:rotateY(180deg);}
		75%{-moz-transform:rotateY(270deg);}
		100%{-moz-transform:rotateY(360deg);}
	}

	@-webkit-keyframes giro{
		25%{-webkit-transform:rotateY(90deg);}
		50%{-webkit-transform:rotateY(180deg);}
		75%{-webkit-transform:rotateY(270deg);}
		100%{-webkit-transform:rotateY(360deg);}
	}

	.form-control{
		border-radius: 0px !important; 
	}

	.contenido_panel:not(#panel_por_defecto){
		background: rgba(241,241,241,1);
		width: 100%;
		min-height:550px;
		overflow-y:scroll;
		padding: 16px;
	}

	input,select{
		border-radius:0px;
	}

	.ui-dialog-titlebar,.ui-widget-header{
		background:#1ABC9C;
		color: white;
		border-radius:0px;
		padding: 5px;
		box-shadow: 5px 7px 7px #888888;
	}
	.ui-dialog-content,.ui-widget-content{
		background:linear-gradient(#ffffff,#dde9f4);
	}

	.sobre_img_procedimientos:hover{
		border: 10px solid black !important;		
	}

	.sobre_img_procedimientos:hover > div.sobre_img_procedimientos_disparador{
		display: block !important;		
	}

</style>
<body>
	<!--Header-->
	<div class="header" style="background:#1ABC9C;">
		<div class="container ">
			<div class="row">
				<div class="col-xs-1">
					<div class="fondologo">
						<img src="<?=$this->config->base_url();?>fronted_inicio/foto/logo1.png"  width="60" height="60">
					</div>
				</div>

				<div class="col-xs-7 col-xs-offset-1 titulo">
					<h1>Dr. Julio Reyes <small style="color:#CCC;font-size:0.5em;"> Administrador de Contendios</small></h1>
				</div>

				<div class="col-xs-3">
					<div style="padding:7px;float:left;">			
						<p style="color:white;margin-top:16px;font-size:1.3em;display:inline-block;">
							<?php echo strtoupper($usuario)." "; ?>
						</p>
						<div style="display:inline-block;background:#f1f1f1;width:43px;border-radius:50%;"><img src="<?=$this->config->base_url();?>fronted/img/iconos2/user.png" class="img img-circle" style="width:43px;"></div>
					</div>

					<div class="dropdown" style="float:left;margin-top:16px;">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background:none;border-radius:50%;">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li id="cambio_datos" style="cursor:pointer;"><a><span class="glyphicon glyphicon-wrench"></span> Cambiar Datos</a></li>
							<li id="cambio_dir" style="cursor:pointer;"><a><span class="glyphicon glyphicon-globe"></span> Cambiar Dirección</a></li>
							<li id="cambio_clave" style="cursor:pointer;"><a><span class="glyphicon glyphicon-pencil"></span> Cambiar Clave</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!--Header-->


	<div class="container">
		<div class="col-xs-12">
			<?php /*****Panels********************/ ?>
			<div id="panel_por_defecto" class="contenido_panel" style="width:100%;background:transparent;height:600px;">
				<?php /* ?><img id="animacion_logo" src="<?=$this->config->base_url();?>fronted/img/medicina_logo.png"><?php */?>
				<div style="width:200px;margin:auto;">
					<img id="animacion_logo" src="<?=$this->config->base_url();?>fronted_inicio/foto/logo1.png">
				</div>
			</div>

			<div id="panel_galeria" class="contenido_panel" style="display:none;width:100%;height:600px;">
				<p style="font-size:1.4em;"> Galeria <?php /*<button class="btn btn-success" style="float:right;" id="nueva_galeria"><span class="glyphicon glyphicon-plus"> Nuevo</span>	</button> */?></p>
				<hr>
				
				<div id="menu_galerias">
					
					<?php 
					if($procedimientos->result() != null){
						foreach ($procedimientos->result() as $proc_img) {
							?>
							<div class="sobre_img_procedimientos" style="position:relative;width:200px;height:200px;float:left;cursor:pointer;border:1px solid black;background:url('<?=$this->config->base_url()?>fronted_inicio/procedimientos/<?=( $proc_img->img_principal_procedimiento == 'null' ? 'logo1.png' : $proc_img->img_principal_procedimiento )?>');background-size:cover;background-repeat:no-repeat;">
								<div class="sobre_img_procedimientos_disparador" style="width:100%;height:100%;background:rgba(0,0,0,0.6);position:absolute;top:0;left:0;display:none;">
									<p style="text-align:center;margin-top:90px;font-size:1.4em;color:#F1F1F1;"> <?=$proc_img->titulo; ?> </p>
									<hr>
								</div>
							</div>
							<?php 
						}
					}
					?>

				</div>

				<div id="galeria_especifica" style="display:none;">

					<div id="cerrar_galeria_especifica" style="float:right;width:50px;height:50px;background:#1ABC9C;text-align:center;border-radius:50%;border:1px solid #f1f1f1;box-shadow: 10px 10px 5px #888888;padding:7px;cursor:pointer;" title="Volver a Todas las Galerias">
						<span class="glyphicon glyphicon-remove" style="margin-top:11px"></span>
					</div>
					<div style="clear:both;"></div>
					<hr>

					dsfgsdgjfdngjdfjngkndfnjgnjkdfngjkjkdfngjkdf
					dfighdfnkgnkjdfnjgnjkdfngjdf
					dfjgdfkjgnkjdfnjkgndfkjngjkdnfjkgnfdn
				</div>

				<?php 
				/*
				if($galeria->result() != null){

					foreach ($galeria->result() as $foto) {
						?>
						<a class="boxer" href="<?=$this->config->base_url()?>fronted/img/cirujano/galeria/<?=$foto->nombre_img;?>" class="boxer" title="Galeria" >
							<img  src="<?=$this->config->base_url()?>fronted/img/cirujano/galeria/<?=$foto->nombre_img;?>" style="width:125px;cursor:pointer;">
						</a>
						<?php	
					}

				}
				*/
				?>

				<?php /* ?>
				<div id="mas_imagenes_galeria" style="display:none;">
					<div class="botones_archivos" style="overflow:hidden;margin-bottom:25px;">
						<p style="font-size:1.2em;">Añadir mas archivos a la galeria
							<button id="menos_file" class="btn btn-danger"  style="float:right;"><span class="glyphicon glyphicon-minus" style="font-size:0.8em;"></span></button>
							<button id="mas_file" class="btn btn-success"  style="float:right;"><span class="glyphicon glyphicon-plus" style="font-size:0.8em;"></span></button>
						</p>
					</div>

					<form action="<?=$this->config->base_url()?>index.php/Admin/insert_galeria" method="post" enctype="multipart/form-data">
						<div id="inpuflivos" style="height:auto;">
							<input type="file" name="archivosgaleria[]" class="archivosgaleria form-control" style="border-radius:0px;display:inline;margin-right:10px;height:auto;">
						</div>
						<hr>
						<button type="submit" class="btn btn-success" style="float:right;"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar</button>
					</form>
				</div>
				<?php */ ?>

			</div>


			<div id="panel_curriculum" class="contenido_panel" style="display:none;">
				<p style="font-size:1.4em;"> Curriculum , para mayor comodidad presione el boton de pantalla completa <span class="glyphicon glyphicon-fullscreen"></span></p>
				<hr/>
				<form action="<?=$this->config->base_url()?>index.php/Admin/editar_curriculum" method="post">

					<textarea id="text_curriculum" name="text_curriculum" class="form-control" rows="12" style="resize:none;">

						<?php
						if( $curriculum->result() != null ){
							foreach ( $curriculum->result() as $perfil ) {
								echo $perfil->curriculum_completo;	
							}

						}
						?>
					</textarea>
					<hr>
					<button type="submit" class="btn btn-success" style="float:right;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
					<div style="clear:both;"></div>
				</form>
			</div>

			<div id="panel_contacto" class="contenido_panel" style="display:none;">
				<p style="font-size:1.4em;"> Contacto </p>
				<!--<a href="https://www.google.co.ve/maps/place/1035+5th+Avenue+Corporation/@40.7804296,-73.9618858,17z/data=!4m2!3m1!1s0x89c25897eca2da3d:0xc35556cc09cc117">Ir a nueva york</a>-->
				<hr>
				<table class="table table-hover" id="tabla_contacto">
					<thead>					
						<tr>
							<th>Nombres</th>
							<th>Servicio</th>
							<th>Email</th>
							<th>Celular</th>
							<th>Asunto</th>
							<th>Ver</th>
							<th>Eliminar</th>
						</tr>
					</thead>

					<?php if( $contactos->result() != null ) { ?>

					<?php foreach ($contactos->result() as $contacto) : ?>

						<tr class="contacto_tr">
							<td><?php echo $contacto->nombres_contacto; ?></td>
							<td><?php echo $contacto->servicio; ?></td>
							<td><?php echo $contacto->email_contacto; ?></td>
							<td><?php echo $contacto->telefono_movil_contacto; ?></td>
							<td><?php echo $contacto->asunto_contacto; ?></td>
							<td><button class="btn btn-success ver_contacto" data-nombres="<?=$contacto->nombres_contacto;?>" data-apellidos="<?=$contacto->servicio;?>" data-email="<?=$contacto->email_contacto;?>"  data-telefono="<?=$contacto->telefono_movil_contacto;?>" data-asunto="<?=$contacto->asunto_contacto;?>" data-detalle="<?=$contacto->descripcion_contacto;?>" ><span class="glyphicon glyphicon-eye-open"></span></button></td>
							<td><button class="btn btn-danger del_contacto" data-id="<?=$contacto->id_contacto;?>"><span class="glyphicon glyphicon-remove"></span></button></td>
						</tr>

					<?php endforeach; } ?>

					<tfoot style="display:none;">
						<tr>
							<th>Nombres</th>
							<th>Servicio</th>
							<th>Email</th>
							<th>Celular</th>
							<th>Asunto</th>
							<th>Ver</th>
							<th>Eliminar</th>
						</tr>
					</tfoot>
				</table>
			</div>

			<div id="panel_procedimientos" class="contenido_panel" style="display:none;">
				<p style="font-size:1.4em;"> Procedimientos <button class="btn btn-success" style="float:right;" id="nuevo_procedimiento"><span class="glyphicon glyphicon-plus"> Nuevo</span>	</button></p>

				<div id="new_procedimiento" style="display:none;">
					<form action="<?=$this->config->base_url()?>index.php/admin/crear_procedimiento" method="post" enctype="multipart/form-data">
						<p>Nombre procedimiento:</p>
						<input type="text" id="nombre_procedure" name="nombre_procedure" class="form-control" maxlength="140">
						<p>Subtitulo procedimiento:</p>
						<input type="text" id="subtitulo_procedure" name="subtitulo_procedure" class="form-control" maxlength="140">
						<p>Detalle procedimiento:</p>
						<textarea id="detalle_procedure" name="detalle_procedure" class="form-control" maxlength="500">
							
						</textarea>
						<p>Imagen procedimiento:</p>
						<input type="file" class="form-control" style="height:auto;" name="img_procedimiento">

						<hr>
						<button type="submit" class="btn btn-success" style="float:right;">
							<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
						</button>
					</form>
				</div>

				<hr>
				<table class="table table-hover" id="tabla_procedimientos">
					<thead>					
						<tr>
							<th>Nombre</th>
							<th>Detalle</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>

					<?php if( $procedimientos->result() != null ){ ?>

					<?php foreach ($procedimientos->result() as $proc) : ?>

						<tr class="procedimiento_tr">
							<td><?php echo $proc->titulo; ?></td>
							<td><?php echo $proc->detalle; ?></td>
							<td><button class="btn btn-success edit-proc" data-id="<?=$proc->id_procedimiento;?>" data-titulo="<?=$proc->titulo;?>" data-subtitulo="<?=$proc->sub_titulo;?>" data-detalle="<?=$proc->detalle;?>" data-imgprincipal="<?=$this->config->base_url()."fronted_inicio/procedimientos/".( $proc->img_principal_procedimiento == 'null' ? 'logo1.png' : $proc->img_principal_procedimiento );?>"><span class="glyphicon glyphicon-eye-open"></span></button></td>
							<td><button class="btn btn-danger del-proc" data-id="<?=$proc->id_procedimiento; ?>"><span class="glyphicon glyphicon-remove"></span></button></td>
						</tr>

					<?php endforeach; ?>

					<?php } ?>

					<tfoot style="display:none;">
						<tr>
							<td>Nombre</td>
							<td>Detalle</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</tfoot>
				</table>

			</div>

			<div id="panel_testimonios" class="contenido_panel" style="display:none;">
				<p style="font-size:1.4em;"> Testimonios </p>
				<table class="table table-hover" id="tabla_testimonios">
					<thead>					
						<tr>
							<th>Nombres</th>
							<th>Email</th>
							<th>Estado</th>
							<th>Ver</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<?php if( $testimonios->result() != null ){ ?>

					<?php foreach ($testimonios->result() as $test) : ?>

						<tr class="testimonio_tr">
							<td><img src="<?=$this->config->base_url()."fronted_inicio/procedimientos/".( $test->img_principal_testimonio == 'null' ? 'logo1.png' : $test->img_principal_testimonio );?>"  width="50" height="50"> <?php echo $test->nombres_del_descriptor; ?></td>
							<td><?php echo $test->email_del_descriptor; ?></td>
							<td><?php echo ( ( $test->aprobado == 1 ) ? "<p style='background:green;padding:12px;color:white;font-size:1.1em;text-align:center;'>Aprobado</p>" : "<p style='background:#f4ff81 ;padding:12px;color:black;font-size:1.1em;text-align:center;'>Oculto</p>" ); ?></td>
							<td><button class="btn btn-success edit_test" data-id="<?=$test->id_testimonio;?>" data-nombres="<?=$test->nombres_del_descriptor;?>" data-email="<?=$test->email_del_descriptor;?>" data-titulo="<?=$test->titulo_testimonio;?>" data-detalle="<?=$test->detalle_testimonio;?>" data-imgtestview="<?=$this->config->base_url()."fronted_inicio/procedimientos/".( $test->img_principal_testimonio == 'null' ? 'logo1.png' : $test->img_principal_testimonio );?>"><span class="glyphicon glyphicon-eye-open"></span></button></td>
							<td><button class="btn btn-danger del_test" data-id="<?=$test->id_testimonio;?>" ><span class="glyphicon glyphicon-remove"></span></button></td>
						</tr>

					<?php endforeach; ?>

					<?php } ?>

					<tfoot style="display:none;">
						<tr>
							<td>Nombre</td>
							<td>Detalle</td>
							<th>Estado</th>
							<td>Ver</td>
							<td>Eliminar</td>
						</tr>
					</tfoot>
				</table>
			</div>

			<?php /*****Panels********************/ ?>
		</div>
	</div>

	<?php /********************************************************************************/ ?>
	<div id="ventana_cambio_clave" style="display:none;	">
		<form action="<?=$this->config->base_url()?>index.php/Admin/cambiar_clave" method="post" id="form_cambiaclave">
			<p style="font-size:1.1em;">Nueva Clave:</p>
			<input type="password" class="form-control" name="clave" id="clave" maxlength="10">

			<p style="font-size:1.1em;">Confirmar Clave:</p>
			<input type="password" class="form-control" id="clave1" maxlength="10">

			<hr>
			<p id="mensaje_cambia_clave" style="font-size:1.1em;"></p>
			<button type="submit" class="btn btn-success" style="float:right;" id="boton_cambiar_clave">
				<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
			</button>
		</form>
	</div>

	<div id="ventana_edit_procedimientos" style="display:none;padding:16px;">
		<form action="<?=$this->config->base_url()?>index.php/Admin/editar_proc" method="post" enctype="multipart/form-data">
			<input type="hidden" id="id_procedimiento" name="id_procedimiento">
			<p style="font-size:1.1em;">Nombre Procedimiento:</p>
			<input type="text" class="form-control" id="nombre_procedimiento" name="nombre_procedimiento" maxlength="140">
			<p style="font-size:1.1em;">Subtitulo Procedimiento:</p>
			<input type="text" class="form-control" id="subtitulo_procedimiento" name="subtitulo_procedimiento" maxlength="140">
			<p>Descripción Procedimiento:</p>
			<textarea class="form-control" id="detalle_procedimiento" name="detalle_procedimiento" style="resizable:none;overflow-y:scroll;height:150px;" maxlength="500">

			</textarea>

			<p style="font-size:1.1em;">Imagen Procedimiento:</p>
			<img id="img_proc_edit" class="img img-responsive" >		
			<a id="cambiar_img_procedimiento" style="cursor:pointer;display:inline;"><span class="caret"></span> Cambiar Imagen</a><hr>

			<div id="caja_cambiar_archivo" class="alert alert-info" style="float:left;width:400px;display:none;">
				<input type="file" name="nueva_img_procedimiento" class="form-control" style="height:auto;">
			</div>

			<hr>
			<button type="submit" class="btn btn-success" style="float:right;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
		</form>
	</div>

	<div id="ventana_ver_contacto" style="display:none;">
		<div style="width:100%;margin:auto;padding:1em;">
			<table class="table table-hover">
				<tr>
					<th>Nombres</th>
					<td id="mostrar_nombre_contacto"> </td>
				</tr>

				<tr>
					<th>
						Servicio
					</th>	

					<td id="mostrar_apellido_contacto">

					</td>					
				</tr>

				<tr>
					<th>
						Celular
					</th>	

					<td id="mostrar_telefono_contacto">

					</td>					
				</tr>

				<tr>
					<th>
						Email
					</th>	

					<td id="mostrar_email_contacto">

					</td>					
				</tr>

				<tr>
					<th>
						Asunto
					</th>	

					<td id="mostrar_asunto_contacto">

					</td>					
				</tr>

				<tr class="info">
					<th colspan="2" style="text-align:center;">
						Detalle
					</th>			
				</tr>

				<tr>
					<td colspan="2" >
						<p  id="mostrar_detalle_contacto" style="margin:auto;text-indent:16px;padding:7px;text-align:justify;width:700px;height:200px;overflow-y:scroll;word-wrap: break-word; ">
							
						</p>
					</td>	
				</tr>

			</table>
		</div>
	</div>

	<div id="ventana_eliminar_contacto" style="display:none;">

		<form action="<?=$this->config->base_url()?>index.php/Admin/eliminar_contacto" method="post">
			<input type="hidden" id="id_eliminar_contacto" name="id_eliminar_contacto">

			<div style="margin:auto;padding:16px;width:115px;">
				<button class="btn btn-danger" id="boton_eliminar_contacto">Aceptar</button>
			</div>

		</form>

	</div>

	<div id="ventana_eliminar_procedimiento" style="display:none;">
		
		<form action="<?=$this->config->base_url()?>index.php/Admin/eliminar_procedimiento" method="post">
			<input type="hidden" id="id_eliminar_procedimiento" name="id_eliminar_procedimiento">

			<div style="margin:auto;padding:16px;width:115px;">
				<button class="btn btn-danger" id="boton_eliminar_procedimiento">Aceptar</button>
			</div>

		</form>

	</div>	

	<div id="ventana_testimonio" style="display:none;">
		<table class="table table-hover">
			<tr>
				<td colspan="2" style="text-align:center;">
					<div style="padding:1px;margin:auto;margin-bottom:0px;">
						<img id="img_testimonio_view" class="img img-responsive">
					</div>
				</td>
			</tr>
			<tr>
				<th>Nombres</th>
				<td id="mostrar_nombre_testimonio"> </td>
			</tr>

			<tr>
				<th>
					Email
				</th>	

				<td id="mostrar_email_testimonio">

				</td>					
			</tr>

			<tr>
				<th>
					Titulo
				</th>	

				<td id="mostrar_asunto_testimonio">

				</td>					
			</tr>

			<tr class="info">
				<th colspan="2" style="text-align:center;">
					Detalle
				</th>			
			</tr>

			<tr>
				<td colspan="2" >
					<p  id="mostrar_detalle_testimonio" style="margin:auto;text-indent:16px;padding:7px;text-align:justify;width:700px;height:150px;overflow-y:scroll;word-wrap: break-word; ">

					</p>
				</td>	
			</tr>

			<tr>
				<td colspan="2">

					<a id="abrir_opcion_testimmonio" style="cursor:pointer;">  <span class="caret"></span> Procesar Testimonio</a>
				</td>
			</tr>	

			<tr style="display:none;" id="procesar_testimoniio">
				<form action="<?=$this->config->base_url()?>index.php/Admin/procesar_testimonio" method="post">
					<td>
						<input type="hidden" id="id_testimonio_aprobado" name="id_testimonio_aprobado">
						<div class="radio" style="display:inline;margin-right:25px;">
							<label>
								<input type="radio" name="aprobar" value="1">
								<p style="font-weight:bold; ">Activar</p>
							</label>
						</div>

						<div class="radio" style="display:inline;">
							<label>
								<input type="radio" name="aprobar" value="0" checked="checked">
								<p style="font-weight:bold; ">Ocultar</p>
							</label>
						</div>
					</td>

					<td>
						<button type="submit" class="btn btn-success" style="float:right;">
							<span class="glyphicon glyphicon-floppy-saved"></span> Confirmar
						</button>
					</td>
				</form>
			</tr>
		</table>
	</div>



	<div id="ventana_eliminar_testimonio" style="display:none;">
		<form action="<?=$this->config->base_url()?>index.php/Admin/eliminar_testimonio" method="post">
			<input type="hidden" id="id_eliminar_testimonio" name="id_eliminar_testimonio">

			<div style="margin:auto;padding:16px;width:115px;">
				<button class="btn btn-danger" id="boton_eliminar_contacto">Aceptar</button>
			</div>

		</form>
	</div>
	<?php /********************************************************************************/ ?>

</body>

<script>
// espera hasta que el DOM este cargado
jQuery(document).ready(function () {
     // esconder el body para luego mostrarlo
     $('body').hide("fast");

 });
// espera hasta que todo el contenido este descargado
jQuery(window).load(function(){
     // mostrar la etiqueta body lentamente
     $('body').fadeIn("fast");
 });

$(document).on("ready",function(){

	$("#tabla_procedimientos,#tabla_contacto,#tabla_testimonios").dataTable();

	//CKEDITOR.replace( 'text_curriculum' );


	$("#cambio_clave").on("click",function(){

	$("#ventana_cambio_clave").dialog({width:"400px",title:"Cambiar Clave",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});	
});


	$("#boton_cambiar_clave").on("click",function(e){
		e.preventDefault();

		if( $("#clave").val() == $("#clave1").val() ){
			$("#form_cambiaclave").submit();
		}else{
			$("#mensaje_cambia_clave").html("Las contraseñas no son iguales");
		}

	});

	$("#tabla_contacto ").on("click",".contacto_tr .ver_contacto",function(){
		
		$("#mostrar_nombre_contacto").html( $(this).data("nombres") );
		$("#mostrar_apellido_contacto").html( $(this).data("apellidos") );
		$("#mostrar_telefono_contacto").html( $(this).data("telefono") );
		$("#mostrar_email_contacto").html( $(this).data("email") );

//"<a href='mailto:"+$(this).data("email")+"' target='_blank' style='border:none;'>"+$(this).data("email")+"</a>" 

$("#mostrar_asunto_contacto").html( $(this).data("asunto") );
$("#mostrar_detalle_contacto").html( $(this).data("detalle") );
$("#ventana_ver_contacto").dialog({width:"800px",title:"Detalle del Contacto",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});
});


	$("#tabla_testimonios").on("click"," .testimonio_tr .edit_test", function(){
		$("#ventana_testimonio").dialog({minWidth:"800px",width:"800px",title:"Detalle Testimonio",modal:true,minHeight:"300px","resizable":false,position: "top"});
		$("#img_testimonio_view").attr("src", $(this).data("imgtestview") );
		$("#mostrar_nombre_testimonio").html( $(this).data("nombres") );
		$("#mostrar_email_testimonio").html( $(this).data("email") );
		$("#mostrar_asunto_testimonio").html( $(this).data("titulo") );
		$("#mostrar_detalle_testimonio").html( $(this).data("detalle") );
		$("#id_testimonio_aprobado").val( $(this).data("id") );
	});

	$("#tabla_testimonios").on("click"," .testimonio_tr .del_test",function(){
		$("#id_eliminar_testimonio").val( $(this).data("id") );

	$("#ventana_eliminar_testimonio").dialog({minWidth:"600px",width:"600px",title:"¿Esta seguro de eliminar este testimonio?",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});

});

	$("#cambiar_img_procedimiento").on("click",function(){
		$("#caja_cambiar_archivo").slideToggle();
	});


	$("#abrir_opcion_testimmonio").on("click",function(){
		$("#procesar_testimoniio").slideToggle("fast");
	});

/*
	$("#nueva_galeria").on("click",function(){
	$("#mas_imagenes_galeria").dialog({minWidth:"600px",width:"600px",title:"Galeria",modal:true,minHeight:"300px","resizable":false,position: "top"});
});
*/


$("#nuevo_procedimiento").on("click",function(){
$("#new_procedimiento").dialog({width:"800px",title:"Guardar nuevo Procedimiento",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});
});



$("#tabla_procedimientos").on("click",".procedimiento_tr .edit-proc",function(){

	$("#id_procedimiento").val( $(this).data("id") );
	$("#nombre_procedimiento").val( $(this).data("titulo") );
	$("#subtitulo_procedimiento").val( $(this).data("subtitulo") );
	$("#detalle_procedimiento").val( $(this).data("detalle") );
	$("#img_proc_edit").attr("src", $(this).data("imgprincipal") );

		//$("#detalle_procedimiento").after("<img src='<?=$this->config->base_url()?>fronted/img/cirujano/'>");
		$("#ventana_edit_procedimientos").dialog({minWidth:"600px",width:"600px",title:"Detalle Procedimiento",modal:true,minHeight:"300px","resizable":false,position: "top"});
	});

$("#tabla_procedimientos").on("click",".procedimiento_tr .del-proc",function(){

	$("#id_eliminar_procedimiento").val( $(this).data("id") );

$("#ventana_eliminar_procedimiento").dialog({width:"550px",title:"¿ Estas seguro de eliminar este Procedimiento ?",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});
});

$("#tabla_contacto ").on("click",".contacto_tr .del_contacto",function(){

	$("#id_eliminar_contacto").val( $(this).data("id") );

$("#ventana_eliminar_contacto").dialog({width:"550px",title:"¿ Estas seguro de eliminar este contacto ?",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});

});

$(".sobre_img_procedimientos_disparador").on("click",function(){
	$("#menu_galerias").slideUp("fast");
	$("#galeria_especifica").slideDown("fast");
});

$("#cerrar_galeria_especifica").on("click",function(){
	$("#galeria_especifica").slideUp("fast");
	$("#menu_galerias").slideDown("fast");
});



/**********************************************************************************************/
$(".item_panel_control").on("click",function(){

	var panel = "#"+$(this).data("panel");

	$(panel).addClass('panel_visible');

	$(".contenido_panel").not(".panel_visible").addClass('panel_invisible');

	$(".contenido_panel").each(function( index ,el ) {

		if( $(el).hasClass('panel_visible') ){

			$(panel).show('fast');

			$(panel).removeClass('panel_visible');
			$(panel).addClass('panel_invisible');

		}else{

			if ( $(el).hasClass('panel_invisible') ){
				$(el).hide();
			} 

		}

	});

});

/**********************************************************************************************/
/*
$("#mas_file").on("click",function(e){
	e.preventDefault();

	if($(".archivosgaleria").length < 7 ){agregar();}   
});



$("#menos_file").on("click",function(e){
	e.preventDefault();
	if($(".archivosgaleria").length > 1){ 
		$(".archivosgaleria:last").css("background","red").remove(); 
	}
});
*/


$(".boxer").boxer({
	fixed: true
});
/******************************Fin ready******************************/	
});

function agregar(){
	var file='<input type="file" name="archivosgaleria[]" class="archivosgaleria form-control" style="border-radius:0px;display:inline;margin-right:10px;height:auto;">';
	var nuevo_file = $(file);
	$("#inpuflivos").append(nuevo_file);
}
</script>