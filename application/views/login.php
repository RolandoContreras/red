
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
        <!-- END Contact info-->
        <!-- Get in touch -->
          <section class="well-xs text-center">
            <div class="container wow fadeInUp">
                <h1><?php echo replace_vocales_voculeshtml("Iniciar Sesión");?></h1>
                <!-- RD Mailform -->
                <form class='rd-mailform'>
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <label data-add-placeholder>
                                    <a href="#"><h6>Usuario</h6></a>
                                    <input type="text" id="username" name="username" placeholder="" data-constraints="@NotEmpty"/>
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label data-add-placeholder>
                                    <a href="#"><h6><?php echo replace_vocales_voculeshtml("Contraseña");?></h6></a>
                                    <input type="password"  id="password" name="password" placeholder="" data-constraints="@NotEmpty"/>
                                </label>
                            </div>
                           <div class="col-sm-12"><a></a></div>
                           <div class="col-sm-12">
                                                              <a href="#"><h6 class="olvide"><?php echo replace_vocales_voculeshtml("¿Olvidaste tu contraseña?");?></h6></a>
                            </div>
                            <div class="col-xs-12 text-center">
                                    <div class="mfControls">
                                        <button onclick="send_login();" class="btn btn-md btn-primary" type="button"><?php echo replace_vocales_voculeshtml("Iniciar Sesión");?></button>
                                    </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <span class="alert-0"></span>
                <!-- END RD Mailform -->
                <!--<address>8901 Marmora Road, Glasgow, D04 89GR</address>-->
            </div>
        </section>
        <!-- END Get in touch-->

        <!-- RD Google Map -->
<!--        <section class="rd-google-map">
            <div id="google-map" class="rd-google-map__model"></div>
            <ul class="rd-google-map__locations">
                <li data-x="-73.9874068" data-y="40.643180">
                    <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
                </li>
            </ul>
        </section>-->
        <!-- END RD Google Map -->
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
<!-- import Js contact -->
<script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
<!-- import bootbox.min -->
<script src="<?php echo site_url().'static/page_front/js/bootbox.min.js';?>"></script>
<!-- Login Backoffice-->
<!--<script src="static/page_front/js/login.js"></script>-->
<!-- End Login-->
</body>
</html>