<div>

    <div class="modal-padding clearfix">

        

    </div>

    <div class="fslider" data-pagi="false" data-animation="fade">
        <div class="flexslider">
            <div class="slider-wrap" style="padding-left: 4%">
                <?php if($imagenes){ ?>
                <?php foreach($imagenes as $imagen){ ?>
                    <div class="slide"><a href="#"><div class="col_half nomargin"><img src="<?=$this->config->base_url();?>/fronted_inicio/procedimientos/<?=$imagen->img_antes?>" alt=""></div><div class="col_half col_last nomargin"><img src="<?=$this->config->base_url();?>/fronted_inicio/procedimientos/<?=$imagen->img_despues?>" alt=""></div></a></div>
                <?php } ?>
                <?php }else{ ?>
                        <?php if($ln == "es"){ ?>
                            <div class="heading-block center dark"><h2>NO HAY IMAGENES DISPONIBLES</h2></div>
                        <?php }else{ ?>
                            <div class="heading-block center dark"><h2>Não há imagens disponíveis</h2></div>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>

</div>