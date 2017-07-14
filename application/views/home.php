<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("head"); ?>
<body>
<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" >
                                                    <span class="b1">B</span><span class="b2">I</span><span class="b3">T</span><span class="b4">S</span><span class="b5">H</span><span class="b4">A</span><span class="b3">R</span><span class="b2">E</span>
                                                </a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Inicio</a></li>
								<li class="scroll_btn"><a href="#about" >Acerca</a></li>
								<li class="scroll_btn"><a href="#projects" >Plan</a></li>
								<li class="scroll_btn"><a href="#team" >Equipo</a></li>
								<li class="scroll_btn"><a href="#news" >FAQs</a></li>
                                                                <li class="scroll_btn last"><a href="#contacts" >Contacto</a></li>
								<li class="sub-menu">
									<a href="blog.html">Login</a>
									<ul>
										<li><a href="blog.html" >Blog</a></li>
										<li><a href="blog-post.html" >Blog Post</a></li>
										<li><a href="portfolio-post.html" >Portfolio Single Work</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop">Creative</p>
							<p class="title2 captionDelay4 FromTop">White</p>
							<p class="title3 captionDelay6 FromTop">Templates</p>
							<p class="title4 captionDelay7 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">Responsive</p>
							<p class="title2 captionDelay4 FromLeft">Design</p>
							<p class="title3 captionDelay2 FromLeft">Theme</p>
							<p class="title4 captionDelay7 FromLeft">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">Amazing</p>
							<p class="title2 captionDelay2 FromBottom">Video</p>
							<p class="title3 captionDelay3 FromBottom">Background</p>
							<p class="title4 captionDelay5 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
					</li>
				</ul>
				
				<!-- VIDEO BACKGROUND -->
				<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
				<!-- //VIDEO BACKGROUND -->
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
				
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Alianzas</b></p>
                                                                <span><b>World Travel Vacation</b><?php echo replace_vocales_voculeshtml(" prestigiosa empresa mayorista de viajes turísticos con convenios en los mejores hoteles del mundo y primera empresa en aceptar bitcoin en el Perú.");?></span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Legalidad</b></p>
                                                                <span><?php echo replace_vocales_voculeshtml("Empresa 100% legal que reside en Perú con avales y permisos en dicha jurisdicción con oficinas en una zona exclusiva abierta los asociados.");?></span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Momento</b></p>
                                                                <span><?php echo replace_vocales_voculeshtml("Nace el 03 de Marzo del 2017 lo cual indica que toda persona que entre a la multiplaforma sea pionero en una empresa de gran envergadura.");?></span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Oportunidad</b></p>
                                                                <span><?php echo replace_vocales_voculeshtml("Somos globales desde el día uno,  tenemos un crecimiento exponencial, alianzas estratégicas con compañías prestigiosas y  abrimos puertas a personas para que desarrollen sus habilidades.")?></span>
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			<!-- CLEAN CODE -->
			<div class="cleancode_block">
				
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>BITSHARE</b> ES</p>
                                                        <span><?php echo replace_vocales_voculeshtml("Multiplataforma virtual que brinda distintos servicios e info-productos, a través de las criptodivisas (Bitcoin), que utilizando el sistema de mercadeo en red nos permite fidelizar a consumidores potenciales a la marca, de esta forma pudiendo diversificar nuestro activo más importante (clientes) en masa crítica a otras distintas empresas.")?></span>
						</div>
						<div class="tab-pane fade clearfix" id="tab2">
                                                    <p class="title"><?php echo replace_vocales_voculeshtml("¿Porqué ")?><b><?php echo replace_vocales_voculeshtml("Nosotros?")?></b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Responsive</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab4">
							<p class="title"><b>Documentation</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Quality</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab6">
							<p class="title"><b>Support</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
					</div>
					<ul id="myTab" class="nav nav-tabs">
                                                <li class="active"><a class="i3" href="#tab1" data-toggle="tab" ><i></i><span><?php echo replace_vocales_voculeshtml("¿Qué es?")?></span></a></li>
						<li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li>
						<li><a class="i3" href="#tab3" data-toggle="tab" ><i></i><span>Responsive</span></a></li>
						<li><a class="i4" href="#tab4" data-toggle="tab" ><i></i><span>Documentation</span></a></li>
						<li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li>
						<li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Support</span></a></li>
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->
			
			<!-- MULTI PURPOSE -->
			<div class="purpose_block">
				
				<!-- CONTAINER -->
				<div class="container">
					
					<!-- ROW -->
					<div class="row">
					
						<div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
                                                    <h2><b><?php echo replace_vocales_voculeshtml("Propósito");?></b> BITSHARE</h2>
                                                    <p><?php echo replace_vocales_voculeshtml("Nuestra visión es ser la primera marca pionera que abre brecha al mundo para dar a conocer la utilidad real de las criptomedas en un mundo tecnológico dónde reemplacemos la forma cotidiana de compra y venta presencial por una virtual, que en consecuencia, logremos un upgrade integral en la vida de las personas, a trevés de los servicios de nuestra multiplataforma.");?></p>
                                                    <p><?php echo replace_vocales_voculeshtml("Nuestra misión es mediante las redes de mercadeo y el constante desarrollo de nuestros productos vamos a poder ayudar a que las personas puedan desarrollar distintas áeras y experiencias con nosotros adaptando como un estilo de vida cotidiano la facilidad del  mundo virtual.");?></p>
							<a class="btn btn-active" href="javascript:void(0);" ><span data-hover="Si, yo quiero">Registrarme</span></a>
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
                                                    <img class="ipad_img1" src="<?php echo site_url().'static/page_front/white/images/front/img1.png'?>" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //MULTI PURPOSE -->
		</section><!-- //ABOUT -->
		
		
		<!-- PROJECTS -->
		<section id="projects" class="padbot20">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Paquetes</b> BITSHARE</h2>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a1.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/work/1.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >BASIC</a>
									<span>$125.00</span>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					
					<!-- work2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a2.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/work/2.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >EXECUTIVE</a>
									<span>$250.00</span>
								</div>
							</div>
						</div>
					</div><!-- //work2 -->
					
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a3.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/work/3.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >SENIOR EXECUTIVE</a>
									<span>$1,000.00</span>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
					
					<!-- work4 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a4.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/work/a4.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >MASTER</a>
									<span>$3,000.00</span>
								</div>
							</div>
						</div>
					</div><!-- //work4 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>
			
			
			<!-- OUR CLIENTS -->
