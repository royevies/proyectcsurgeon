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
                                <a href="portfolio-single.html">
                                    <img src="<?=$this->config->base_url();?>fronted_inicio/procedimientos/<?=$g->img_principal_procedimiento?>" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <div class="portfolio-desc">
                                        <h3><?=$g->titulo;?></h3>
                                        <span><?=$g->sub_titulo;?></span>
                                    </div>
                                    <a href="<?=$this->config->base_url();?>index.php/web/fotos/<?=$g->id_procedimiento?>" class="left-icon" data-lightbox="ajax"><i class="icon-line-stack-2"></i></a>
                                    
                                </div>
                            </div>
                        </article>
                        <?php } ?>

                    </div><!-- #portfolio end -->

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

