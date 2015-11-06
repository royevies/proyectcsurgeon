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

	.sobre_img_antes_despues:hover{
		cursor:pointer;
	}

	.sobre_img_antes_despues:hover > div.sobre_img_antes_despues_disparador{
		display:block !important;
	}

	.contenido_panel {
		-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=14, Direction=131, Color=#000111)";/*IE 8*/
		-moz-box-shadow: 6px 7px 14px #000111;/*FF 3.5+*/
		-webkit-box-shadow: 6px 7px 14px #000111;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
		box-shadow: 6px 7px 14px #000111;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
		filter: progid:DXImageTransform.Microsoft.Shadow(Strength=14, Direction=135, Color=#000111); /*IE 5.5-7*/
	}

</style>
<body>
	<!--Header-->
	<div class="header" style="background:#8CCEBB;">
		<div class="container ">
			<div class="row">
				<div class="col-xs-1">
					<div class="fondologo" onclick="window.location.reload()" style="cursor:pointer;" title="Recargar Página">
						<img src="<?=$this->config->base_url();?>fronted_inicio/foto/logo1.png"  width="60" height="60">
					</div>
				</div>

				<div class="col-xs-7  titulo">
					<h1 style="color:#555 !important;font-size:0.8em;padding-left:1.3em;" class="doctortitle">Dr. Julio Reyes <small style="color:#555;font-size:0.5em;"> Administrador de Contendios</small></h1>
				</div>

				<div class="col-xs-4">
					<div style="padding:7px;float:left;">			
						<p style="color:#555;margin-top:16px;font-size:1.3em;display:inline-block;">
							<?php echo strtoupper($usuario)." "; ?>
						</p>
						<div style="display:inline-block;background:#f1f1f1;width:43px;border-radius:50%;"><img src="<?=$this->config->base_url();?>fronted/img/iconos2/user.png" class="img img-circle" style="width:43px;"></div>
					</div>

					<div class="dropdown" style="float:left;margin-top:16px;" >
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background:#1ABC9C;border-radius:50%;">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li id="cambio_usuario" style="cursor:pointer;"><a><span class="glyphicon glyphicon-user"></span> Cambiar Nombre Usuario</a></li>
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

			<div id="panel_slider" class="contenido_panel" style="display:none;width:100%;height:600px;">
				<p style="font-size:1.8em;color:#555;text-shadow:5px 3px 12px gray;">
					Gestión del slider y mensajes del inicio
					<a  class="btn btn-primary item_panel_control" style="float:right;" data-panel="panel_por_defecto" data-original-title="Volver a la pantalla principal" data-content="" rel="popover" data-placement="right" data-trigger="hover"> 
						<span class="glyphicon glyphicon-home"></span> Volver a la pantalla principal
					</a>
				</p>
				<div style="border-bottom:1px dashed #555;margin-bottom:16px;"></div>


				<ul id="pestanas" class="nav nav-tabs" data-tabs="tabs">
					<li class="active"><a href="#editor_slider" data-toggle="tab" style="font-size:1.3em;">Slider</a></li>
					<li ><a href="#mensajes_inicio" data-toggle="tab" style="font-size:1.3em;"> Items profesionales</a></li>
					<li ><a href="#panel_eslogan" data-toggle="tab" style="font-size:1.3em;"> Eslogan</a></li>
				</ul>

				<div id="contenedor_pestanas" class="tab-content">
					<div class="tab-pane active" id="editor_slider" style="background:rgba(0,0,0,0.2);">

						<button id="boton_nuevo_slider" class="btn btn-success" style="float:right;margin:25px;"><span class="glyphicon glyphicon-plus"></span> Agregar items al slider</button>
						<div style="clear:both"></div>
						<div id="agregar_nuevo_slider" style="padding:25px;display:none;margin-bottom:25px;">

							<button id="menos_file" class="btn btn-danger" style="float:right;" id="slider_cog"><span class="glyphicon glyphicon-minus"></span>	</button> 
							<button id="mas_file" class="btn btn-success" style="float:right;" id="slider_cog"><span class="glyphicon glyphicon-plus"></span>	</button> 
							<hr>
							<form id="form_sliders" action="<?=$this->config->base_url()?>index.php/admin/gestion_slider" method="post" enctype="multipart/form-data">
								<input type="hidden" name="opcion_slider" value="opcion_slider">
								<div id="inpuflivos" style="padding:50px;background:rgba(255,255,255,0.7);">
									<input type="file" name="archivosgaleria[]" accept="image/JPEG,image/png" class="archivosgaleria form-control" style="border-radius:0px;display:inline;margin-right:10px;height:auto;">
								</div>
								<hr>
								<button type="submit" id="guardar_sliders" class="btn btn-success" style="float:right;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar imagenes</button>
							</form>
						</div>

						<div id="view_slider">

							<div style="width:100%;height:70px;padding:16px;background:lightgray;margin-bottom:21px;overflow:hidden;">

								<div style="width:50px;display:inline;margin-right:16px;padding:7px;">
									<input id="sel_all_slider" class="contador_opciones_slider" type="checkbox" style="border:none;background:none;width:25px;height:25px;">
								</div>
								<div style="width:100px;display:inline;">
									<button id="ordenar_slider" disabled="disabled" class="btn btn-success">Cambiar Orden</button>
								</div>

								<div style="width:100px;display:inline;">
									<button id="eliminar_slider" disabled="disabled" class="btn btn-danger">Eliminar</button>
								</div>
							</div> 

							<form id="form_sliders2" action="<?=$this->config->base_url()?>index.php/admin/procesar_slider" method="post" enctype="multipart/form-data">
								<input type="hidden" id="opcion_flag_slider" name="opcion_flag_slider">
								<table class="table table-hover" id="tabla_slider">
									<thead>
										<tr class="info">
											<th style="text-align:center;font-size:1.3em;">Seleccionar</th>
											<th style="text-align:center;font-size:1.3em;">Slider</th>
											<th style="text-align:center;font-size:1.3em;">Prioridad</th>
										</tr>
									</thead>

									<tbody>
										<?php foreach ($slider_master as $img_s) {  ?>
										<tr>
											<td style="text-align:center;"><input type="checkbox" class="opciones_slider contador_opciones_slider" name="opciones_slider[]" value="<?=$img_s->id_slider;?>" style="width:25px;height:25px;"></td>
											<td style="text-align:center;"><img src="<?=$this->config->base_url()?>fronted_inicio/slider/<?=$img_s->slider;?>" class="img" style="width:100px;height:100px;"></td>
											<td style="text-align:center;"><input type="text" value="<?=$img_s->orden ?>" name="orden[]" style="text-align:center;font-size:1.7em;width:100px;height:100px;" maxlength="2"></td>
										</tr>


										<?php	} ?>
									</tbody>

									<tfoot style="display:none;">
										<tr>
											<th>Seleccionar</th>
											<th>Slider</th>
											<th>Prioridad</th>
										</tr>
									</tfoot>
								</table>
							</form>
						</div>
					</div>

					<div class="tab-pane" id="mensajes_inicio">
						<?php 
						/*
						foreach ($bonus_cirujano as $bonus) {
							$cirujias = $bonus->cirujias_realizadas;
							$estudio = $bonus->horas_estudio;
							$experiens = $bonus->anios_experiencia;
							$certificaciones = $bonus->cerfificaciones;
							$eslogan = $bonus->eslogan;
							$eslogan_por = $bonus->eslogan_por;
							$eslogan_por = $bonus->eslogan_por;
						} */

						?>
						<form id="form_bonus" action="<?=$this->config->base_url()?>index.php/admin/bonus_cirujano_items" method="post" enctype="multipart/form-data">
							<div class="col-xs-6">

								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/cirujias.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">CIRUGIAS REALIZADAS</h5>
										<input type="text" class="form-control trigger_bonus" name="cirujias" value="<?=$bonus_cirujano[0]->cirujias_realizadas;?>">
									</div>
								</div>
							</div>

							<div class="col-xs-6">

								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/reloj.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">HORAS DE ESTUDIO</h5>
										<input type="text" class="form-control trigger_bonus" name="horas_estudio" value="<?=$bonus_cirujano[0]->horas_estudio;?>">
									</div>
								</div>
							</div>

							<div class="col-xs-6">

								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/experiencia.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">AÑOS DE EXPERIENCIA</h5>
										<input type="text" class="form-control trigger_bonus" name="experiencia" value="<?=$bonus_cirujano[0]->anios_experiencia;?>">
									</div>
								</div>
							</div>

							<div class="col-xs-6">

								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/title.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">Nº CERTIFICACIONES</h5>
										<input type="text" class="form-control trigger_bonus" name="certificaciones" value="<?=$bonus_cirujano[0]->certificaciones;?>">
									</div>
								</div>
							</div>



							<div class="col-xs-12">
								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/galeria.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">Imagen de fondo items</h5>
										<img class="img img-responsive" src="<?=$this->config->base_url()?>fronted_inicio/inicio/<?=$bonus_cirujano[0]->imagen_fondo_items?>" alt="">
										<input type="hidden" name="fondo_items_viejo" value="<?=$bonus_cirujano[0]->imagen_fondo_items?>">
										<input type="file" name="fondo_item_nuevo" class="form-control" style="height:auto;" title="cambiar">
									</div>
								</div>
							</div>


							<hr>

							<button id="boton_bonus" style="float:right;" class="btn btn-success btn-lg" disabled="disabled" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>

						</form>
					</div>

					<div class="tab-pane" id="panel_eslogan">
						<form id="form_bonus2" action="<?=$this->config->base_url()?>index.php/admin/bonus_cirujano_eslogan" method="post" enctype="multipart/form-data">
							<div class="col-xs-12">
								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/eslogan.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">Eslogan Español</h5>
										<input type="text" class="form-control trigger_bonus2" name="eslogan" value="<?=$bonus_cirujano[0]->eslogan;?>">
										<h5 style="text-align:center;">Eslogan Portugues</h5>
										<input type="text" class="form-control trigger_bonus2" name="eslogan_por" value="<?=$bonus_cirujano[0]->eslogan_por;?>">
									</div>
								</div>
								<hr>
							</div>

							<div class="col-xs-12">
								<div class="thumbnail">
									<img src="<?=$this->config->base_url()?>fronted/img/iconos2/galeria.png" style="margin-top:16px;">
									<div class="caption">
										<hr>
										<h5 style="text-align:center;">Imagen de fondo del eslogan</h5>
										<img class="img img-responsive" src="<?=$this->config->base_url()?>/fronted_inicio/inicio/<?=$bonus_cirujano[0]->imagen_fondo_eslogan?>" alt="">
										<input type="hidden" name="fondo_eslogan_viejo" value="<?=$bonus_cirujano[0]->imagen_fondo_eslogan?>">
										<input type="file" name="fondo_eslogan_nuevo" class="form-control" style="height:auto;" title="cambiar">
									</div>
								</div>
								<button id="boton_bonus2" style="float:right;" class="btn btn-success btn-lg" disabled="disabled" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
							</form>
						</div>

					</div>

				</div>



			</div>
			<?php /*******************************************FIn panel slider*******************************************************************/ ?>
			<div id="panel_galeria" class="contenido_panel" style="display:none;width:100%;height:600px;">
				<p style="font-size:1.8em;color:#555;text-shadow:5px 3px 12px gray;">
					Galeria
					<a  class="btn btn-primary item_panel_control" style="float:right;" data-panel="panel_por_defecto" data-original-title="Volver a la pantalla principal" data-content="" rel="popover" data-placement="right" data-trigger="hover"> 
						<span class="glyphicon glyphicon-home"></span> Volver a la pantalla principal
					</a>
				</p>

				<div style="border-bottom:1px dashed #555;margin-bottom:16px;"></div>
				
				<div id="menu_galerias">
					
					<?php 
					if($procedimientos->result() != null){
						foreach ($procedimientos->result() as $proc_img) {
							?>
							<div class="sobre_img_procedimientos" style="position:relative;width:200px;height:200px;float:left;cursor:pointer;border:1px solid black;background:url('<?=$this->config->base_url()?>fronted_inicio/procedimientos/<?=( $proc_img->img_principal_procedimiento == 'null' ? 'logo1.png' : $proc_img->img_principal_procedimiento )?>');background-size:cover;background-repeat:no-repeat;">
								<div class="sobre_img_procedimientos_disparador" style="width:100%;height:100%;background:rgba(0,0,0,0.6);position:absolute;top:0;left:0;display:none;" data-idimagen='<?=$proc_img->id_procedimiento; ?>' data-nombrepro='<?=$proc_img->titulo; ?>' >
									<p style="text-align:center;margin-top:90px;font-size:1.4em;color:#F1F1F1;"> <?=$proc_img->titulo; ?> </p>
									<hr>
								</div>
							</div>
							<?php 
						}
					}else{
						echo '<p style="font-size:1.3em;">Agregue un procedimiento antes por favor</p>';
					}
					?>
				</div>

				<div id="galeria_especifica" style="display:none;">

					<div id="cerrar_galeria_especifica" style="float:right;width:100px;height:50px;background:#1ABC9C;text-align:center;border:1px solid #f1f1f1;box-shadow: 10px 10px 5px #888888;padding:7px;cursor:pointer;" title="Volver a Todas las Galerias">
						<p style="margin-top:11px;font-size:1.3em;">Volver</p>
					</div>
					<div style="clear:both;"></div>
					<hr>

					<div style="border-bottom:1px dotted black;">
						
						<div id="titulo_antes_despues" style="background:#f9f9f9;width:80%;font-size:1.4em;border-right:1px solid gray;padding:10px;float:left;">

						</div>

						<div style="background:#f9f9f9;width:20%;float:left;padding:10px;cursor:pointer;">
							<button id="desplegar_guardado" class="btn btn-primary" ><span class="glyphicon glyphicon-floppy-disk"></span> Agregar imagen</button>
						</div>

						<div style="clear:both;"></div>
					</div>



					<div id="nuevo_galeria_especifica" style="display:none;margin-bottom:10px;">
						<form id="form_agregar_imgs" action="<?=$this->config->base_url()?>index.php/admin/crear_parejas" method="post" enctype="multipart/form-data">
							<input type="hidden" id="id_procedimiento" name="id_procedimiento">
							
							<table class="table table-bordered">
								<tr style="background:#8CCEBB;">
									<th style="text-align:center;">Antes</th>
									<th style="text-align:center;">Despues</th>
								</tr>

								<tr>
									<td>
										<input id="img_antes" name="img_antes"  type="file" accept="image/JPEG,image/png" style="height:auto" class="form-control" required="required">
									</td>
									
									<td>
										<input  id="img_despues" name="img_despues" type="file" accept="image/JPEG,image/png" style="height:auto" class="form-control" required="required">										
									</td>
								</tr>
							</table>
							<hr>
							<button id="boton_antes_despues" class="btn btn-success" style="float:right;">
								<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
							</button>
						</form>

						<div style="clear:both"></div>
					</div>

					<div id="contenido_galeria_especifica">
						
					</div>

				</div>
			</div>


			<div id="panel_curriculum" class="contenido_panel" style="display:none;background:rgba(255,255,255,0.5);">
				<p style="font-size:1.8em;color:#555;text-shadow:5px 3px 12px gray;">
					Formación profesional
					<a  class="btn btn-primary item_panel_control" style="float:right;" data-panel="panel_por_defecto" data-original-title="Volver a la pantalla principal" data-content="" rel="popover" data-placement="right" data-trigger="hover"> 
						<span class="glyphicon glyphicon-home"></span> Volver a la pantalla principal
					</a>
				</p>
				<div style="border-bottom:1px dashed #555;margin-bottom:16px;"></div>
				<form id="form_curriculum" action="<?=$this->config->base_url()?>index.php/Admin/editar_curriculum" method="post" enctype="multipart/form-data">
					<div style="width:100%;margin:auto;background:#f1f1f1;overflow:hidden;">

						<div style="width:50%;float:left;text-align:center;color:#555;font-size:1.5em;padding:10px;border-right:1px dotted gray;">
							Español
						</div>

						<div style="width:50%;float:left;text-align:center;color:#555;font-size:1.5em;padding:10px;">
							Portugues
						</div>	

					</div>

					<textarea id="text_curriculum" name="text_curriculum" class="curriculum_trigger" rows="13" style=" bottom: 0;left:0;width:50%;float:left;margin:auto;background:rgba(255,255,255,0.5);resize:none;text-indent:0px;text-align:justify;">

						<?php

						if( $curriculum->result() != null ){
							foreach ( $curriculum->result() as $perfil ) {
								$curriculum_spanish = $perfil->curriculum_completo;
								echo trim( $perfil->curriculum_completo );
							}

						}
						?>
					</textarea>

					<textarea id="text_curriculum2" name="text_curriculum2" class="curriculum_trigger" rows="13" style=" bottom: 0;left:0;width:50%;float:left;margin:auto;background:rgba(255,255,255,0.5);resize:none;text-indent:0px;text-align:justify;">

						<?php
						if( $curriculum_por->result() != null ){
							foreach ( $curriculum_por->result() as $perfil ) {
								$curriculum_portugues = $perfil->curriculum_completo;
								echo trim( $perfil->curriculum_completo );	
							}

						}
						?>
					</textarea>
					<div style="clear:both;"></div>

					<div style="overflow:hidden;background:#f1f1f1;width:100%;margin-bottom:16px;color:#555;font-size:1.4em;padding:7px;cursor:pointer;">
						<div id="desplegar_cambio_img_curriculum" class="alert alert-info"><span class="caret" style="font-size:1.4em;"></span> Imagen del curriculum 	</div>	
						<div style="padding:16px;margin-bottom:10px;display:none;" id="input_cambio_curriculum">
							<div class="col-xs-4">
								<div style="font-size:1.3em;border-bottom:1px dotted #555;padding:5px;margin-bottom:12px;">Actual</div>

								<?php 
								//$img_curriculum_vitae = "";
								if( $curriculum_img->result() != null ){
									foreach ( $curriculum_img->result() as $img ) {
										$img_curriculum_vitae = $img->img_curriculum;	
										$id_curriculum = $img->id_curriculum;	
									}
								}
								?>

								<img class="img img-responsive" style="width:200px;height:200px;" src="<?=$this->config->base_url().'fronted_inicio/curriculum/'.($img_curriculum_vitae == null ? 'foto.jpg' : $img_curriculum_vitae );?>"> 	
							</div>

							<div class="col-xs-8">
								<div style="font-size:1.3em;border-bottom:1px dotted #555;padding:5px;margin-bottom:12px;">Nueva</div>
								<input type="hidden" id="id_curriculum" name="id_curriculum" value="<?=$id_curriculum?>">
								<input type="hidden" id="img_curriculum_sola" name="img_curriculum_sola" value="<?=$img_curriculum_vitae?>">							
								<input type="file" name="img_curriculum" class="form-control" style="height:auto;">							
							</div>
						</div> 
					</div>


					<button id="enviar_curriculum" type="submit" disabled="disabled" class="btn btn-success" style="float:right;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
					<div style="clear:both;"></div>
				</form>
			</div>

			<div id="panel_contacto" class="contenido_panel" style="display:none;">
				<p style="font-size:1.8em;color:#555;text-shadow:5px 3px 12px gray;">
					Contacto 
					<a  class="btn btn-primary item_panel_control" style="float:right;" data-panel="panel_por_defecto" data-original-title="Volver a la pantalla principal" data-content="" rel="popover" data-placement="right" data-trigger="hover"> 
						<span class="glyphicon glyphicon-home"></span> Volver a la pantalla principal
					</a>
				</p>
				<!--<a href="https://www.google.co.ve/maps/place/1035+5th+Avenue+Corporation/@40.7804296,-73.9618858,17z/data=!4m2!3m1!1s0x89c25897eca2da3d:0xc35556cc09cc117">Ir a nueva york</a>-->
				<div style="border-bottom:1px dashed #555;margin-bottom:16px;"></div>

				<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
					<li class="active"><a href="#contacto_bandeja" data-toggle="tab" style="font-size:1.3em;">Bandeja de entrada</a></li>
					<li ><a href="#contacto_datos" data-toggle="tab" style="font-size:1.3em;"> Datos de Contacto</a></li>
				</ul>

				<div id="my-tab-content" class="tab-content">
					<div class="tab-pane active" id="contacto_bandeja">

						<div style="width:100%;height:70px;padding:16px;background:lightgray;margin-bottom:21px;overflow:hidden;">

							<div style="width:50px;display:inline;margin-right:16px;padding:7px;">
								<input id="sel_all_contacto" class="contador_opciones_contacto" type="checkbox" style="border:none;background:none;width:25px;height:25px;">
							</div>
							<div style="width:100px;display:inline;">
								<button id="eliminar_contacto" disabled="disabled" class="btn btn-danger">Eliminar</button>
							</div>
						</div> 
						<form id="form_contacto_general" action="<?=$this->config->base_url()?>index.php/Admin/eliminar_contacto" method="post">
							<table class="table table-hover" id="tabla_contacto">
								<thead>					
									<tr>
										<th>Seleccionar</th>
										<th>Leido</th>
										<th>Nombres</th>
										<th>Email</th>
										<th>Celular</th>
										<th>Asunto</th>
										<th>Ver</th>
									</tr>
								</thead>

								<?php if( $contactos->result() != null ) { ?>

								<?php foreach ($contactos->result() as $contacto) : ?>

									<tr class="contacto_tr">
										<td style="background:lightgray;text-align:center;width:50px;"><input type="checkbox" class="opciones_contacto contador_opciones_contacto" style="border:none;background:none;width:21px;height:21px;" name="id_contacto[]" value="<?=$contacto->id_contacto;?>"> </td>
										<td style="text-align:center;font-size:1.3em;background:lightgray;width:50px;"><?php echo ($contacto->visto == 0 ? "<span class='glyphicon glyphicon-envelope' style='color:#000000;font-size:1.4em;' title='No leido'></span>" : "<span class='glyphicon glyphicon-ok' style='color:green;' title='Leido'></span>" ); ?></td>
										<td><?php echo $contacto->nombres_contacto; ?></td>
										<td><?php echo $contacto->email_contacto; ?></td>
										<td><?php echo $contacto->telefono_movil_contacto; ?></td>
										<td><?php echo $contacto->asunto_contacto; ?></td>
										<td><button class="btn btn-success ver_contacto" data-id="<?=$contacto->id_contacto;?>" data-nombres="<?=$contacto->nombres_contacto;?>" data-apellidos="<?=$contacto->servicio;?>" data-email="<?=$contacto->email_contacto;?>"  data-telefono="<?=$contacto->telefono_movil_contacto;?>" data-asunto="<?=$contacto->asunto_contacto;?>" data-detalle="<?=$contacto->descripcion_contacto;?>" ><span class="glyphicon glyphicon-new-window"></span></button></td>
							<?php /* ?>
							<td><button class="btn btn-danger del_contacto" data-id="<?=$contacto->id_contacto;?>"><span class="glyphicon glyphicon-remove"></span></button></td>
							<?php */ ?>
						</tr>

					<?php endforeach; } ?>

					<tfoot style="display:none;">
						<tr>
							<th>Seleccionar</th>
							<th>Leido</th>
							<th>Nombres</th>
							<th>Email</th>
							<th>Celular</th>
							<th>Asunto</th>
							<th>Ver</th>
						</tr>
					</tfoot>
				</table>
			</form>
		</div>

		<div class="tab-pane" id="contacto_datos" style="padding:25px;">
			<?php 
			if ( $datos_contacto->result() ) {
				foreach ($datos_contacto->result() as $dato) {

					$direccion = $dato->direccion;
					$email = $dato->email;
					$clave_email = $dato->clave_email;
					$telefono = $dato->telefono;
					$fax = $dato->fax;
					$facebook = $dato->facebook;
					$twitter = $dato->twitter;
					$instagram = $dato->instagram;
					$gloogleplus = $dato->googlepluss;

				}
			}

			?>
			<form id="" action="<?=$this->config->base_url()?>index.php/admin/datos_contacto" method="post">
				
				<p>Dirección:</p>
				<input type="text" class="form-control datos_trigger" id="direccion" name="direccion" maxlength="200" value="<?=($direccion);?>">

				<p>Email:</p>
				<input type="text" class="form-control datos_trigger" id="email" name="email" maxlength="200" value="<?=($email);?>">

				<p>Clave Email (Para el envio de los correos) :</p>
				<input type="password" class="form-control datos_trigger" id="clave_email " name="clave_email" maxlength="100" value="<?=($clave_email );?>">

				<p>Telefono:</p>
				<input type="text" class="form-control datos_trigger" id="telefono" name="telefono" maxlength="12" value="<?=($telefono);?>">

				<p>Fax:</p>
				<input type="text" class="form-control datos_trigger" id="fax" name="fax" maxlength="12" value="<?=($fax);?>">

				<p>Facebook:</p>
				<input type="text" class="form-control datos_trigger" id="facebook" name="facebook" maxlength="200" value="<?=($facebook);?>">

				<p>Twiiter:</p>
				<input type="text" class="form-control datos_trigger" id="twitter" name="twitter" maxlength="200" value="<?=($twitter);?>">

				<p>Instagram:</p>
				<input type="text" class="form-control datos_trigger" id="instagram" name="instagram" maxlength="200" value="<?=($instagram);?>">

				<p>Google Pluss:</p>
				<input type="text" class="form-control datos_trigger" id="gloogleplus" name="gloogleplus" maxlength="200" value="<?=($gloogleplus);?>">

				<hr>
				<button id="boton_cambia_datos" disabled="disabled" type="submit" class="btn btn-success" style="float:right;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
			</form>
		</div>
	</div>
</div>

<div id="panel_procedimientos" class="contenido_panel" style="display:none;">
	<p style="font-size:1.8em;color:#555;text-shadow:5px 3px 12px gray;">
		Procedimientos 
		<a  class="btn btn-primary item_panel_control" style="float:right;" data-panel="panel_por_defecto" data-original-title="Volver a la pantalla principal" data-content="" rel="popover" data-placement="right" data-trigger="hover"> 
			<span class="glyphicon glyphicon-home"></span> Volver a la pantalla principal
		</a>
	</p>

	<div style="border-bottom:1px dashed #555;margin-bottom:16px;"></div>

	<div id="new_procedimiento" style="display:none;">
		<form action="<?=$this->config->base_url()?>index.php/admin/crear_procedimiento" method="post" enctype="multipart/form-data">
			<div style="width:100%;margin:auto;background:#f1f1f1;overflow:hidden;">

				<div style="width:50%;float:left;text-align:center;color:#555;font-size:1.5em;padding:10px;border-right:1px dotted gray;">
					Español
				</div>

				<div style="width:50%;float:left;text-align:center;color:#555;font-size:1.5em;padding:10px;">
					Portugues
				</div>	

			</div>

			<div style="width:50%;float:left;padding:12px;border-right:1px dotted gray;">
				<p>Nombre procedimiento:</p>
				<input type="text" id="nombre_procedure" name="nombre_procedure" class="form-control" maxlength="140" required="required">
				<p>Subtitulo procedimiento:</p>
				<input type="text" id="subtitulo_procedure" name="subtitulo_procedure" class="form-control" maxlength="140" >
				<p>Detalle procedimiento:</p>
				<textarea id="detalle_procedure" name="detalle_procedure" class="form-control" maxlength="1000" required="required" style="resize:none;height:400px;">

				</textarea>
			</div>

			<div style="width:50%;float:left;padding:12px;">
				<p>Nome procedimiento:</p>
				<input type="text" id="nombre_procedure_por" name="nombre_procedure_por" class="form-control" maxlength="140" required="required">
				<p>Subtitulo procedimiento:</p>
				<input type="text" id="subtitulo_procedure_por" name="subtitulo_procedure_por" class="form-control" maxlength="140" >
				<p>Detalhe procedimiento:</p>
				<textarea id="detalle_procedure_por" name="detalle_procedure_por" class="form-control" maxlength="1000" required="required" style="resize:none;height:400px;">

				</textarea>
			</div>

			<p>Imagen procedimiento:</p>
			<input type="file" class="form-control" style="height:auto;" name="img_procedimiento">

			<hr>
			<button type="submit" class="btn btn-success" style="float:right;">
				<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
			</button>
		</form>
	</div>

	<hr>
	<div style="width:100%;height:80px;padding:16px;background:lightgray;margin-bottom:21px;overflow:hidden;">

		<div style="width:50px;display:inline;margin-right:16px;padding:7px;">
			<input id="sel_all_procedimientos" class="contador_opciones_procedimiento" type="checkbox" style="border:none;background:none;width:25px;height:25px;">
		</div>

		<div style="width:100px;display:inline;">
			<button id="eliminar_procedimiento" disabled="disabled" class="btn btn-danger">Eliminar</button>
		</div>

		<div style="width:100px;display:inline;margin-right:16px;">
			<button id="inicio_procedimiento" disabled="disabled" class="btn btn-success">Procesar en el inicio</button>
		</div>

		<button class="btn btn-success" style="float:right;" id="nuevo_procedimiento"><span class="glyphicon glyphicon-plus"> Nuevo Procedimiento</span>	</button>

	</div> 
	<form id="form_procedimientos" action="<?=$this->config->base_url()?>index.php/admin/administrar_procedimiento" method="post">
		<input type="hidden" name="opcion_procedimiento" id="opcion_procedimiento"> 
		<table class="table table-hover" id="tabla_procedimientos">
			<thead>					
				<tr>
					<th>Seleccionar</th>
					<th>Inicio</th>
					<th>Nombre</th>
					<th>Detalle</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php if( $procedimientos->result() != null ){ ?>

			<?php foreach ($procedimientos->result() as $proc) : ?>

				<tr class="procedimiento_tr">

					<td style="background:lightgray;text-align:center;"><input type="checkbox" class="opciones_procedimiento contador_opciones_procedimiento" style="border:none;background:none;width:21px;height:21px;" name="id_procedimiento[]" value="<?=$proc->id_procedimiento;?>"> </td>
					<td style="text-align:center;font-size:1.3em;background:lightgray;"><?php echo ($proc->orden_inicio == 0 ? "<span class='glyphicon glyphicon-ban-circle' style='color:#000000;font-size:1.4em;' title='No leido'></span>" : "<span class='glyphicon glyphicon-ok' style='color:green;' title='Leido'></span>" ); ?></td>
					<td><?php echo $proc->titulo; ?></td>
					<td><?php echo $proc->detalle; ?></td>
					<td><button class="btn btn-success edit-proc" data-id="<?=$proc->id_procedimiento;?>" data-titulo="<?=$proc->titulo;?>" data-subtitulo="<?=$proc->sub_titulo;?>" data-detalle="<?=$proc->detalle;?>" data-imgsola="<?=( $proc->img_principal_procedimiento == 'null' ? 'logo1.png' : $proc->img_principal_procedimiento ) ?>" data-imgprincipal="<?=$this->config->base_url()."fronted_inicio/procedimientos/".( $proc->img_principal_procedimiento == 'null' ? 'logo1.png' : $proc->img_principal_procedimiento );?>"><span class="glyphicon glyphicon-eye-open"></span></button></td>
						<?php /* 
						<td><button class="btn btn-danger del-proc" data-id="<?=$proc->id_procedimiento; ?>"><span class="glyphicon glyphicon-remove"></span></button></td>
						*/?>
					</tr>

				<?php endforeach; ?>

				<?php } ?>

				<tfoot style="display:none;">
					<tr>
						<td>Seleccionar</td>
						<td>Inicio</td>
						<td>Nombre</td>
						<td>Detalle</td>
						<td>Editar</td>
					</tr>
				</tfoot>
			</table>
		</form>

	</div>

	<div id="panel_testimonios" class="contenido_panel" style="display:none;">
		<p style="font-size:1.8em;color:#555;text-shadow:5px 3px 12px gray;">
			Testimonios 
			<a  class="btn btn-primary item_panel_control" style="float:right;" data-panel="panel_por_defecto" data-original-title="Volver a la pantalla principal" data-content="" rel="popover" data-placement="right" data-trigger="hover"> 
				<span class="glyphicon glyphicon-home"></span> Volver a la pantalla principal
			</a>
		</p>			
		<div style="border-bottom:1px dashed #555;margin-bottom:16px;"></div>

		<div style="width:100%;height:70px;padding:16px;background:lightgray;margin-bottom:21px;overflow:hidden;">

			<div style="width:50px;display:inline;margin-right:16px;padding:7px;">				
				<input id="sel_all_testimonios" class="contador_opciones_testimonios" type="checkbox" style="border:none;background:none;width:25px;height:25px;">
			</div>

			<div style="width:100px;display:inline;margin-right:16px;">
				<button id="inicio_testimonio" disabled="disabled" class="btn btn-success">Procesar en el inicio</button>
			</div>

			<div style="width:100px;display:inline;margin-right:16px;">
				<button id="aprobar_testimonio" disabled="disabled" class="btn btn-success">Visible | Oculto</button>
			</div>

			<div style="width:100px;display:inline;">
				<button id="eliminar_testimonio" disabled="disabled" class="btn btn-danger">Eliminar</button>
			</div>
		</div> 

		<form id="form_testimonios" action="<?=$this->config->base_url()?>index.php/admin/mostrar_testimonio_inicio" method="post">
			<input type="hidden" id="opcion_testimonio" name="opcion_testimonio">
			<table class="table table-hover" id="tabla_testimonios">
				<thead>					
					<tr>
						<th>Seleccionar</th>
						<th>Nombres</th>
						<th>Inicio</th>
						<th>Estado</th>
						<th>Ver</th>
					</tr>
				</thead>

				<?php if( $testimonios->result() != null ){ ?>

				<?php foreach ($testimonios->result() as $test) : ?>

					<tr class="testimonio_tr">
						<td style="background:lightgray;text-align:center;width:50px;"><input type="checkbox" class="opciones_testimoniales contador_opciones_testimonios" style="border:none;background:none;width:21px;height:21px;" name="id_testimonio[]" value="<?=$test->id_testimonio;?>"> </td>
						<td><img src="<?=$this->config->base_url()."fronted_inicio/testimonios/".( $test->img_principal_testimonio == 'null' ? 'logo1.png' : $test->img_principal_testimonio );?>"  width="50" height="50"> <p style="margin-left:12px;text-align:justify;display:inline;"> <?php echo $test->nombres_del_descriptor; ?> </p></td>						
						<td style="text-align:center;font-size:1.3em;background:lightgray;width:70px;"><?php echo ($test->orden_inicio == 0 ? "<span class='glyphicon glyphicon-ban-circle' style='color:#000000;font-size:1.4em;' title='No leido'></span>" : "<span class='glyphicon glyphicon-ok' style='color:green;' title='Leido'></span>" ); ?></td>
						<td><?php echo ( ( $test->aprobado == 1 ) ? "<p style='background:green;padding:12px;color:white;font-size:1.1em;text-align:center;'>Visible</p>" : "<p style='background:#f4ff81 ;padding:12px;color:black;font-size:1.1em;text-align:center;'>Oculto</p>" ); ?></td>
						<td><button class="btn btn-success edit_test" data-id="<?=$test->id_testimonio;?>" data-nombres="<?=$test->nombres_del_descriptor;?>" data-email="<?=$test->email_del_descriptor;?>" data-titulo="<?=$test->titulo_testimonio;?>" data-detalle="<?=$test->detalle_testimonio;?>" data-imgtestview="<?=$this->config->base_url()."fronted_inicio/testimonios/".( $test->img_principal_testimonio == 'null' ? 'logo1.png' : $test->img_principal_testimonio );?>"><span class="glyphicon glyphicon-eye-open"></span></button></td>
								<?php /* ?>
								<td><button class="btn btn-danger del_test" data-id="<?=$test->id_testimonio;?>" ><span class="glyphicon glyphicon-remove"></span></button></td>
								<?php */ ?>
							</tr>

						<?php endforeach; ?>

						<?php } ?>

						<tfoot style="display:none;">
							<tr>
								<th>Seleccionar</th>
								<th>Nombres</th>
								<th>Inicio</th>
								<th>Estado</th>
								<th>Ver</th>
							</tr>
						</tfoot>
					</table>
					<hr>
				</form>
			</div>

			<?php /*****Panels********************/ ?>
		</div>
	</div>

	<!---------------------------________Modales informativas________-------------------------------------->

	<div id="mensajes_informativos" style="width:100%;height:100%;background:rgba(0,0,0,0.7);position:fixed;top:0;left:0;z-index:10;display:none;">
		<div style="width:600px;margin:auto;margin-top:180px;;height:300px;background:rgba(255,255,255,0.7);">
			<div style="width:100%;padding:12px;background:#8CCEBB;text-align:center;font-size:1.6em;margin-bottom:70px;">Mensaje</div>
			<p style="font-size:1.3em;text-align:center;">
				<?php if ( isset($_GET["msg"]) ) { echo $_GET["msg"]; }?>		
			</p>

			<hr>

			<a href="<?=$this->config->base_url()?>index.php/admin/panel">	
				<div style="margin:auto;width:100px;">
					<button id="cerrar_mensajes_informativos" class="btn btn-success btn-lg">Aceptar</button>					
				</div>
			</a>
		</div>
	</div>

	<!---------------------------________Modales informativas________-------------------------------------->

</body>

<script>
	/*
	jQuery(document).ready(function () {
	// esconder el body para luego mostrarlo
	$('body').hide("fast");

});

jQuery(window).load(function(){
// mostrar la etiqueta body lentamente
$('body').fadeIn("fast");
});
*/

$(document).on("ready",function(){
	$(".trigger_bonus").on("keyup",function(){
		$("#boton_bonus").removeAttr("disabled");
	});

	
	$("input[name='fondo_item_nuevo']").on("click",function(){
		$("#boton_bonus").removeAttr("disabled");
	});

	$(".trigger_bonus2").on("keyup",function(){
		$("#boton_bonus2").removeAttr("disabled");
	});

	$("input[name='fondo_eslogan_nuevo']").on("click",function(){
		$("#boton_bonus2").removeAttr("disabled");
	});

	$(".curriculum_trigger").on("keyup",function(){
		$("#enviar_curriculum").removeAttr("disabled");
	});

	$("input[name='img_curriculum']").on("click",function(){
		$("#enviar_curriculum").removeAttr("disabled");
	});

	$("#enviar_curriculum").on("click",function(e){
		e.preventDefault();
		
		if( $("#text_curriculum").val() != "" || $("#text_curriculum2").val() != "" ){
			$("#form_curriculum").submit();
		}

	});

	$(".datos_trigger").on("keyup",function(){
		$("#boton_cambia_datos").removeAttr("disabled");
	});

	/***************************************************************************************************************************/

	$(".contador_opciones_slider").on("click",function(){

		if( $(".contador_opciones_slider:checked").length > 0 ){			
			$("#ordenar_slider,#eliminar_slider").removeAttr("disabled");
		}else if($(".contador_opciones_slider:checked").length == 0){
			$("#ordenar_slider,#eliminar_slider").attr("disabled","disabled");
		}

	});

	$("#sel_all_slider").on("click",function(){

		$('.opciones_slider:checkbox').each( function() {			
			if($("#sel_all_slider:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});


		if( !$("#sel_all_slider").is(":checked") && $(".contador_opciones_slider:checked").length == 0 ){
			$("#ordenar_slider,#eliminar_slider").attr("disabled","disabled");
		}
	});

	$("#eliminar_slider").on("click",function(e){
		e.preventDefault();
		$("#opcion_flag_slider").val("eliminar");
		if( $(".opciones_slider:checked").length > 0 ){
			$("#form_sliders2").submit();
		}
	});

	$("#ordenar_slider").on("click",function(e){
		e.preventDefault();
		$("#opcion_flag_slider").val("ordenar");
		if( $(".opciones_slider:checked").length > 0 ){
			$("#form_sliders2").submit();
		}
	});

	/***************************************************************************************************************************/

	$(".contador_opciones_procedimiento").on("click",function(){
		//console.log( $(".contador_opciones_procedimiento:checked").length);

		if( $(".contador_opciones_procedimiento:checked").length > 0 ){			
			$("#eliminar_procedimiento,#inicio_procedimiento").removeAttr("disabled");
		}else if($(".contador_opciones_procedimiento:checked").length == 0){
			$("#eliminar_procedimiento,#inicio_procedimiento").attr("disabled","disabled");
				/*
			if ($("#sel_all_procedimientos").attr("checked") == "checked" ){
				$("#sel_all_procedimientos").removeAttr("checked")
			}
			*/
		}

	});


	$("#sel_all_procedimientos").on("click",function(){

		$('.opciones_procedimiento:checkbox').each( function() {			
			if($("#sel_all_procedimientos:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});

		if( !$("#sel_all_procedimientos").is(":checked") && $(".contador_opciones_procedimiento:checked").length == 0 ){
			$("#eliminar_procedimiento,#inicio_procedimiento").attr("disabled","disabled");
		}

	});
	/***************************************************************************************************************************/

	$(".contador_opciones_contacto").on("click",function(){

		if( $(".contador_opciones_contacto:checked").length > 0 ){			
			$("#eliminar_contacto").removeAttr("disabled");
		}else{
			$("#eliminar_contacto").attr("disabled","disabled");
		}

	});	

	$("#sel_all_contacto").on("click",function(){

		$('.opciones_contacto:checkbox').each( function() {			
			if($("#sel_all_contacto:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});

		if( !$("#sel_all_contacto").is(":checked") && $(".contador_opciones_contacto:checked").length == 0 ){
			$("#eliminar_contacto").attr("disabled","disabled");
		}

	});

	/***************************************************************************************************************************/
	$(".contador_opciones_testimonios").on("click",function(){
		console.log( $(".contador_opciones_testimonios:checked").length );

		if( $(".contador_opciones_testimonios:checked").length > 0 ){			
			$("#inicio_testimonio,#aprobar_testimonio,#eliminar_testimonio").removeAttr("disabled");
		}else{
			$("#inicio_testimonio,#aprobar_testimonio,#eliminar_testimonio").attr("disabled","disabled");
		}

	});	

	$("#sel_all_testimonios").on("click",function(){

		$('.opciones_testimoniales:checkbox').each( function() {			
			if($("#sel_all_testimonios:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});

		if( !$("#sel_all_testimonios").is(":checked") && $(".contador_opciones_testimonios:checked").length == 0 ){
			$("#inicio_testimonio,#aprobar_testimonio,#eliminar_testimonio").attr("disabled","disabled");
		}

	});
	/***************************************************************************************************************************/
	$("#eliminar_contacto").on("click",function(e){
		e.preventDefault();

		if( $(".opciones_contacto:checked").length > 0 ){
			$("#form_contacto_general").submit();
		}
	});

	$("#eliminar_procedimiento").on("click",function(e){
		e.preventDefault();

		if( $(".opciones_procedimiento:checked").length > 0 ){
			$("#opcion_procedimiento").val("eliminar");
			$("#form_procedimientos").submit();					
		}


	});

	$("#inicio_procedimiento").on("click",function(e){
		e.preventDefault();

		if( $(".opciones_procedimiento:checked").length > 0 ){
			$("#opcion_procedimiento").val("orden_inicio");
			$("#form_procedimientos").submit();
		}

	});

	$("#inicio_testimonio").on("click",function(e){
		e.preventDefault();

		if( $(".opciones_testimoniales:checked").length > 0 ){
			$("#opcion_testimonio").val("orden_inicio");
			$("#form_testimonios").submit();
		}

	});

	$("#aprobar_testimonio").on("click",function(e){
		e.preventDefault();

		if( $(".opciones_testimoniales:checked").length > 0 ){
			$("#opcion_testimonio").val("aprobado");
			$("#form_testimonios").submit();
		}

	});

	$("#eliminar_testimonio").on("click",function(e){
		e.preventDefault();

		if( $(".opciones_testimoniales:checked").length > 0 ){
			$("#opcion_testimonio").val("eliminar");
			$("#form_testimonios").submit();
		}

	});
	/***************************************************************************************************************************/
	
	$("#boton_nuevo_slider").on("click",function(){
		$("#agregar_nuevo_slider").slideDown();
	});


	$("#cambio_datos").on("click",function(){
		$("#datos_contacto_doctor").dialog({width:"600px",title:"Mis datos de contacto",modal:true,Height:"500px","resizable":false,position: "top"});	
	});

	$("#desplegar_cambio_img_curriculum").on("click",function(){
		$("#input_cambio_curriculum").slideToggle();	
	});

	$(".sobre_img_procedimientos_disparador").on("click",function(){

//$("#form_agregar_imgs").submit)(;)
$("#titulo_antes_despues").html( $(this).data("nombrepro") );
$("#id_procedimiento").val( $(this).data("idimagen") );

$("#desplegar_guardado").on("click",function(){
	$("#nuevo_galeria_especifica").slideDown();
});


$.ajax({
	data: { id_procedimiento : $(this).data("idimagen") },
	url:   '<?=$this->config->base_url()?>index.php/admin/ver_img_procedimientos',
	type:  'post',
	timeout:7000,
	beforeSend: function(){
//$("#contenido_galeria_especifica").html("<img src='../../../../public_html/imagenes/484_azul.GIF'>");
},
success: function(respuesta){
//lo que se si el destino devuelve algo
$("#contenido_galeria_especifica").html(respuesta);
},
error:  function(xhr,err){ 
//alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
$("#contenido_galeria_especifica").html("<p style='color:red;'>Ha ocurrido un error por favor recargue la página</p>");
}
}).done(function(){
	$(".sobre_img_antes_despues_disparador").on("click",function(){
		var id_pareja = $(this).data("id");
		var img_antes = $(this).data("imgantes");
		var img_despues = $(this).data("imgdespues");        

		var html = '<div style="width:100%;overflow:hidden;margin-bottom:16px;">';
		html +='<div style="width:50%;float:left;">';
		html +='<div style="width:100%;padding:12px;text-align:center;font-size:1.3em;">Antes</div>';
		html +='<img src="<?=$this->config->base_url()?>fronted_inicio/procedimientos/'+img_antes+'" class="img img-responsive">';
		html +='</div>';
		html +='<div style="width:50%;float:left;">';
		html +='<div style="width:100%;padding:12px;text-align:center;font-size:1.3em;">Despues</div>';
		html +='<img src="<?=$this->config->base_url()?>fronted_inicio/procedimientos/'+img_despues+'" class="img img-responsive">';
		html +='</div>';
		html +='</div>';
		html +='<hr>';
		html +='<div class="alert alert-danger" style="text-align:center;border-radius:0px;">';
		html +='<p style="text-align:center;">¿Desea eliminar esta imagen?</p>'
		html +='<hr>';
		html +='<form id="form_eliminar_pareja" action="<?=$this->config->base_url()?>index.php/admin/eliminar_img_parejas" method="post">';
		html +='<input id="checkbox_pareja" type="checkbox" name="eliminar_pareja" value="'+id_pareja+'" > Si <input id="submit_pareja" type="submit" class="btn btn-danger" value="Eliminar" ></form>';
		html +='<div id="mensaje_eliminar_pareja" style="display:none;font-size:text-align:center;">¡ Marque la opción si y luego presione el boton eliminar para confirmar !</div>'            		
		html +='</div>';

		$("#modal_antes_despues_view").html(html); 

		$("#modal_antes_despues_view").dialog({width:"850px",title:"Antes y despues",modal:true,Height:"500px","resizable":false,position: "top"});	

		$("#checkbox_pareja").on("click",function(){

			if( $("#checkbox_pareja").attr("checked") == "checked" ){
				$("#checkbox_pareja").removeAttr("checked");
			}else{
				$("#checkbox_pareja").attr("checked","checked");
			}

			$("#mensaje_eliminar_pareja").hide();

		});

		$("#submit_pareja").on("click",function(e){
			e.preventDefault();
			if( $("#checkbox_pareja").attr("checked") == "checked" ){
				$("#form_eliminar_pareja").submit();
			}else{
				$("#mensaje_eliminar_pareja").show();
			}

		});



	});

});


});
//Fin galeria 


$("#slider_cog").on("click",function(){
	$("#gestion_slider").dialog({width:"800px",title:"Gestión del slider",modal:true,minHeight:"300px","resizable":false,position: "top"});	
});

$("#tabla_procedimientos,#tabla_contacto,#tabla_testimonios").dataTable();

//CKEDITOR.replace( 'text_curriculum' );


$("#cambio_clave").on("click",function(){

$("#ventana_cambio_clave").dialog({width:"600px",title:"Cambio de clave de acceso al administrador de contenido",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});	
});

$("#cambio_usuario").on("click",function(){

$("#ventana_cambio_usuario").dialog({width:"600px",title:"Cambio de usuario de acceso al administrador de contenido",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});	
});

$("#boton_cambiar_clave").on("click",function(e){
	e.preventDefault();

	if( $("#clave").val() != ""){
		if( $("#clave").val() == $("#clave1").val() ){
			$("#form_cambiaclave").submit();
		}else{
			$("#mensaje_cambia_clave").html("Las contraseñas no son iguales");
		}
	}else{
		$("#clave").css("border","1px solid red");
	}

});

$("#tabla_contacto ").on("click",".contacto_tr .ver_contacto",function(e){
	e.preventDefault();
	var id_contacto = $(this).data("id");
	$("#mostrar_nombre_contacto").html( $(this).data("nombres") );
	$("#mostrar_apellido_contacto").html( $(this).data("apellidos") );
	$("#mostrar_telefono_contacto").html( $(this).data("telefono") );
	$("#mostrar_email_contacto").html( $(this).data("email") );

//"<a href='mailto:"+$(this).data("email")+"' target='_blank' style='border:none;'>"+$(this).data("email")+"</a>" 

$("#mostrar_asunto_contacto").html( $(this).data("asunto") );
$("#mostrar_detalle_contacto").html( $(this).data("detalle") );
$("#ventana_ver_contacto").dialog({width:"800px",title:"Detalle del Contacto",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});

$.ajax({
	data: { id_contacto : id_contacto },
	url:   '<?=$this->config->base_url()?>index.php/admin/visto',
	type:  'post',
	beforeSend: function(){
//$("#contenido_galeria_especifica").html("<img src='../../../../public_html/imagenes/484_azul.GIF'>");
},
success: function(respuesta){


},
error:  function(xhr,err){ 
//alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
//$("#contenido_galeria_especifica").html("<p style='color:red;'>Ha ocurrido un error por favor recargue la página</p>");
}
});

});


$("#tabla_testimonios").on("click"," .testimonio_tr .edit_test", function(e){
	e.preventDefault();
	$("#ventana_testimonio").dialog({minWidth:"800px",width:"800px",title:"Detalle Testimonio",modal:true,minHeight:"300px","resizable":false,position: "top"});
	$("#img_testimonio_view").attr("src", $(this).data("imgtestview") );
	$("#mostrar_nombre_testimonio").html( $(this).data("nombres") );
	$("#mostrar_email_testimonio").html( $(this).data("email") );
	$("#mostrar_asunto_testimonio").html( $(this).data("titulo") );
	$("#mostrar_detalle_testimonio").html( $(this).data("detalle") );
	$("#id_testimonio_aprobado").val( $(this).data("id") );
});

$("#tabla_testimonios").on("click"," .testimonio_tr .del_test",function(e){
	e.preventDefault();
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
$("#new_procedimiento").dialog({width:"900px",title:"Guardar nuevo Procedimiento",modal:true,minHeight:"300px","resizable":false/*,position: "top"*/});
});



$("#tabla_procedimientos").on("click",".procedimiento_tr .edit-proc",function(e){
	e.preventDefault();
	var id_procedimiento_up = $(this).data("id");

	$("#imgsola").val( $(this).data("imgsola") );
	$("#img_proc_edit").attr("src", $(this).data("imgprincipal") );

	$.ajax({
		dataType: "json",
		data: { id_procedimiento : id_procedimiento_up },
		url:   '<?=$this->config->base_url()?>index.php/admin/procedimiento_edit_idioma',
		type:  'post',
		beforeSend: function(){
//$("#contenido_galeria_especifica").html("<img src='../../../../public_html/imagenes/484_azul.GIF'>");
},
success: function(respuesta){

	$("#id_procedimiento_proc").val( id_procedimiento_up );

	$("#nombre_procedimiento").val( respuesta.spanish.titulo );
	$("#subtitulo_procedimiento").val( respuesta.spanish.sub_titulo );
	$("#detalle_procedimiento").val( respuesta.spanish.detalle );

	$("#nombre_procedimiento_portugues").val( respuesta.portugues.titulo );
	$("#subtitulo_procedimiento_portugues").val( respuesta.portugues.sub_titulo );
	$("#detalle_procedimiento_portugues").val( respuesta.portugues.detalle );

},
error:  function(xhr,err){ 
//alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
//$("#contenido_galeria_especifica").html("<p style='color:red;'>Ha ocurrido un error por favor recargue la página</p>");
}
});



//$("#detalle_procedimiento").after("<img src='<?=$this->config->base_url()?>fronted/img/cirujano/'>");
$("#ventana_edit_procedimientos").dialog({width:"900px",title:"Detalle Procedimiento",modal:true,minHeight:"300px","resizable":false,position: "top"});
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
	$("#nuevo_galeria_especifica").slideUp("fast");
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
<?php if ( isset($_GET["msg"]) ) { ?>
	$("#mensajes_informativos").show();
	<?php } ?>
	/**********************************************************************************************/

	$("#mas_file").on("click",function(e){
		e.preventDefault();

		if($(".archivosgaleria").length < 7 ){agregar();}   
	});



	$("#menos_file").on("click",function(e){
		e.preventDefault();
		if($(".archivosgaleria").length > 1){ 
			$(".archivosgaleria:last").css("background","red").delay(2).remove(); 
		}
	});


	/******************************Fin ready******************************/	
});

function agregar(){
	var file='<input type="file" name="archivosgaleria[]" accept="image/JPEG,image/png" class="archivosgaleria form-control" style="border-radius:0px;display:inline;margin-right:10px;height:auto;margin-top:16px;">';
	var nuevo_file = $(file);
	$("#inpuflivos").append(nuevo_file);
}
</script>