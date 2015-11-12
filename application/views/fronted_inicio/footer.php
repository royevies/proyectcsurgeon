<?php 
							$direccion  = "";
							$email  = "";
							$telefono  = "";
							$fax  = "";
							$facebook  = "";
							$twitter  = "";
							$instagram  = "";

							foreach ($datos_personales as $dato) {
								$direccion = $dato->direccion;
								$email = $dato->email;
								$telefono = $dato->telefono;
								$fax = $dato->fax;
								$facebook = $dato->facebook;
								$twitter = $dato->twitter;
								$instagram = $dato->instagram;
							}

							?>
<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Protos Lab.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="<?php echo $facebook; ?>" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="<?php echo $twitter; ?>" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="<?php echo $instagram; ?>" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> <?php echo $email; ?> <span class="middot">&middot;</span> <i class="icon-headphones"></i> <?php echo $telefono; ?> <span class="middot">&middot;</span> 
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>
