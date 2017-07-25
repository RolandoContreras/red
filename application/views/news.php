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
		<!-- PACKAGE -->
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><?php echo $title;?></h2>
			</div>
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- PORTFOLIO -->
		<section id="portfolio">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					
					<!-- SIDEBAR -->
					<div class="sidebar col-lg-4 col-md-4 pull-right padbot50">
						<!-- TEXT WIDGET -->
						<div class="sidepanel widget_text">
							<div class="single_portfolio_post_title"><?php echo $title_content;?></div>
							<p><?php echo $content;?></p>
						</div><!-- //TEXT WIDGET -->
						<hr>
                                                    <ul class="shared">
                                                        <li><a target="_blank" href="https://www.youtube.com/channel/UCnvEpHFTdj0LZ8JaMKKTUMQ" ><i class="fa fa-youtube"></i></a></li>
                                                            <li><a target="_blank" href="https://www.facebook.com/bitshareoficial/" ><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:void(0);" ><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
					</div><!-- //SIDEBAR -->
					
					<!-- PORTFOLIO BLOCK -->
					<div class="portfolio_block col-lg-8 col-md-8 pull-left padbot50">
						
						<!-- SINGLE PORTFOLIO POST -->
						<div class="single_portfolio_post clearfix" data-animated="fadeInUp">
							
							<!-- PORTFOLIO SLIDER -->
							<div class="flexslider portfolio_single_slider">
								<ul class="slides">
                                                                    <li><img src="<?php echo site_url().$image;?>" alt="paquete" /></li>
								</ul>
							</div><!-- //PORTFOLIO SLIDER -->
						</div><!-- //SINGLE PORTFOLIO POST -->
					</div><!-- //PORTFOLIO BLOCK -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
			
			
			<!-- CONTAINER -->
			<div class="container">
				<h2>Noticias</h2>
			</div><!-- //CONTAINER -->
			
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
                                                            <img src="<?php echo site_url().'static/page_front/white/images/front/blog/bitcoin.jpg';?>" alt="paquete" />
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
                                                                    <a href="<?php echo site_url().'noticias/que-es-criptomoneda';?>" ><?php echo replace_vocales_voculeshtml("¿Qué es la criptomoneda? - Bitcoin");?></a>
                                                                    <span><?php echo replace_vocales_voculeshtml("Actívate Ahora");?></span>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					
					<!-- work2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/blog/blockchain.jpg';?>" alt="paquete" />
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="<?php echo site_url().'noticias/blockchain-cadena-de-bloques';?>">Blockchain - Cadena de bloques</a>
									<span><?php echo replace_vocales_voculeshtml("Actívate Ahora");?></span>
								</div>
							</div>
						</div>
					</div><!-- //work2 -->
					
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?php echo site_url().'static/page_front/white/images/front/blog/bank.jpg';?>" alt="paquete" />
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="<?php echo site_url().'noticias/bitcoin-la-nueva-realidad';?>" >Bitcoin la nueva realidad</a>
                                                                    <span><?php echo replace_vocales_voculeshtml("Actívate Ahora");?></span>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>
		</section><!-- //PORTFOLIO -->
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.930880417326!2d-77.0350244846066!3d-12.116881791420631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c817d1ae2fd3%3A0x6979887ef7b081b5!2sCalle+Enrique+Palacios+420%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1500097903604" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div><!-- //MAP -->
        http://localhost/red/static/page_front/white/css/style.css
<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
</div>
<style>
    #btn_hover:hover{
        color:black !important;
        background-color: gainsboro;
    }
</style>
</body>
</html>