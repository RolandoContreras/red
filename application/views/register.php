
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
          <section class="well-xs text-center">
            <div class="container wow fadeInUp">
                <h1>REGISTRO</h1>
                <!-- RD Mailform -->
                <form class='rd-mailform'>
                    <fieldset>
                        <div class="row">
                            <!--<label for="usuario" class="col-lg-3 control-label">Usuario</label>-->
                            <div class="col-xs-12">
                                <label data-add-placeholder>
                                    <input type="text" onblur="validate_username(this.value);" id="usuario" name="usuario" placeholder="Usuario" maxlength="50" data-constraints="@NotEmpty"/>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label data-add-placeholder>
                                    <input type="password"  id="clave" name="clave" placeholder="Contraseña" data-constraints="@NotEmpty" maxlength="50"/>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label data-add-placeholder>
                                    <input type="password" onblur="validate_2passwordr(this.value);"  id="repita_clave" name="repita_clave" placeholder="Repetir contraseña" data-constraints="@NotEmpty" maxlength="50"/>
                                </label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <!--<label for="usuario" class="col-lg-3 control-label">Usuario</label>-->
                            <div class="col-xs-12">
                                <label data-add-placeholder>
                                    <input type="text" onblur="validate_username(this.value);" id="usuario" name="usuario" placeholder="Usuario" maxlength="50" data-constraints="@NotEmpty"/>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label data-add-placeholder>
                                    <input type="password"  id="clave" name="clave" placeholder="Contraseña" data-constraints="@NotEmpty" maxlength="50"/>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label data-add-placeholder>
                                    <input type="password" onblur="validate_2passwordr(this.value);"  id="repita_clave" name="repita_clave" placeholder="Repetir contraseña" data-constraints="@NotEmpty" maxlength="50"/>
                                </label>
                            </div>
                            
                            <div class="col-sm-12">
                                <label data-add-placeholder>
                                    <input type="text"  id="email" name="email" placeholder="Correo" data-constraints="@NotEmpty @Email"/>
                                </label>
                            </div>
                            
                            <div class="col-xs-12">
                                <label data-add-placeholder class="wide">
                                    <textarea id="message" name="message" placeholder="Mensaje"  data-constraints="@NotEmpty"></textarea>
                                </label>
                            </div>
                           <div class="col-sm-6">
                               
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
</body>
</html>