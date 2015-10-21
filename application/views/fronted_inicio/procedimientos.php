<?php 
#La variable procedimientos contiene un arreglo con todos los procedimientos

echo "<pre>";
print_r($procedimientos);
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
                <h1>Procedimientos</h1>
                <!--<span>Showcase of Our Beautiful Gallery in Various Columns</span>-->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Procedimientos</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_full nobottommargin clearfix"> 

                        <div class="masonry-thumbs col-6 one-page-menu" data-big="3" data-lightbox="gallery">
                            <a href="#" data-href="#mamoplastia"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/1.jpg" alt="Gallery Thumb 1"></a>
                            <a href="#" data-href="#rinoplastia"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/2.jpg" alt="Gallery Thumb 2"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/3.jpg" alt="Gallery Thumb 3"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/4.jpg" alt="Gallery Thumb 4"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/5.jpg" alt="Gallery Thumb 5"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/6.jpg" alt="Gallery Thumb 6"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/7.jpg" alt="Gallery Thumb 7"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/9.jpg" alt="Gallery Thumb 9"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/10.jpg" alt="Gallery Thumb 10"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/11.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/11.jpg" alt="Gallery Thumb 14"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/12.jpg" alt="Gallery Thumb 12"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/8.jpg" alt="Gallery Thumb 13"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/12-1.jpg" alt="Gallery Thumb 15"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/6-1.jpg" alt="Gallery Thumb 16"></a>
                            <a href="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/4/6-2.jpg" alt="Gallery Thumb 12-1"></a>
                        </div>

                    </div>
                    
                </div>
                
                <div class="divider"><i class="icon-circle"></i></div>
                
                <section id="mamoplastia" class="page-section">
                    <div class="section nobg topmargin-lg nobottommargin">
                        
                        <div class="container clearfix">

                            <div class="col_half nobottommargin center">

                                <img src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/3.jpg" alt="Image" data-animate="fadeInLeft">

                            </div>

                            <div class="col_half nobottommargin col_last">

                                <div class="heading-block" style="padding-top: 40px;">

                                    <h2>Fresh from the Garden.</h2>
                                    <span>Duis mollis, est non commodo luctus. Donec sed odio dui</span>

                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, repudiandae, maxime, earum, sapiente assumenda non odit laborum qui vero vel quos sint excepturi in laudantium.</p>

                                

                            </div>

                        </div>
                    </div>
                </section>        
                
                <section id="rinoplastia" class="page-section">
                    <div class="section nobg notopmargin noborder bottommargin-sm">
                        <div class="container clearfix">

                            <div class="col_half nobottommargin">

                                <div class="heading-block" style="padding-top: 40px;">

                                    <h2>You'll be Lovin' It.</h2>
                                    <span>Duis mollis, est non commodo luctus. Donec sed odio dui</span>

                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, repudiandae, maxime, earum, sapiente assumenda non odit laborum qui vero vel quos sint excepturi in laudantium.</p>

                                

                            </div>

                            <div class="col_half bottommargin-sm center col_last">

                                <img src="<?=$this->config->base_url();?>fronted_inicio/images/portfolio/full/3.jpg" alt="Image" data-animate="fadeInRight">

                            </div>

                        </div>
                    </div>
                </section>

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