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
<!--                <ol class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li class="active">Procedimientos</li>
                </ol>-->
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

<!--                    <div class="col_full nobottommargin clearfix"> 

                        <div class="masonry-thumbs col-6 one-page-menu" data-big="3" data-lightbox="gallery">
                            <?php foreach ($procedimientos as $proc) { ?>
                            <a href="#" data-href="#<?=$proc->titulo;?>"><img class="image_fade" src="<?=$this->config->base_url();?>fronted_inicio/procedimientos/<?=$proc->img_principal_procedimiento;?>" alt="Gallery Thumb 1"></a>
                            <?php } ?>

                        </div>

                    </div>-->

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio-4 portfolio-nomargin clearfix">

                        <?php foreach ($procedimientos as $proc) { ?>
                        <article class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="#" data-href="#<?=$proc->titulo;?>">
                                    <img src="<?=$this->config->base_url();?>fronted_inicio/procedimientos/<?=$proc->img_principal_procedimiento?>" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <div class="portfolio-desc one-page-menu">
                                        <a href="#" data-href="#<?=$proc->titulo;?>"><h3><?=$proc->titulo;?></h3></a>
                                        <span><?=$proc->sub_titulo;?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>

                    </div><!-- #portfolio end -->
                    
                </div>
                
                <div class="divider"><i class="icon-circle"></i></div>
                <?php
                    $count = 0;
                    foreach ($procedimientos as $proc) {
                        $count++;

                        if($count % 2 != 0){
                ?>
                <section id="<?=$proc->titulo;?>" class="page-section">
                    <div class="section nobg topmargin-lg nobottommargin">

                        <div class="container clearfix">

                            <div class="col_half nobottommargin center">

                                <img src="<?=$this->config->base_url();?>fronted_inicio/procedimientos/<?=$proc->img_principal_procedimiento;?>" alt="Image" data-animate="fadeInLeft">

                            </div>

                            <div class="col_half nobottommargin col_last">

                                <div class="heading-block" style="padding-top: 40px;">

                                    <h2><?=$proc->titulo;?></h2>
                                    <span><?=$proc->sub_titulo;?></span>

                                </div>

                                <p><?=$proc->detalle;?></p>

                                

                            </div>

                        </div>
                    </div>
                </section>        
                
                <?php }else{ ?>
                <section id="<?=$proc->titulo;?>" class="page-section">
                    <div class="section nobg notopmargin noborder bottommargin-sm">
                        <div class="container clearfix">

                            <div class="col_half nobottommargin">

                                <div class="heading-block" style="padding-top: 40px;">

                                    <h2><?=$proc->titulo;?></h2>
                                    <span><?=$proc->sub_titulo;?></span>

                                </div>

                                <p><?=$proc->detalle;?></p>

                                

                            </div>

                            <div class="col_half bottommargin-sm center col_last">

                                <img src="<?=$this->config->base_url();?>fronted_inicio/procedimientos/<?=$proc->img_principal_procedimiento;?>" alt="Image" data-animate="fadeInRight">

                            </div>

                        </div>
                    </div>
                </section>

            </div>

        </section><!-- #content end -->
        <?php }} ?>
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