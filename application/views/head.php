<head>
<!--GET URL AND SELECT TITLE NAME -->    
<?php $url = explode("/",uri_string()); 
//    CSS ACTIVE FOR THE LINK ACTIVE
        $style_home ="";
        $style_about ="";
        $style_services ="";
        $style_contact ="";
        switch ($url[0]) {
////////
        case "inicio":
            $title = "Inicio";
            $style_home = "active";
            break;
        case "acerca":
            $title = "Acerca"; 
            $style_about = "active";
            break;
        case "plan":
            $title = "Plan"; 
            $style_plan = "active";
            break;
        case "contacto":
            $title = "Contacto"; 
            $style_contact = "active";
            break;
        default:
             $title = "Inicio";
           ;
}?>
    <title><?php echo $title;?></title>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!-- Stylesheets -->
    <link rel="icon" href="<?php echo site_url().'static/page_front/images/favicon.ico'?>" type="image/x-icon">
    <meta name="description" content="BitShare (compartir Bitcoin) es una plataforma financiera con el fin de ayudar a capitalizar y dar herramientas para un crecimiento económico y personal a las personas en este nuevo cambio de era.">
    <meta name="keywords" content="bitshare, software, multinivel, binario, negocio, mlm, dinero, bitcoin, millones, finanzas">
    <meta name="author" content="Bitshare" />
    <meta name="rating" content="General" />
    <meta name="robots" CONTENT="index,follow" />
    <link rel="shortcut icon" href="<?php echo site_url().'static/page_front/images/favicon.ico'?>" type="image/x-icon">
    <link href='//fonts.googleapis.com/css?family=Roboto:300,300italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='<?php echo site_url().'static/page_front/css/style.css';?>' rel='stylesheet' type='text/css'>
    <!--[if lt IE 10]>
    <div style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <![endif]-->
    <script src="<?php echo site_url().'static/bootstrap/js/bootstrap.js';?>"></script>
    
    <script src="<?php echo site_url().'static/bootstrap/social/bootstrap-social.css';?>"></script>
    
    <script src="<?php echo site_url().'static/bootstrap/social/assets/css/bootstrap.css';?>"></script>
    <script src="<?php echo site_url().'static/bootstrap/social/assets/css/font-awesome.css';?>"></script>
    <script src="<?php echo site_url().'static/bootstrap/social/assets/css/docs.css';?>"></script>
    
    <script type="text/javascript">
            var site = '<?php echo site_url();?>';
    </script>
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
</head>