<header class="page-header">
  <!-- RD Navbar -->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static">
      <div class="rd-navbar-inner">
        <!-- RD Navbar Panel -->
        <div class="rd-navbar-panel">
          <!-- RD Navbar Toggle --><button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
          <!-- END RD Navbar Toggle -->
          <!-- RD Navbar Brand -->
          <div class="rd-navbar-brand"><a href="<?php echo site_url();?>" class="brand-name" style="margin-left: -9px !important;"> BIT<span>S</span>HARE </a> </div>
          <!-- END RD Navbar Brand -->
        </div>
        <!-- END RD Navbar Panel -->
        <!--SOCIAL NETWORK-->
        <div class="rd-navbar-info box box-skin-1">
          <div class="box__body"> <span class="siguenos">S&iacute;guenos</span>
            <!--<i class="fa fa-camera-retro"></i>-->
            <a href="https://www.facebook.com/bitshareoficial/" target="_blank"> <span class="icon-wrapp_face"> <i class="fa fa-facebook fa-1g"></i> </span> </a>
            <a href="https://www.youtube.com/channel/UCnvEpHFTdj0LZ8JaMKKTUMQ"
              target="_blank"> <span class="icon-wrapp_you"> <i class="fa fa-youtube-play fa-1g"></i> </span> </a>
          </div>
        </div>
        <!--END SOCIAL NETWORK-->
        <div class="rd-navbar-nav-wrap">
          <!--// CSS ACTIVE FOR THE LINK ACTIVE-->
          <?php $style_about = ""; $style_contact = ""; $style_home = ""; $style_plan = ""; $url = explode("/",uri_string()); switch ($url[0]) { case "acerca": $style_about = "active"; break; case "plan": $style_plan = "active"; break; case "contacto": $style_contact = "active"; break; default: $style_home = "active"; }?>
          <!-- RD Navbar Nav -->
          <ul class="rd-navbar-nav">
            <li> <a href="<?php echo site_url();?>">Inicio</a> </li>
            <li class="<?php echo $style_about;?>"> <a href="<?php echo site_url().'acerca';?>">Acerca</a> </li>
            <li class="<?php echo $style_plan;?>"> <a href="<?php echo site_url().'plan';?>">Plan</a> </li>
            <li class="<?php echo $style_contact;?>"> <a href="<?php echo site_url().'contacto';?>">Contacto</a> </li>
            <li> <a href="<?php echo site_url().'login';?>">Login</a> </li>
            <li> <a href="<?php echo site_url().'faq';?>">FAQ</a> </li>
          </ul>
          <!-- END RD Navbar Nav -->
        </div>
      </div>
    </nav>
  </div>
  <!-- END RD Navbar -->
</header>