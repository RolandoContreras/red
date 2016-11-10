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
                            <img src="<?php echo site_url().'static/page_front/images/logo.png';?>" class="brand-logo" alt="" width="78" height="40">
                            <a href="<?php echo site_url();?>" class="brand-name">
                                C<span>o</span>nnect
                            </a>
                        </div>
                        <!-- END RD Navbar Brand -->
                    </div>
                    <!-- END RD Navbar Panel -->

                    <div class="rd-navbar-info box box-skin-1">
                        <div class="box__left"><div class="icon icon-xs icon-contrast fa fa-phone-square"></div></div>
                        <div class="box__body"><a href="callto:#">800 555 7744</a></div>
                    </div>
                    
                    <div class="rd-navbar-nav-wrap">
                     <!--//    CSS ACTIVE FOR THE LINK ACTIVE-->
                     
                     <?php 
                            $style_about = "";
                            $style_contact = "";
                            $style_home = "";
                            $style_services = "";
                            $url = explode("/",uri_string()); 
                            switch ($url[0]) {
                            case "about":
                                $style_about = "active";
                                break;
                            case "services":
                                $style_services = "active";
                                break;
                            case "contact":
                                $style_contact = "active";
                                break;
                            default:
                                $style_home = "active";
                    }?>
                        <!-- RD Navbar Nav -->
                        <ul class="rd-navbar-nav">
                            <li>
                                <a href="<?php echo site_url();?>">Home</a>
                                <!-- RD Navbar Megamenu -->
                                <ul class="rd-navbar-megamenu">
                                    <li>
                                        <h1>Our Advantages</h1>
                                    </li>
                                    <li>
                                        <img src="<?php echo site_url().'static/page_front/images/megamenu-1.jpg';?>" alt="" width="343" height="177">
                                        <h4>Affordable Costs</h4>
                                        <p>We set low prices for our services to make telecommunications affordable for the global population.</p>
                                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                                    </li>
                                    <li>
                                        <img src="<?php echo site_url().'static/page_front/images/megamenu-2.jpg';?>" alt="" width="343" height="177">
                                        <h4>Diverse Orientation</h4>
                                        <p>Our services are oriented towards governmental agencies, commercial enterprises, and housing estates.</p>
                                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                                    </li>
                                    <li>
                                        <img src="<?php echo site_url().'static/page_front/images/megamenu-3.jpg';?>" alt="" width="343" height="177">
                                        <h4>Significant Discounts</h4>
                                        <p>Our customers who make a repeat order of our services get a 30% discount.</p>
                                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                                    </li>
                                </ul>
                                <!-- END RD Navbar Megamenu -->
                            </li>
                            <li class="<?php echo $style_about;?>">
                                <a href="<?php echo site_url().'about';?>">About</a>
                                <!-- RD Navbar Dropdown -->
                                <ul class="rd-navbar-dropdown">
                                    <li>
                                        <a href="shortcodes.php">Our Principles</a>
                                    </li>
                                    <li>
                                        <a href="#">Latest News</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li>
                                                <a href='#'>Featured Events</a>
                                            </li>
                                            <li>
                                                <a href='#'>Useful links</a>
                                            </li>
                                            <li>
                                                <a href='#'>Special Offers</a>
                                            </li>
                                            <li>
                                                <a href='#'>What’s New?</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Special Offers</a>
                                    </li>
                                    <li>
                                        <a href="#">Forum</a>
                                    </li>
                                </ul>
                                <!-- END RD Navbar Dropdown -->

                            </li>
                            <li class="<?php echo $style_services;?>">
                                <a href="<?php echo site_url().'services';?>">Services</a>
                            </li>
                            <li class="">
                                <a href="index-3.html">Gallery</a>
                            </li>
                            <li class="<?php echo $style_contact;?>">
                                <a href="<?php echo site_url().'contact';?>">Contacts</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'login';?>">Login</a>
                            </li>
                        </ul>
                        <!-- END RD Navbar Nav -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- END RD Navbar -->
    </header>