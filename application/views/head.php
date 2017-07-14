<head>
	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- CSS -->
        <link href="<?php echo site_url().'static/page_front/white/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url().'static/page_front/white/css/flexslider.css';?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url().'static/page_front/white/css/prettyPhoto.css';?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url().'static/page_front/white/css/animate.css';?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo site_url().'static/page_front/white/css/owl.carousel.css';?>" rel="stylesheet">
	<link href="<?php echo site_url().'static/page_front/white/css/style.css';?>" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="<?php echo site_url().'static/page_front/white/js/jquery.min.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/bootstrap.min.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/jquery.prettyPhoto.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/jquery.nicescroll.min.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/superfish.min.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/jquery.flexslider-min.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/owl.carousel.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/jquery.mb.YTPlayer.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/animate.js';?>" type="text/javascript"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/jquery.BlackAndWhite.js';?>"></script>
	<script src="<?php echo site_url().'static/page_front/white/js/myscript.js';?>" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
</head>