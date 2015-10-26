<div class="">

    <div class="modal-padding clearfix">

        

    </div>

    <div class="fslider" data-pagi="false" data-animation="fade">
        <div class="flexslider">
            <div class="slider-wrap">
                <?php if($imagenes){ ?>
                <?php foreach($imagenes as $imagen){ ?>
                    <div class="slide"><a href="#"><div class="col_half nomargin"><img src="<?=$this->config->base_url();?>/fronted_inicio/procedimientos/<?=$imagen->img_antes?>" alt=""></div><div class="col_half col_last nomargin"><img src="<?=$this->config->base_url();?>/fronted_inicio/procedimientos/<?=$imagen->img_despues?>" alt=""></div></a></div>
                <?php } ?>
                <?php }else{ ?>
                    <div class="divcenter text-center dark"><h2>NO HAY IMAGENES DISPONIBLES</h2></div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>