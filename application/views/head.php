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
        case "servicios":
            $title = "Servicios"; 
            $style_services = "active";
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
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href='//fonts.googleapis.com/css?family=Roboto:300,300italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='<?php echo site_url().'static/page_front/css/style.css';?>' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!--[if lt IE 10]>
    <div style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <?php // return $title;?>
    <script src="<?php echo site_url().'static/bootstrap/js/bootstrap.js';?>"></script>	                    
    <script src="<?php echo site_url().'static/bootstrap/js/bootstrap-alert.js';?>/"></script>
    <!--<link href="<?php echo site_url().'static/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">-->
</head>