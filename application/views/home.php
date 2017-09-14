<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("head"); ?>
<body>
<!-- PRELOADER -->
<img id="preloader" src="<?php echo site_url().'static/page_front/white/gif/preloader.gif'?>" alt="preloader" />
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">
		<!-- HEADER -->
                <?php $this->load->view("header"); ?>
		<!-- //HEADER -->
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
                                                    <p class="title1 captionDelay2 FromTop">BITSHARE&nbsp;</p>
							<p class="title2 captionDelay4 FromTop"> - Inicia</p>
                                                        <p class="title4 captionDelay7 FromBottom"><?php echo replace_vocales_voculeshtml("Primera multiplataforma  peruana con servicios y productos en los rubros de viaje, desarrollo personal y comercio.");?></p>
						</div>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">Training</p>
							<p class="title2 captionDelay4 FromLeft">Travel</p>
							<p class="title1 captionDelay6 FromLeft">Trade</p>
							<p class="title4 captionDelay7 FromLeft">Ten un estilo de vida distinto, empieza a viajar, entrenarte y convertirte en un profesional del trading.</p>
						</div>
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">Asombroso</p>
							<p class="title2 captionDelay2 FromBottom">Estilo</p>
                                                        <p class="title1 captionDelay1 FromBottom">De Vida</p>
                                                        <p class="title4 captionDelay5 FromBottom"><?php echo replace_vocales_voculeshtml("Sé parte de los pioneros y ten un asombroso estilo de vida.");?></p>
						</div>
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
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Alianzas</b></p>
                                                                <span><b>World Travel Vacation</b><?php echo replace_vocales_voculeshtml("Prestigiosa empresa mayorista de viajes turísticos con convenios en los mejores hoteles y resort del mundo.");?></span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Legalidad</b></p>
                                                                <span><?php echo replace_vocales_voculeshtml("Empresa 100% legal que reside en Perú con avales y permisos en dicha jurisdicción con oficinas en una zona exclusiva abierta los asociados.");?></span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 margbot30">
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
					
                                    
                                    <div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>BITSHARE</b> ES</p>
							<span><?php echo replace_vocales_voculeshtml("Multiplataforma virtual que brinda distintos servicios e info-productos, que utilizando el sistema de mercadeo en red nos permite fidelizar a consumidores potenciales a la marca, de esta forma pudiendo diversificar nuestro activo más importante (clientes) en masa crítica a otras distintas empresas.")?></span>
						</div>
						<div class="tab-pane fade clearfix" id="tab2">
                                                    <p class="title"><b><?php echo replace_vocales_voculeshtml("¿Porqué Nosotros?")?></b></p>
                                                    <span><?php echo replace_vocales_voculeshtml("Primera multiplataforma latinoamericana con profesionales altamente calificados que aseguran la calidad de los productos y servicio que brindamos, productos altamente reconsumibles y compañía con una visión mundial.");?></span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Momento</b></p>
							<span><?php echo replace_vocales_voculeshtml("BITSHARE nace legalmente el 03 de Marzo del 2017 en Perú lo cual indica que toda persona que entre a la multiplaforma en este momento es pionera o fundador.");?></span>
						</div>
						<div class="tab-pane fade clearfix" id="tab4">
							<p class="title"><b>Fortaleza</b></p>
                                                        <span><?php echo replace_vocales_voculeshtml("El corporativo y los asociados en BITSHARE tienen una meta de vida que es ayudar las personas a tener un crecimiento y desarrollo personal a fin de que puedan tener más posibilidades en este nuevo cambio de era.")?></span>
						</div>
						<div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Productos y Servicios</b></p>
                                                        <span><?php echo replace_vocales_voculeshtml("Los productos que se encuentran en la plataforma son producidos por profesionales altamente calificados en sus respectivos rubros y es de uso exclusivos para bitshare, hechos con el fin de ayudar a los asociados en el área de desarrollo personal, liderazgo y habilidades en trading.");?></span>
						</div>
						<div class="tab-pane fade clearfix" id="tab6">
							<p class="title"><b>Cambios de Vida</b></p>
                                                        <span><?php echo replace_vocales_voculeshtml("Cada persona que entra a la multiplataforma desde el primer día comienza a tener un cambio de vida, empieza a viajar, entrenarse, capacitarse y prepararse como profesional en el mercado bursátil.");?></span>
						</div>
					</div>
                                        
                                        <ul id="myTab" class="nav nav-tabs">
                                            <li class="active"><a class="i5" href="#tab1" data-toggle="tab" ><i></i><span><?php echo replace_vocales_voculeshtml("¿Qué es?");?></span></a></li>
						<li><a class="i5" href="#tab2" data-toggle="tab" ><i></i><span><?php echo replace_vocales_voculeshtml("¿Porqué?");?></span></a></li>
						<li><a class="i5" href="#tab3" data-toggle="tab" ><i></i><span><?php echo replace_vocales_voculeshtml("Es ahora");?></span></a></li>
                                                <li><a class="i5" href="#tab4" data-toggle="tab" ><i></i><span><?php echo replace_vocales_voculeshtml("Pasión");?></span></a></li>
						<li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Calidad</span></a></li>
						<li><a class="i5" href="#tab6" data-toggle="tab" ><i></i><span>Nuevo Comienzo</span></a></li>
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
                                                    <p><?php echo replace_vocales_voculeshtml("Nuestra visión es ser la primera compañía de productos y servicios que trabaja bajo una plataforma virtual dónde reemplacemos la forma cotidiana de compra y venta presencial por una virtual, que en consecuencia, logremos un upgrade integral en la vida de las personas, a través de los servicios de nuestra multiplataforma.");?></p>
                                                    <p><?php echo replace_vocales_voculeshtml("Nuestra misión es mediante las redes de mercadeo y el constante desarrollo de nuestros productos vamos a poder ayudar a que las personas puedan desarrollar distintas áeras y experiencias con nosotros adaptando como un estilo de vida cotidiano la facilidad del  mundo virtual.");?></p>
                                                    <a class="btn btn-active" href="<?php echo site_url().'registro';?>" ><span data-hover="Si, yo quiero">Registrarme</span></a>
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
					
					<!-- Plan1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a1.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/packet/a1.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
                                                                    <a href="<?php echo site_url().'paquete/basic';?>">BASIC</a>
                                                                        <span><b>$125.00</b></span>
								</div>
							</div>
						</div>
					</div><!-- //Plan1 -->
					<!-- Plan2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a2.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/packet/a2.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="<?php echo site_url().'paquete/executive';?>" >EXECUTIVE</a>
                                                                        <span><b>$250.00</b></span>
								</div>
							</div>
						</div>
					</div>
                                        <!-- //Plan3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a5.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/packet/a1.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
                                                                    <a href="<?php echo site_url().'paquete/investor';?>">INVESTOR</a>
                                                                        <span><b>$500.00</b></span>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a3.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/packet/a3.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="<?php echo site_url().'paquete/business';?>">BUSINESS</a>
                                                                        <!--<a href="portfolio-post.html" >SENIOR EXECUTIVE</a>-->
                                                                        <span><b>$1,000.00</b></span>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
					
					<!-- work4 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/packet/a4.jpg'?>" alt="" />
								<a class="zoom" href="<?php echo site_url().'static/page_front/white/images/front/packet/a4.jpg'?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="<?php echo site_url().'paquete/master';?>">MASTER</a>
                                                                        <span><b>$3,000.00</b></span>
								</div>
							</div>
						</div>
					</div><!-- //work4 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>
		</section><!-- //PROJECTS -->
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
                                                    <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Es una multiplataforma Online que trabaja bajo el sistema de multinivel que brinda servicios e info-productos desarrollados en tres rubros: viajes, desarrollo personal y comercio”.”."); ?></div>
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿BITSHARE es una empresa legal?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Sí, somos una empresa legal registrada en la república del Perú con la siguiente denominación: Razón Social: INVERSIONES BITSHARE S.A.C . Número de Ruc: 20601940087”.");?></div>
						</div><!-- TESTIMONIAL2 -->
                                                <!-- TESTIMONIAL4 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Cómo puedo ser asociado de la empresa?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("1. Crear una cuenta en la sección de registro. <br/>2. Hacer una compra de cualquiera de los paquetes de BITSHARE.");?></div>
						</div><!-- TESTIMONIAL4 -->
                                                <!-- TESTIMONIAL5 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Hay restricciones de edad para los distribuidores?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("“Sí, los distribuidores de BITSHARE deben ser sólo personas adultas mayores de 18 años.”");?></div>
						</div><!-- TESTIMONIAL5 -->
                                                <!-- TESTIMONIAL6 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Cómo funciona el sistema de afiliados?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("El programa de afiliados de la empresa BITSHARE permite obtener ingresos adicionales con un esfuerzo mínimo vendiendo nuestros productos y servicios a otras personas y recomendando.");?>
