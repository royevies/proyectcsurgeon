<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">


        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Galeria</h1>
<!--                <span>Showcase of Our Awesome Works in 3 Columns</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Portfolio</li>
                </ol>-->
            </div>

        </section><!-- #page-title end -->

<!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Portfolio Filter
                    ============================================= -->
                    

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio-3 portfolio-nomargin clearfix">

                        <?php foreach($galeria as $g){ ?>
                        <article class="portfolio-item pf-icons pf-illustrations">
                            <div class="portfolio-image">
<!--                                <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/3/4.jpg" alt="Morning Dew"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/3/4-1.jpg" alt="Morning Dew"></a></div>
                                        </div>
                                    </div>
                                </div>-->
                                <a href="portfolio-single.html">
                                    <img src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/3/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <div class="portfolio-desc">
                                        <h3><?=$g[0]->titulo;?></h3>
                                        <span><?=$g[0]->sub;?></span>
                                    </div>
                                    <?php 
                                    $count = 0;
                                    foreach($g as $i){ 
                                    $count++;
                                    if($count == 1){ ?>
                                        <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <!--<a href="<?=$this->config->base_url();?>fronted_inicio/include/ajax/portfolio-single-gallery.html" class="left-icon" data-lightbox="ajax"><i class="icon-line-stack-2"></i></a>-->
                                    <?php }else{ ?>
                                        <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <?php }} ?>
                                </div>
                            </div>
                        </article>
                        <?php } ?>

                    </div><!-- #portfolio end -->
                    
                    <!-- Portfolio Script
                    ============================================= -->
                    <script type="text/javascript">

//                        jQuery(window).load(function(){
//
//                            var $container = $('#portfolio');
//
//                            $container.isotope({ transitionDuration: '0.65s' });
//
//                            $('#portfolio-filter a').click(function(){
//                                $('#portfolio-filter li').removeClass('activeFilter');
//                                $(this).parent('li').addClass('activeFilter');
//                                var selector = $(this).attr('data-filter');
//                                $container.isotope({ filter: selector });
//                                return false;
//                            });
//
//                            $('#portfolio-shuffle').click(function(){
//                                $container.isotope('updateSortData').isotope({
//                                    sortBy: 'random'
//                                });
//                            });
//
//                            $(window).resize(function() {
//                                $container.isotope('layout');
//                            });
//
//                        });

                    </script><!-- Portfolio Script End -->

                </div>

            </div>

        </section><!-- #content end -->
        
        <!-- Footer
        ============================================= -->
        
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

