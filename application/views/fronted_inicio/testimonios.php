<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Testimonios</h1>
				<!--<span>Show what your Customers say about you</span>-->
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Testimonios</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					
					<div class="heading-block center">
						<h2><span>Esto es lo que dicen mis clientes.</span></h2>
					</div>
					

					<div class="line"></div>

					

					
					<div class="clear"></div>

					<ul class="testimonials-grid clearfix">
						<?php foreach($testimonios as $testimonio){ ?>
						<li>
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/testimonios/<?=$testimonio->img_principal_testimonio;?>" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p><?=$testimonio->detalle_testimonio;?></p>
									<div class="testi-meta">
										<?=$testimonio->nombres_del_descriptor;?>
										<span>...</span>
									</div>
								</div>
							</div>
						</li>
						<?php } ?>

					</ul>

				</div>

				<div class="section center footer-stick">

					<div class="toggle">
						<div class="togglet"><i class="i-plain i-large color icon-envelope-alt divcenter bottommargin-sm" style="font-size: 52px"></i><h3>Comparte tu experiencia</h3></div>
						<div class="togglec">
							<div class="postcontent nobottommargin divcenter">

								<div id="testimonial-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

								<form class="nobottommargin" id="template-testimonialform" name="template-testimonialform" action="<?=$this->config->base_url();?>index.php/Admin/guardar_testimonio" method="post" enctype="multipart/form-data">

									<div class="form-process"></div>

									<div class="col_one_third">
										<label for="template-contactform-name">Nombre <small>*</small></label>
										<input type="text" id="template-testimonialform-name" name="template-testimonialform-name" class="sm-form-control required" />
									</div>

									<div class="col_one_third">
										<label for="template-testimonialform-email">Correo Electrónico <small>*</small></label>
										<input type="email" id="template-testimonialform-email" name="template-testimonialform-email" class="required email sm-form-control" />
									</div>

									<div class="clear"></div>

									<div class="col_two_third">
										<label for="template-testimonialform-subject">Titulo <small>*</small></label>
										<input type="text" id="template-contactform-subject" name="template-testimonialform-subject" class="required sm-form-control" />
									</div>

									<div class="col_two_third">
										<label for="template-testimonialform-email">Tu foto <small>(Opcional)</small></label>
										<input type="file" id="template-testimonialform-file" name="template-testimonialform-file" class="sm-form-control" />
									</div>

									<div class="clear"></div>

									<div class="col_full">
										<label for="template-testimonialform-message">Testimonio <small>*</small></label>
										<textarea class="required sm-form-control" id="template-contactform-message" name="template-testimonialform-message" rows="6" cols="30"></textarea>
									</div>

									<div class="col_full hidden">
										<input type="text" id="template-contactform-botcheck" name="template-testimonialform-botcheck" value="" class="sm-form-control" />
									</div>

									<div class="col_full">
										<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Compartir</button>
									</div>

								</form>

								<script type="text/javascript">

									$("#template-testimonialform").validate({
										submitHandler: function(form) {
											$('.form-process').fadeIn();
											/*$(form).ajaxSubmit({
												target: '#testimonial-form-result',
												success: function() {
													$('.form-process').fadeOut();
													$(form).find('.sm-form-control').val('');
													$('#testimonial-form-result').attr('data-notify-msg', $('#testimonial-form-result').html()).html('');
													SEMICOLON.widget.notifications($('#testimonial-form-result'));
												}
											});*/
								}
							});

								});

</script>
</div>
</div>
</div>

<!--						<div class="fslider testimonial testimonial-full twitter-scroll twitter-feed" data-username="envato" data-count="2" data-animation="slide" data-arrows="false">
							<i class="i-plain i-large color icon-envelope-alt divcenter bottommargin-sm"></i>
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"></div>
								</div>
							</div>
						</div>-->

					</div>

				</div>

			</section><!-- #content end -->

		<!-- Footer
		============================================== -->
		
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?=$this->config->base_url();?>fronted_inicio/js/functions.js"></script>

</body>
</html>