</div>
						</div><!-- TESTIMONIAL6 -->
                                                <!-- TESTIMONIAL7 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Es posible cambiar información introducida durante el registro?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("Tenga cuidado al llenar el formulario de registro, compruebe antes de confirmar la información introducida. Algunos datos para fines de seguridad no se pueden cambiar. En una situación de emergencia, póngase en contacto con el soporte a través del correo electrónico support@yourbitshares.com o contáctenos a través de la sección contacto.");?>
</div>
						</div><!-- TESTIMONIAL8 -->
                                                <!-- TESTIMONIAL7 -->
						<div class="item">
							<div class="testim_content"><b><?php echo replace_vocales_voculeshtml("¿Cómo puedo encontrar mi enlace de referencia?")?></b></div>
                                                        <div class="testim_content"><?php echo replace_vocales_voculeshtml("Su enlace de referencia se le asigna al registrarse y está disponible en su cuenta de backoffice (oficina virtual) en la pestaña mi perfil.");?>
</div>
						</div><!-- TESTIMONIAL8 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
                                                            <img src="<?php echo site_url().'static/page_front/white/images/front/blog/bitcoin.jpg'?>" alt="" width="1280" height="800"/>
								<a class="link" href="<?php echo site_url().'noticias/que-es-criptomoneda';?>" ></a>
							</div>
							<div class="post_item_content">
                                                            <a class="title" href="<?php echo site_url().'noticias/que-es-criptomoneda';?>" ><?php echo replace_vocales_voculeshtml("¿Qué es la criptomoneda? - Bitcoin");?></a>
