<?php 
echo "<pre>";
print_r($testimonios);
echo "</pre>";

?>

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
							
						</ul>

					</div>

					<div class="section center footer-stick">

						<div class="fslider testimonial testimonial-full twitter-scroll twitter-feed" data-username="envato" data-count="2" data-animation="slide" data-arrows="false">
							<i class="i-plain i-large color icon-twitter divcenter bottommargin-sm"></i>
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"></div>
								</div>
							</div>
						</div>

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