<div id="modal_antes_despues_view" style="display:none;">
	
</div>
<?php /**************************Esta vacio pero se llena con javascript***************************/ ?>

<?php /********************************************************************************/ ?>
<div id="ventana_cambio_usuario" style="display:none;">
	<form action="<?=$this->config->base_url()?>index.php/Admin/cambiar_usuario" method="post" id="form_cambiausuario">
		<p>Usuario de inicio de sesión:</p>
		<input type="text" class="form-control datos_trigger" id="usuario_sesion" name="usuario_sesion" maxlength="11" value="<?=$this->session->userdata('usuario');?>" >

		<hr>
		<p id="mensaje_cambia_usuario" style="font-size:1.1em;"></p>
		<button type="submit" class="btn btn-success" style="float:right;" id="boton_cambiar_user">
			<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
		</button>
	</form>
</div>
<?php /********************************************************************************/ ?>

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
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
<div id="ventana_edit_procedimientos" style="display:none;padding:16px;">
	<form action="<?=$this->config->base_url()?>index.php/Admin/editar_proc" method="post" enctype="multipart/form-data">
		<div style="width:100%;margin:auto;background:#f1f1f1;overflow:hidden;">

			<div style="width:50%;float:left;text-align:center;color:#555;font-size:1.5em;padding:10px;border-right:1px dotted gray;">
				Español
			</div>

			<div style="width:50%;float:left;text-align:center;color:#555;font-size:1.5em;padding:10px;">
				Portugues
			</div>	

		</div>
		<input type="hidden" id="id_procedimiento_proc" name="id_procedimiento">
		<input type="hidden" id="imgsola" name="imgsola">

		<div style="width:50%;float:left;padding:12px;border-right:1px dotted gray;">

			<p style="font-size:1.1em;">Nombre Procedimiento:</p>
			<input type="text" class="form-control" id="nombre_procedimiento" name="nombre_procedimiento" maxlength="140">
			<p style="font-size:1.1em;">Subtitulo Procedimiento:</p>
			<input type="text" class="form-control" id="subtitulo_procedimiento" name="subtitulo_procedimiento" maxlength="140">
			<p>Descripción Procedimiento:</p>
			<textarea class="form-control" id="detalle_procedimiento" name="detalle_procedimiento" style="resizable:none;overflow-y:scroll;height:150px;">

			</textarea>
		</div>

		<div style="width:50%;float:left;padding:12px;">
			<p style="font-size:1.1em;">Nome Procedimiento:</p>
			<input type="text" class="form-control" id="nombre_procedimiento_portugues" name="nombre_procedimiento_portugues" maxlength="140">
			<p style="font-size:1.1em;">Subtitulo Procedimiento:</p>
			<input type="text" class="form-control" id="subtitulo_procedimiento_portugues" name="subtitulo_procedimiento_portugues" maxlength="140">
			<p>Detalhe Procedimiento:</p>
			<textarea class="form-control" id="detalle_procedimiento_portugues" name="detalle_procedimiento_portugues" style="resizable:none;overflow-y:scroll;height:150px;">

			</textarea>
		</div>

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
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
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
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
<div id="ventana_eliminar_contacto" style="display:none;">

	<form action="<?=$this->config->base_url()?>index.php/Admin/eliminar_contacto" method="post">
		<input type="hidden" id="id_eliminar_contacto" name="id_eliminar_contacto">

		<div style="margin:auto;padding:16px;width:115px;">
			<button class="btn btn-danger" id="boton_eliminar_contacto">Aceptar</button>
		</div>

	</form>

</div>
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
<div id="ventana_eliminar_procedimiento" style="display:none;">

	<form action="<?=$this->config->base_url()?>index.php/Admin/eliminar_procedimiento" method="post">
		<input type="hidden" id="id_eliminar_procedimiento" name="id_eliminar_procedimiento">

		<div style="margin:auto;padding:16px;width:115px;">
			<button class="btn btn-danger" id="boton_eliminar_procedimiento">Aceptar</button>
		</div>

	</form>

</div>	
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
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
<?php /* ?>
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
		<?php */ ?>
	</table>
</div>
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
<div id="ventana_eliminar_testimonio" style="display:none;">
	<form action="<?=$this->config->base_url()?>index.php/Admin/eliminar_testimonio" method="post">
		<input type="hidden" id="id_eliminar_testimonio" name="id_eliminar_testimonio">

		<div style="margin:auto;padding:16px;width:115px;">
			<button class="btn btn-danger" id="boton_eliminar_contacto">Aceptar</button>
		</div>

	</form>
</div>
<?php /********************************************************************************/ ?>

<?php /********************************************************************************/ ?>
<div id="gestion_slider" style="display:none;">
	
</div>
<?php /********************************************************************************/ ?>


<?php /**********************************Mensajes de alerta***************************** ?>
<div id="mensajes_informativos" style="display:none;position:absolute;top:50px;right:50px;width:200px;height:100px;">
	<?php if ( isset($_GET["msg"]) ) { echo $_GET["msg"]; }?>
</div>
<?php /**********************************Mensajes de alerta*****************************/ ?>