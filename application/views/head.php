<head>
<!--GET URL AND SELECT TITLE NAME-->    
<?php $url = explode("/",uri_string()); 
        switch ($url[0]) {
        case "home":
            $title = "Home";
            break;
        case "about":
            $title = "About";
            break;
        default:
             $title = "Home";
           ;
}?>
    <title><?php echo $title;?></title>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!-- Stylesheets -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href='//fonts.googleapis.com/css?family=Roboto:300,300italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://livedemo00.template-help.com/wt_58243/css/style.css" type='text/css'>
    <!--[if lt IE 10]>
    <div style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>