<div class="">

    <div class="modal-padding clearfix">

        

    </div>

    <div class="fslider" data-pagi="false" data-animation="fade">
        <div class="flexslider">
            <div class="slider-wrap">
                <?php foreach($imagenes as $imagen){ ?>
                    <div class="slide"><a href="#"><div class="col_half nomargin"><img src="<?=$this->config->base_url();?>/fronted_inicio/procedimientos/<?=$imagen->img_antes?>" alt=""></div><div class="col_half col_last nomargin"><img src="<?=$this->config->base_url();?>/fronted_inicio/procedimientos/<?=$imagen->img_despues?>" alt=""></div></a></div>
                <?php } ?>
                <!--<div class="slide"><a href="#"><div class="col_half"><img src="<?=$this->config->base_url();?>/fronted_inicio/images/portfolio/single/modal/8.jpg" alt=""></div><div class="col_half col_last"><img src="<?=$this->config->base_url();?>/fronted_inicio/images/portfolio/single/modal/8.jpg" alt=""></div></a></div>-->
<!--                <div class="slide"><a href="#"><img src="http://localhost/proyectcsurgeon/fronted_inicio/images/portfolio/single/modal/8.jpg" alt=""></a></div>
                <div class="slide"><a href="#"><img src="http://localhost/proyectcsurgeon/fronted_inicio/images/portfolio/single/modal/6-3.jpg" alt=""></a></div>-->
            </div>
        </div>
    </div>

</div>