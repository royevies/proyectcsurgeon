

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->

		<!-- #header end -->


		<section id="slider" class="slider-parallax full-screen force-full-screen with-header swiper_wrapper page-section clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('<?=$this->config->base_url();?>fronted_inicio/foto/silueta2.png');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Dr. Julio Reyes</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Cirujano Plástico.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark">
						
						<div class="video-wrap">
							<video poster="<?=$this->config->base_url();?>fronted_inicio/images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
								<source src='<?=$this->config->base_url();?>fronted_inicio/foto/explore3.mp4' type='video/mp4' />
									<source src='<?=$this->config->base_url();?>fronted_inicio/images/videos/explore.webm' type='video/webm' />
									</video>
									<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
								</div>
							</div>

						</div>
						<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
						<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
						<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
						<a href="#" data-scrollto="#section-about" class="one-page-arrow dark">
							<i class="icon-angle-down infinite animated fadeInDown"></i>
						</a>
					</div>

					<script>
						jQuery(document).ready(function($){
							var swiperSlider = new Swiper('.swiper-parent',{
								paginationClickable: false,
								slidesPerView: 1,
								grabCursor: true,
								onSwiperCreated: function(swiper){
									$('[data-caption-animate]').each(function(){
										var $toAnimateElement = $(this);
										var toAnimateDelay = $(this).attr('data-caption-delay');
										var toAnimateDelayTime = 0;
										if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
										if( !$toAnimateElement.hasClass('animated') ) {
											$toAnimateElement.addClass('not-animated');
											var elementAnimation = $toAnimateElement.attr('data-caption-animate');
											setTimeout(function() {
												$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
											}, toAnimateDelayTime);
										}
									});
								},
								onSlideChangeStart: function(swiper){
									$('#slide-number-current').html(swiper.activeIndex + 1);
									$('[data-caption-animate]').each(function(){
										var $toAnimateElement = $(this);
										var elementAnimation = $toAnimateElement.attr('data-caption-animate');
										$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
									});
								},
								onSlideChangeEnd: function(swiper){
									$('#slider .swiper-slide').each(function(){
										if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
									});
									$('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
										if($(this).find('video').length > 0) {
											if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
										}
									});
									if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

									$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
										var $toAnimateElement = $(this);
										var toAnimateDelay = $(this).attr('data-caption-delay');
										var toAnimateDelayTime = 0;
										if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
										if( !$toAnimateElement.hasClass('animated') ) {
											$toAnimateElement.addClass('not-animated');
											var elementAnimation = $toAnimateElement.attr('data-caption-animate');
											setTimeout(function() {
												$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
											}, toAnimateDelayTime);
										}
									});
								}
							});

                                                        $('#slider-arrow-left').on('click', function(e){
                                                                e.preventDefault();
                                                                swiperSlider.swipePrev();
                                                        });

                                                        $('#slider-arrow-right').on('click', function(e){
                                                                e.preventDefault();
                                                                swiperSlider.swipeNext();
                                                        });

                                                        $('#slide-number-current').html(swiperSlider.activeIndex + 1);
                                                        $('#slide-number-total').html(swiperSlider.slides.length);
                                                });
                                        </script>

                                </section>

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Dr. <span>Julio Reyes</span></div>

					<nav class="one-page-menu">
						<ul>
							<li><a href="#" data-href="#header"><div>Início</div></a></li>
							<li><a href="#" data-href="#section-about"><div>Procedimientos</div></a></li>
							<li><a href="#" data-href="#section-work"><div>Galería</div></a></li>
							<li><a href="#" data-href="#section-team"><div>Formación profesional</div></a></li>
							<li><a href="#" data-href="#section-testimonials" class="no-offset"><div>Testimonios</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contacto</div></a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<section id="section-about" class="page-section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2><span>Procedimientos</span></h2>
						</div>

                                                <?php 
                                                if ($procs_inicio != null) {
                                                    $count = 0;
                                                    foreach ($procs_inicio as $pro) {
                                                        $count++;
                                                        if($count != 3){
                                                            echo '<div class="col_one_third nobottommargin">';
                                                        }else{
                                                            echo '<div class="col_one_third nobottommargin col_last">';
                                                        }
                                                ?>

                                                    <div class="feature-box media-box">
                                                            <div class="fbox-media">
                                                                <a href="<?=$this->config->base_url();?>index.php/web/procedimientos#<?=$pro->titulo?>"><img src="<?=$this->config->base_url();?>fronted_inicio/procedimientos/<?=$pro->img_principal_procedimiento; ?>" alt="Why choose Us?"></a>
                                                            </div>
                                                            <div class="fbox-desc">
                                                                <h3><a href="<?=$this->config->base_url();?>index.php/web/procedimientos#<?=$pro->titulo?>"><?=$pro->titulo;?></a><span class="subtitle"><?=$pro->sub_titulo;?></span></h3>
                                                                    <p>
                                                                            <?=$pro->detalle;?>
                                                                    </p>
                                                            </div>
                                                    </div>

                                                <?php
                                                    echo "</div>";
                                                    }}
                                                ?>
                                                

                                                <div class="clear"></div>

                                                <!--<div class="fright"><a href="#"><i class="i-plain i-xlarge divcenter nobottommargin icon-plus"></i></a></div>-->
                                                <div class="fright"><a class="button button-3d nomargin" href="<?=$this->config->base_url();?>index.php/web/procedimientos"><i class="i-plain icon-plus"></i> Leer mas</a></div>

                                        </div>

                                        <div class="section dark parallax nobottommargin" style="padding: 80px 0;background-image: url('<?=$this->config->base_url();?>fronted_inicio/foto/quirofano-azul-op.jpg');" data-stellar-background-ratio="0.3">

                                                <div class="container clearfix">

                                                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                                                                <i class="i-plain i-xlarge divcenter nobottommargin icon-magic"></i>
                                                                <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>+</div>
                                                                <h5>Cirugias Realizadas</h5>
                                                        </div>

                                                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                                                                <i class="i-plain i-xlarge divcenter nobottommargin icon-time"></i>
                                                                <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                                                                <h5>Horas de Estudio</h5>
                                                        </div>

                                                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                                                                <i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>
                                                                <div class="counter counter-lined"><span data-from="1" data-to="386" data-refresh-interval="25" data-speed="3500"></span>*</div>
                                                                <h5>Años de Experiencia</h5>
                                                        </div>

                                                        <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                                                                <i class="i-plain i-xlarge divcenter nobottommargin icon-file-text"></i>
                                                                <div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
                                                                <h5>Nº Certificaciones</h5>
                                                        </div>

                                                </div>

                                        </div>

                                </section>

                                <section id="section-work" class="page-section topmargin-lg">

                                        <div class="heading-block center">
                                                <h2><span>Galería</span></h2>
                                                <span>Algunos de los trabajos que he realizado.</span>
                                        </div>

                                        <div class="container clearfix center">

                                <!-- Portfolio Items
                                ============================================= -->
                                <div id="portfolio" class="clearfix">

                                        <article class="portfolio-item pf-media pf-icons">
                                                <div class="portfolio-image">
                                                        <a href="portfolio-single.html">
                                                                <img src="<?=$this->config->base_url();?>fronted_inicio/foto/beyonce.jpg" alt="Open Imagination">
                                                        </a>
                                                        <div class="portfolio-overlay">
                                                                <a href="<?=$this->config->base_url();?>fronted_inicio/images/parallax/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                                <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                                        </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                        <h3><a href="portfolio-single.html">Título Imagen</a></h3>
                                                        <span><a href="#">Sub</a>, <a href="#">Titulo</a></span>
                                                </div>
                                        </article>

                                        <article class="portfolio-item pf-illustrations">
                                                <div class="portfolio-image">
                                                        <a href="portfolio-single.html">
                                                                <img src="<?=$this->config->base_url();?>fronted_inicio/foto/jennifer.jpg" alt="Locked Steel Gate">
                                                        </a>
                                                        <div class="portfolio-overlay">
                                                                <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                                <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                                        </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                        <h3><a href="portfolio-single.html">Título Imagen</a></h3>
                                                        <span><a href="#">Sub</a>, <a href="#">Titulo</a></span>
                                                </div>
                                        </article>

                                        <article class="portfolio-item pf-graphics pf-uielements">
                                                <div class="portfolio-image">
                                                        <a href="#">
                                                                <img src="<?=$this->config->base_url();?>fronted_inicio/foto/get.jpg" alt="Mac Sunglasses">
                                                        </a>
                                                        <div class="portfolio-overlay">
                                                                <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                                <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                                        </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                        <h3><a href="portfolio-single-video.html">Título Imagen</a></h3>
                                                        <span><a href="#">Sub</a>, <a href="#">Titulo</a></span>
                                                </div>
                                        </article>

                                        <article class="portfolio-item pf-icons pf-illustrations">
                                                <div class="portfolio-image">
                                                        <a href="#">
                                                                <img src="<?=$this->config->base_url();?>fronted_inicio/foto/otra.jpg" alt="Mac Sunglasses">
                                                        </a>
                                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                                                <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                                <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                                                <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                                        </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                        <h3><a href="portfolio-single-gallery.html">Título Imagen</a></h3>
                                                        <span><a href="#">Sub</a>, <a href="#">Titulo</a></span>
                                                </div>
                                        </article>

                                        <div class="clear"></div>

                                        <div class="fright"><a  style="margin-right:1em;" class="button button-3d nomargin" href="<?=$this->config->base_url();?>index.php/web/galeria"><i class="i-plain icon-plus"></i> Leer mas</a></div>	

                                    </div><!-- #portfolio end -->

                                    </div>

                                </section>

				<section id="section-team" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2><span>Formación profesional</span></h2>
						<span>Conoce mi formación y experiencia.</span>
					</div>

					<div class="row common-height clearfix">
						<?php 
						foreach ($curriculum as $cul) {
							$curriculum_julio = $cul->curriculum_completo;
						}


						foreach ($img_curriculum as $img_cul) {
							$img_curriculum_julio = $img_cul->img_curriculum;
						}
						?>
						<div class="col-sm-5 col-padding" style="background: url('<?=$this->config->base_url();?>fronted_inicio/curriculum/<?=$img_curriculum_julio; ?>') center center no-repeat; background-size: cover;"></div>

						<div class="col-sm-7 col-padding">
							<div>
								<div class="heading-block">
									<span class="before-heading color">Cirujano Plastico</span>
									<h3>Dr. Julio Reyes</h3>
								</div>

								<div class="row clearfix">

									<div class="col-md-12">
										<p style="text-align:justify;">										
											<?php 
											
											echo $curriculum_julio;

											?>
										</p>


										
									</div>


									<!--<span class="before-heading color">Especialidades</span>-->
										<?php /* ?>
										<div class="col-md-6">
											<ul class="skills">
												<li data-percent="100">
													<span>Mamoplastia</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="100">
													<span>Rinoplastia</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="100">
													<span>Rejuvenecimiento facial</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="100">
													<span>Botox</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
											</ul>
										</div>
										<?php */ ?>

									</div>

								</div>
							</div>

						</div>

						<div class="section parallax" style="background-image: url('<?=$this->config->base_url();?>fronted_inicio/images/parallax/3.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">
							<div class="heading-block center nobottomborder nobottommargin">
								<h2>"Belleza dura cinco minutos. Tal vez más tiempo si tiene un buen cirujano plástico."</h2>
							</div>
						</div>

					</section>





					<section id="section-testimonials" class="page-section topmargin-lg">

						<div class="container clearfix">

							<div class="heading-block center">
								<h2><span>Testimonios</span></h2>
								<span>Esto es lo que dicen mis clientes.</span>
							</div>

							<ul class="testimonials-grid clearfix">

								<?php foreach ($testimonios_inicio as $testimonio) { ?>
								
								<li>
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/testimonios/<?=$testimonio->img_principal_testimonio;?>" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p><?php echo $testimonio->detalle_testimonio; ?></p>
											<div class="testi-meta">
												<?php echo $testimonio->nombres_del_descriptor; ?>	
												<span><?php echo  $testimonio->titulo_testimonio;?></span>
											</div>
										</div>
									</div>
								</li>

								<?php } ?>


							<?php /* ?>
								<li>
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/foto/1.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>El Dr. Julio Reyes cambió mi vida, ahora soy una mujer mas hermosa y mucho mas feliz!</p>
											<div class="testi-meta">
												Julia Roberts
												<span>...</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/foto/2.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Después de mucho tiempo decidí consultar con el Dr. Reyes la posibilidad de realizarme una rinoplastia y les cuento que desde que 
												entre en su consultorio me generó mucha confianza, la confianza que necesitaba para dar ese paso definitivo a una nueva apariencia.</p>
												<div class="testi-meta">
													Angelina Jolie
													<span>...</span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="testimonial">
											<div class="testi-image">
												<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/foto/4.jpg" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<p>El Dr. Reyes y todo su equipo de trabajo me trataron muy bien, el resultado fue excelente pienso que después de haber investigado mucho y estudiar todas mis posibilidades escogí el mejor cirujano, quede tal y como yo esperaba. Muchas Gracias Doctor.</p>
												<div class="testi-meta">
													Jennifer Lopez
													<span>...</span>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="testimonial">
											<div class="testi-image">
												<a href="#"><img src="<?=$this->config->base_url();?>fronted_inicio/foto/3.jpg" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<p>Me siento feliz, cuando me miro en el espejo y veo mi nuevo aspecto solo puedo sonreír, la verdad es que quede muy satisfecha,me siento muy bonita y segura de mi misma.</p>
												<div class="testi-meta">
													Mary Jane
													<span>...</span>
												</div>
											</div>
										</div>
									</li>
									<?php */ ?>
								</ul>


								<div class="fright"><a class="button button-3d nomargin" href="<?=$this->config->base_url();?>index.php/web/testimonios"><i class="i-plain icon-plus"></i> Leer mas</a></div>

								<div class="clear"></div>

							</div>

						</section>

						<section id="section-contact" class="page-section">

							<div class="heading-block title-center">
								<h2><span>Contacto</span></h2>
								<span>¿Aún tienes dudas? Aquí me puedes encontrar.</span>
							</div>
							<?php 

							foreach ($datos_personales as $dato) {
								$direccion = $dato->direccion;
								$email = $dato->email;
								$telefono = $dato->telefono;
								$fax = $dato->fax;
								$facebook = $dato->facebook;
								$twitter = $dato->twitter;
								$instagram = $dato->instagram;
								$googlepluss = $dato->googlepluss;
							}

							?>
					<!-- Google Map
					============================================= -->
					<section id="google-map" class="gmap slider-parallax"></section>

					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script type="text/javascript" src="<?=$this->config->base_url();?>fronted_inicio/js/jquery.gmap.js"></script>

					<script type="text/javascript">

						$('#google-map').gMap({

							address: 'Caracas, Venezuela',
							maptype: 'ROADMAP',
							zoom: 14,
							markers: [
							{
								address: "Caracas, Venezuela",
								html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
								icon: {
									image: "<?=$this->config->base_url();?>fronted_inicio/images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [13,39]
								}
							}
							],
							doubleclickzoom: false,
							controls: {
								panControl: true,
								zoomControl: true,
								mapTypeControl: true,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							}

						});

					</script><!-- Google Map End -->

					<!-- Content
					============================================= -->
					<section id="content">

						<div class="content-wrap">

							<div class="container clearfix">

								<!-- Postcontent
								============================================= -->
								<div class="postcontent nobottommargin">

									<h3>Contacto</h3>

									<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

									<form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?=$this->config->base_url();?>index.php/Admin/crear_contacto" method="post">

										<div class="form-process"></div>

										<div class="col_one_third">
											<label for="template-contactform-name">Nombre <small>*</small></label>
											<input type="text" id="template-contactform-name" name="template-contactform-name" class="sm-form-control required" />
										</div>

										<div class="col_one_third">
											<label for="template-contactform-email">Correo Electrónico <small>*</small></label>
											<input type="email" id="template-contactform-email" name="template-contactform-email" class="required email sm-form-control" />
										</div>

										<div class="col_one_third col_last">
											<label for="template-contactform-phone">Teléfono</label>
											<input type="text" id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" />
										</div>

										<div class="clear"></div>

										<div class="col_two_third">
											<label for="template-contactform-subject">Asunto <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="template-contactform-subject" class="required sm-form-control" />
										</div>

										<div class="col_one_third col_last">
											<label for="template-contactform-service">Servicio</label>
											<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
												<option value="">-- Seleccione --</option>
												
												<?php foreach ($procedimientos->result() as $proc_cont) { ?>
												<option value="<?=$proc_cont->titulo;?>"><?=$proc_cont->titulo;?></option>
												<?php } ?>
											</select>
										</div>

										<div class="clear"></div>

										<div class="col_full">
											<label for="template-contactform-message">Mensaje <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
										</div>

										<div class="col_full hidden">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col_full">
											<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Mensaje</button>
										</div>

									</form>

									<script type="text/javascript">

										$("#template-contactform").validate({
											submitHandler: function(form) {
												$('.form-process').fadeIn();
												$(form).ajaxSubmit({
													target: '#contact-form-result',
													success: function() {
														$('.form-process').fadeOut();
														$(form).find('.sm-form-control').val('');
														$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
														SEMICOLON.widget.notifications($('#contact-form-result'));
													}
												});
											}
										});

									</script>

								</div><!-- .postcontent end -->

								<!-- Sidebar
								============================================= -->
								<div class="sidebar col_last nobottommargin">
									<address>
										<p>
											<?php echo $direccion; ?>
										</p>
									</address>
									<abbr title="Phone Number"><strong>Telefono:</strong></abbr><?php echo $telefono; ?><br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> <?php echo $fax; ?><br>
									<abbr title="Email Address"><strong>Email:</strong></abbr><?php echo $email; ?>
									<?php /* ?>
									<div class="widget noborder notoppadding">

										<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
											<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
											<div class="flexslider" style="width: auto;">
												<div class="slider-wrap">
													<div class="slide"></div>
												</div>
											</div>
										</div>

									</div>
									<?php */ ?>
									<div class="widget noborder notoppadding">

										<a href="#" class="social-icon si-small si-dark si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon si-small si-dark si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon si-small si-dark si-dribbble">
											<i class="icon-dribbble"></i>
											<i class="icon-dribbble"></i>
										</a>

										<a href="#" class="social-icon si-small si-dark si-forrst">
											<i class="icon-forrst"></i>
											<i class="icon-forrst"></i>
										</a>

										<a href="#" class="social-icon si-small si-dark si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>

										<a href="#" class="social-icon si-small si-dark si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

									</div>

								</div><!-- .sidebar end -->

							</div>

						</div>

					</section><!-- #content end -->

				</section>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						

					</div>

					

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2015 All Rights Reserved by Protos Tecnology.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> <?php echo $email; ?> <span class="middot">&middot;</span> <i class="icon-headphones"></i> <?php echo $telefono; ?> <span class="middot">&middot;</span> 
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?=$this->config->base_url();?>fronted_inicio/js/functions.js"></script>

</body>
</html>
