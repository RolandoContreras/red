 <header class="page-header">
        <!-- RD Navbar -->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel -->
                    <div class="rd-navbar-panel">

                        <!-- RD Navbar Toggle -->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
                        <!-- END RD Navbar Toggle -->

                         <!-- RD Navbar Brand -->
                        <div class="rd-navbar-brand">
                            <img src="<?php echo site_url().'static/page_front/images/logo_b.png';?>"  class="brand-logo" alt="" width="44" height="40" style="margin-top: -4px;">
                            <a  href="<?php echo site_url();?>" class="brand-name" style="margin-left: -9px !important;">
                                IT<span>S</span>HARE
                            </a>
                        </div>
                        <!-- END RD Navbar Brand -->
                    </div>
                    <!-- END RD Navbar Panel -->
<!--
                    <div class="rd-navbar-info box box-skin-1">
                        <div class="box__left"><div class="icon icon-xs icon-contrast fa fa-phone-square"></div></div>
                        <div class="box__body"><a href="callto:#">800 555 7744</a></div>
                    </div>-->
                    
                    <div class="rd-navbar-nav-wrap">
                     <!--//    CSS ACTIVE FOR THE LINK ACTIVE-->
                     
                     <?php 
                            $style_about = "";
                            $style_contact = "";
                            $style_home = "";
                            $style_plan = "";
                            $url = explode("/",uri_string()); 
                            switch ($url[0]) {
                            case "acerca":
                                $style_about = "active";
                                break;
                            case "plan":
                                $style_plan = "active";
                                break;
                            case "contacto":
                                $style_contact = "active";
                                break;
                            default:
                                $style_home = "active";
                    }?>
                        <!-- RD Navbar Nav -->
                        <ul class="rd-navbar-nav">
                            <li>
                                <a href="<?php echo site_url();?>">Inicio</a>
                            </li>
                            <li class="<?php echo $style_about;?>">
                                <a href="<?php echo site_url().'acerca';?>">Acerca</a>
                            </li>
                            <li class="<?php echo $style_plan;?>">
                                <a href="<?php echo site_url().'plan';?>">Plan</a>
                            </li>
                            <li class="<?php echo $style_contact;?>">
                                <a href="<?php echo site_url().'contacto';?>">Contacto</a>
                            </li>
                             <li>
                                <a>Login</a>
                                     <ul class="rd-navbar-megamenu login">
                                         <li class="tittle_li">
                                            <h4 class="tittle_login">Inicio de Sesión</h4>
                                         </li>
                                            <form class='rd-mailform'>
                                                <fieldset>
                                                    <div class="row row_login">
                                                        <li>
                                                            <div class="col-sm-4">
                                                                <p style="text-align: left;">Username</p>
                                                                    <label data-add-placeholder>
                                                                        <input class="letter_login" type="text"
                                                                               id ="username"
                                                                               data-constraints="@NotEmpty"/>
                                                                    </label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p style="text-align: left;">Contraseña</p>
                                                                <label data-add-placeholder>
                                                                    <input class="letter_login" type="password"
                                                                           id ="password"
                                                                           data-constraints="@NotEmpty"/>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <div class="col-xs-12 text-center">
                                                            <div class="mfControls">
                                                                <button class="btn btn-md btn-primary" type="button">Iniciar Sesión</button>
                                                            </div>
                                                        </div>
                                                        <div id="mensaje">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                    </ul>
                            </li>
                        </ul>
                        <!-- END RD Navbar Nav -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- END RD Navbar -->
    </header>