<!--			<div class="our_clients">
			
				 CONTAINER 
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					 ROW 
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/2.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/3.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/4.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/5.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/6.jpg" alt="" />
						</div>
					</div> //ROW 
				</div> CONTAINER 
			</div> //OUR CLIENTS -->
		</section><!-- //PROJECTS -->
		
		
		<!-- TEAM -->
		<section id="team">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Equipo</b> De Trabajo</h2>
				
				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">
				
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/1.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Sarah Brown</p>
										<span>Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/2.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>David Jones</p>
										<span>Creative Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/3.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Kate Smith</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/4.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Peter Parker</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman4 -->
						
						<!-- crewman5 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="i<?php echo site_url().'static/page_front/white/images/front/team/5.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Jim Moss</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman5 -->
						
						<!-- crewman6 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/6.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>John Marks</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman6 -->
						
						<!-- crewman7 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/7.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Joe Mades</p>
										<span>Developer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman7 -->
						
						<!-- crewman8 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo site_url().'static/page_front/white/images/front/team/8.jpg'?>" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Julia Anderson</p>
										<span>Developer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman8 -->
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>FAQ</b> - Preguntas Frecuentes</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
                                                    <div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Qué es BITSHARE?")?></b></div>
                                                    <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Es una multiplataforma Online que trabaja bajo el sistema de multinivel que brinda servicios e info-productos a través de las criptodivisas (Bitcoin)”."); ?></div>
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿BITSHARE es una empresa legal?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Sí, somos una empresa legal registrada en la república del Perú con la siguiente denominación: Razón Social: INVERSIONES BITSHARE S.A.C . Número de Ruc: 20601940087”.");?></div>
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Quién es el dueño de BITSHARE?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Silene Carrasco Cruz, una líder de la industria (MLM) con más de 10 años de experiencia con organizaciones de personas en los 5 continentes y resultados alrededor del mundo”.");?></div>
						</div><!-- TESTIMONIAL3 -->
                                                <!-- TESTIMONIAL4 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Cuándo ingreso a BITSHARE firmo algún contrato?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Sí, cuando una persona ingresa a BITSHARE, firma un contrato de distribución mercantil que será válido durante la permanencia en BITSHARE.”");?></div>
						</div><!-- TESTIMONIAL4 -->
                                                <!-- TESTIMONIAL5 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Tengo algún límite de personas para invitar a BITSHARE?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("“No, un distribuidor puede invitar a tantas personas como quiera lo único que se pide es que cumplan con reglas de ética de la empresa.”");?></div>
						</div><!-- TESTIMONIAL5 -->
                                                <!-- TESTIMONIAL6 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Qué riesgos tengo si soy parte de BITSHARE?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("Todo negocio tiene riesgos, Bitshare no es la excepción, pero lo que buscamos es minimizar los riegos con 3 puntos principales: Ser pionero, comercializamos los productos más consumidos del mercado y los cobros se efectúan de forma diaria.");?>
</div>
						</div><!-- TESTIMONIAL6 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/blog/1.jpg'?>" alt="" />
								<a class="link" href="blog-post.html" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Inteligent Transitions In UX Design</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Photography</a> |</li>
									<li><a href="javascript:void(0);" >10 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/blog/2.jpg'?>" alt="" />
								<a class="link" href="blog-post.html"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Recent trends in storytelling</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Web Design</a> |</li>
									<li><a href="javascript:void(0);" >No comment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/blog/3.jpg'?>" alt="" />
								<a class="link" href="blog-post.html"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Supernatural FX Showreel</a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Creative</a> |</li>
									<li><a href="javascript:void(0);" >3 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<?php $this->load->view("footer");?>
        <!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
</body>
</html>