<!--								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Anna</a> |</li>
									<li><a href="javascript:void(0);" >Photography</a> |</li>
									<li><a href="javascript:void(0);" >10 Comments</a></li>
								</ul>-->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
                                                            <img src="<?php echo site_url().'static/page_front/white/images/front/blog/blockchain.jpg'?>" alt="" width="1280" height="800"/>
                                                            <a class="link" href="<?php echo site_url().'noticias/blockchain-cadena-de-bloques';?>"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="<?php echo site_url().'noticias/blockchain-cadena-de-bloques';?>" ><?php echo replace_vocales_voculeshtml("Blockchain - Cadena de bloques");?></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/blog/bank.jpg'?>" alt="" width="1280" height="800"/>
								<a class="link" href="<?php echo site_url().'noticias/bitcoin-la-nueva-realidad';?>"></a>
							</div>
							<div class="post_item_content">
                                                            <a class="title" href="<?php echo site_url().'noticias/bitcoin-la-nueva-realidad';?>" ><?php echo replace_vocales_voculeshtml("Bitcoin la nueva realidad");?></a>
						</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
                
	</div><!-- //PAGE -->
	<div id="spinner"></div>
	<!-- CONTACTS -->
	<section id="contacts">
            
        </section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<?php $this->load->view("footer");?>
        <!-- //FOOTER -->
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.930880417326!2d-77.0350244846066!3d-12.116881791420631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c817d1ae2fd3%3A0x6979887ef7b081b5!2sCalle+Enrique+Palacios+420%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1500097903604" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div><!-- //MAP -->
<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
</div>
</body>
</html>