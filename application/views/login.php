<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("head"); ?>
<body>
<!-- PRELOADER -->
<img id="preloader" src="<?php echo site_url().'static/page_front/white/gif/preloader.gif'?>" alt="preloader" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
		<!-- HEADER -->
                <?php $this->load->view("header_secundary"); ?>
		<!-- //HEADER -->
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>Inicio de Sesión </b></h2>
				<p>Bienvenido a BITSHARE</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- BLOG -->
		<section id="blog">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- BLOG BLOCK -->
					<div class="blog_block col-lg-10 col-md-10 padbot50 col-md-offset-2">
						<!-- BLOG POST -->
						<div class="blog_post margbot100 clearfix" data-animated="fadeInUp">
							<div class="blog_post_descr">
                                                            <div id="fields">
                                                                    <form>
                                                                        <a class="blog_post_title" style="font-size: 26px !important;">Usuario</a>
                                                                            <input type="text" name="username" id="username" class="password_text"/>
                                                                            <br>
                                                                            <a class="blog_post_title" style="font-size: 26px !important;">Contraseña</a>
                                                                            <input type="password" name="password" id="password" class="password_text"/>
                                                                            <hr>
                                                                            <input class="contact_btn" onclick="send_login();" value="<?php echo replace_vocales_voculeshtml("Iniciar Sesión");?>" />
                                                                    </form>
                                                            </div>
								<hr>
                                                                <div class="blog_post_content"><a><?php echo replace_vocales_voculeshtml("¿Olvidaste tu contraseña?");?></a></div>
							</div>
						</div><!-- //BLOG POST -->
					</div><!-- //BLOG BLOCK -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG -->
	</div><!-- //PAGE -->
        <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
	<!-- FOOTER -->
        <?php $this->load->view("footer");?>
	<!-- //FOOTER -->
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.930880417326!2d-77.0350244846066!3d-12.116881791420631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c817d1ae2fd3%3A0x6979887ef7b081b5!2sCalle+Enrique+Palacios+420%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1500097903604" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div><!-- //MAP -->
</div>
</body>
</html>