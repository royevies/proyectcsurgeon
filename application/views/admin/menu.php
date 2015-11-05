
<style>
    .popover{
        width: 300px;
    }

    .content-menu{
        width:150px;
        background:transparent;
        position:absolute;
        top:84px;
        left:0;
        z-index:10;
        -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=11, Direction=135, Color=#000111)";/*IE 8*/
        -moz-box-shadow: 5px 5px 11px 3px #000111;/*FF 3.5+*/
        -webkit-box-shadow: 5px 5px 11px 3px #000111;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
        box-shadow: 5px 5px 11px 3px #000111;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
        filter: progid:DXImageTransform.Microsoft.Shadow(Strength=11, Direction=135, Color=#000111); /*IE 5.5-7*/
    }
    .item-menu{
        width:150px;
        height:75px;
        border-top:1px dotted #f1f1f1;
        padding:5px;
        text-align: center;
    }
    .item-menu:hover{
        background: #9ECC02;
        box-shadow: inset 0px 5px 20px #466101;
        /*cursor:url("../public_html/imagenes/ivss_logo_cursor.png"),auto;*/
        cursor:pointer;
    }

    .content-menu a{
        color:black;
        text-decoration: none;
        font-size: 1.3em;
    }

    .content-menu a:hover{
        cursor:pointer;
        color:black;
    }

    .item-menu p{
        font-size: 0.7em;
        margin-top: 5px;
        margin-bottom:5px;
    }

    .img_menu{
        width:40px;
        height:auto;
        margin:auto;
        margin-top:2px;
        opacity:0.7;
    }
</style>

<div class="content-menu">

 <a id="sliders" class="item_panel_control" data-panel="panel_slider" data-content="Gestión del slider y mensajes publicitarios" rel="popover" data-placement="right" data-trigger="hover"> 
     <div class="item-menu">       
         <img src="<?=$this->config->base_url();?>fronted/img/iconos2/home.png" class="img_menu" />        
         <p>Inicio</p>
     </div>
 </a> 

 <a id="procedimientos" class="item_panel_control" data-panel="panel_procedimientos" data-content="Gestión de procedimientos" rel="popover" data-placement="right" data-trigger="hover"> 
     <div class="item-menu">       
        <img src="<?=$this->config->base_url();?>fronted/img/iconos2/relax8.png" class="img_menu" />        
        <p>Procedimientos</p>
    </div>
</a>  

<a id="galeria" class="item_panel_control" data-panel="panel_galeria" data-content="Galeria" rel="popover" data-placement="right" data-trigger="hover">
    <div class="item-menu">
        <img src="<?=$this->config->base_url();?>fronted/img/iconos2/galeria.png" class="img_menu" />        
        <p>Galeria</p>
    </div>
</a>


<a id="curriculum" class="item_panel_control" data-panel="panel_curriculum" data-content="Gestión de curriculum personal" rel="popover" data-placement="right"  data-trigger="hover">
    <div class="item-menu">
        <img src="<?=$this->config->base_url();?>fronted/img/iconos2/curriculum.png" class="img_menu" />        
        <p>Formación Profesional</p>
    </div>
</a>

<a id="testimonios" class="item_panel_control" data-panel="panel_testimonios" data-content="Gestión de testimonios de pascientes" rel="popover" data-placement="right" data-trigger="hover">
    <div class="item-menu">
        <img src="<?=$this->config->base_url();?>fronted/img/iconos2/usuarios.png" class="img_menu" />        
        <p>testimonios</p>
    </div>
</a>

<a id="contacto" class="item_panel_control" data-panel="panel_contacto" data-content="Contacto" rel="popover" data-placement="right" data-trigger="hover">
    <div class="item-menu">
        <img src="<?=$this->config->base_url();?>fronted/img/iconos2/correo3.png" class="img_menu" />        
        <p>Contacto 
            <?php if( $novistos > 0){ ?>

            <span class="badge"><?php echo $novistos; ?></span></p>

            <?php } ?>
        </div>
    </a>


    <a href="salir" id="cerrar" data-content="Cerrar sesión" rel="popover" data-placement="right" data-trigger="hover">
        <div class="item-menu">         
            <img src="<?=$this->config->base_url();?>fronted/img/iconos2/back57.png" class="img_menu" />
            <p>Cerrar sesión</p>
        </div>
    </a>

</div>


<script>
    $(document).on("ready",function(){
       $('#sliders,#curriculum, #contacto, #galeria, #procedimientos ,#testimonios ,#cerrar').popover({ trigger: "hover" });
   });
</script>