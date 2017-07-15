<!DOCTYPE html>
<html lang="es" class="wide wow-animation">
<!--======================================================== HEAD =========================================================-->
<?php $this->load->view("head"); ?>

<body>
    <!-- The Main Wrapper -->
    <div class="page">
        <!--======================================================== HEADER =========================================================-->
        <?php $this->load->view("header_secundary"); ?>
        <!--======================================================== CONTENT =========================================================-->
        <main class="page-content">
            <!-- END Contact info-->
            <!-- Get in touch -->
            <section class="well-xs text-center">
                <div class="container wow fadeInUp">
                    <h1>
                        <?php echo replace_vocales_voculeshtml("Iniciar Sesión");?>
                    </h1>
                    <!-- RD Mailform -->
                    <form class='rd-mailform'>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6><a href="#">Usuario</a></h6> <label data-add-placeholder> <input type="text" id="username" name="username" placeholder="" data-constraints="@NotEmpty"/> </label> </div>
                                <div class="col-sm-6">
                                    <h6>
                                        <a href="#">
                                            <?php echo replace_vocales_voculeshtml("Contraseña");?>
                                        </a>
                                    </h6> <label data-add-placeholder> <input type="password" id="password" name="password" placeholder="" data-constraints="@NotEmpty"/> </label> </div>
                                <div class="col-sm-12"><a></a></div>
                                <div class="col-sm-12">
                                    <h6 class="olvide">
                                        <a href="<?php echo site_url().'recuperar';?>">
                                            <?php echo replace_vocales_voculeshtml("¿Olvidaste tu contraseña?");?>
                                        </a>
                                    </h6>
                                </div>
                                <div class="col-xs-12 text-center">
                                    <div class="mfControls"> <button onclick="send_login();" class="btn btn-md btn-primary" type="button"><?php echo replace_vocales_voculeshtml("Iniciar Sesión");?></button> </div>
                                </div>
                            </div>
                        </fieldset>
                    </form> <span class="alert-0"></span>
                    <!-- END RD Mailform -->
                    <!--<address>8901 Marmora Road, Glasgow, D04 89GR</address>--></div>
            </section>
            <!-- END Get in touch-->
        </main>
        <!--======================================================== FOOTER ==========================================================-->
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