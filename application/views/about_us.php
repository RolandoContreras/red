<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
     <!--========================================================
                              HEAD
    =========================================================-->
    <?php $this->load->view("head"); ?>
<body>
<!-- The Main Wrapper -->
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <?php $this->load->view("header_secundary"); ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
        <!-- Our mission -->
        <section class="well-sm well-sm-inset-1">
            <div class="container">
                <h1><?php echo replace_vocales_voculeshtml("Misión & Visión");?></h1>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="<?php echo site_url().'static/page_front/images/empresa.jpg';?>" alt="misión" width="370" height="279">
                    </div>
                    <div class="col-md-8">
                        <p><?php echo replace_vocales_voculeshtml("Nuestra misión es ayudar a capitalizar y dar herramientas para un crecimiento económico y personal a los asociados en este nuevo cambio de era a través de la comercialización y el  buen manejo del bitcoin; convirtiéndose cada una de ellas en un cambista de bitcoin.");?></p><br>
                        <p><?php echo replace_vocales_voculeshtml("Nuestra visión consiste en lograr el liderazgo en el rubro de criptomoneda mediante un ecosistema sano creado  por los asociados. BitShare tiene como objetivo dar herramientas y ayudar a sus miles de clientes a lograr que los pagos sean más fáciles y rápidos en todo el mundo.");?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Our mission-->
        <!-- Why Us -->
        <section class="relative well-lg well-lg-inset-1">
            <div class="absolute wow fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/page-02_img06.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="container wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-7 col-md-5">
                        <h1><?php echo replace_vocales_voculeshtml("¿Porqué Nosotros?");?></h1>
                        <p class="inset-2"><?php echo replace_vocales_voculeshtml("Las inversiones de los asociados son diversificadas en un holding de empresas relacionadas al rubro de pesquería, belleza, bienes raíces, casas de cambios y principalmente en trading (compra y venta de bit coin). 
                        Todas las inversiones de BITSHARE son hechas en bit coin, y debido a la gran demanda del mercado se estima que este años se cierro en aproximadamente en $1200 por moneda, lo cual da seguridad al proyecto.");?>
                    </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Why Us-->

        <!-- Products -->
        <section class="well-md well-md-inset-1 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Empresas</h1>
                <ul class="index-list row">
                    <li class="col-md-4">
                        <div class="box">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Trading</a></h4>
                                <p><?php echo replace_vocales_voculeshtml("Hacemos compra y venta de bitcoin no solamente a personas de BitShare sino también a empresarios externos.");?></p>
                            </div>
                        </div>
                    </li>
                    
                    <li class="col-md-4">
                        <div class="box">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Belleza</a></h4>
                                <p><?php echo replace_vocales_voculeshtml("Primer negocio que empezamos hace más de 6 años, y con gran esfuerzo y dirección empezamos a crear negocios solidos los cuales son partes de nuestro holding.");?></p>
                            </div>
                        </div>
                    </li>

                    <li class="col-md-4">
                        <div class="box">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Pesca</a></h4>
                                <p><?php echo replace_vocales_voculeshtml("Manejamos embarcaciones pesqueras por más de 5 años con buenas rentabilidades anuales.");?></p>
                            </div>
                        </div>
                    </li>

                    <li class="col-md-4">
                        <div class="box" style="margin-top: 40px !important;">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Casas de Cambio</a></h4>
                                <p><?php echo replace_vocales_voculeshtml("Diversificamos en este rubro que está en constante crecimiento y muy atractivo.");?></p>
                            </div>
                        </div>
                    </li>
                    
                    <li class="col-md-4">
                        <div class="box" style="margin-top: 40px !important;">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Importaciones</a></h4>
                                <p><?php echo replace_vocales_voculeshtml("Comercializamos contenedores desde China y Panamá por más de 2 años con un equipo profesional y experto en el tema.");?></p>
                            </div>
                        </div>
                    </li>
                    
                    <li class="col-md-4">
                        <div class="box" style="margin-top: 40px !important;">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Software</a></h4>
                                <p><?php echo replace_vocales_voculeshtml("Hace más de 7 años nos dedicamos a la construcción de sistemas para empresas y desarrollo de software a nivel internacional.");?></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </section>
        <!-- END Products-->
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
   <?php $this->load->view("footer");?>
</div>
<!-- Core Scripts -->
<script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
<!-- Additional Functionality Scripts -->
<script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
<!-- Login Backoffice-->
<script src="static/page_front/js/login.js"></script>
<!-- End Login-->
</body><!-- Google Tag Manager -->
</html>