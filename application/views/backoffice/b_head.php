<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Software Millenium">
   <meta name="keywords" content="millenium, software, multinivel, binario, forzada, matriz, unilevel">
    <link rel="shortcut icon" type="image/png"Sref="/angel/favicon.png">
    <title>BITSHARE</title>
       <!-- FONT AWESOME-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/font-awesome.min.css';?>">
       <!-- SIMPLE LINE ICONS-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
       <!-- ANIMATE.CSS-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/animate.min.css';?>">
       <!-- WHIRL (spinners)-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/whirl.css';?>">
       <!-- =============== PAGE VENDOR STYLES ===============-->
       <!-- WEATHER ICONS-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/weather-icons.min.css';?>">
       <!-- =============== BOOTSTRAP STYLES ===============-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/bootstrap.css';?>" id="bscss">
       <!-- SWEET ALERT-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/sweetalert.css';?>">
       <!-- DATATABLES-->
            <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/dataTables.colVis.css';?>">
            <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/dataTables.bootstrap.css';?>">
       <!-- =============== APP STYLES ===============-->
       <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/app.css';?>" id="maincss">
       <!-- =============== APP TEMAS ===============-->
       <link id="autoloaded-stylesheet" rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/theme-e.css';?>">
            <style type='text/css'>

                    body,
                    .wrapper > .aside {background-color: #3a3f51;}
                    /* ========================================================================
                       Component: top-navbar
                     ========================================================================== */
                    /*Color de fondo donde estan las opciones de la barra superior*/
    S				.topnavbar .navbar-header {
                      background-color: transparent;
                      background-image: -webkit-linear-gradient(left,  0%,  100%);
                      background-image: -o-linear-gradient(left,  0%,  100%);
                      background-image: linear-gradient(to right,  0%,  100%);
                      background-repeat: repeat-x;
                      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='', GradientType=1);
                    }
                    @media only screen and (min-width: 768px) {
                      .topnavbar .navbar-header {
                        background-image: none;
                      }
                    }
                    .topnavbar .navbar-nav > li > a,
                    .topnavbar .navbar-nav > .open > a {
                    }
                    .topnavbar .navbar-nav > li > a:hover,
                    .topnavbar .navbar-nav > .open > a:hover,
                    .topnavbar .navbar-nav > li > a:focus,
                    .topnavbar .navbar-nav > .open > a:focus {
                    }
                    .topnavbar .navbar-nav > .active > a,
                    .topnavbar .navbar-nav > .open > a,
                    .topnavbar .navbar-nav > .active > a:hover,
                    .topnavbar .navbar-nav > .open > a:hover,
                    .topnavbar .navbar-nav > .active > a:focus,
                    .topnavbar .navbar-nav > .open > a:focus {
                      background-color: transparent;
                    }
                    .topnavbar .navbar-nav > li > [data-toggle='navbar-search'] {
                      color: #ffffff;
                    }
                    /*Color fondo barra superior*/
                    .topnavbar .nav-wrapper {
                      background-image: -webkit-linear-gradient(left,  0%,  100%);
                      background-image: -o-linear-gradient(left,  0%,  100%);
                      background-image: linear-gradient(to right,  0%,  100%);
                      background-repeat: repeat-x;
                      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='', GradientType=1);
                    }
                    @media only screen and (min-width: 768px) {
                      .topnavbar {
                        background-image: -webkit-linear-gradient(left,  0%,  100%);
                        background-image: -o-linear-gradient(left,  0%,  100%);
                        background-image: linear-gradient(to right,  0%,  100%);
                        background-repeat: repeat-x;
                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='', endColorstr='', GradientType=1);
                      }
                      .topnavbar .navbar-nav > .open > a,
                      .topnavbar .navbar-nav > .open > a:hover,
                      .topnavbar .navbar-nav > .open > a:focus {
                        box-shadow: 0 -3px 0 rgba(255, 255, 255, 0.5) inset;
                      }
                      .topnavbar .navbar-nav > li > a,
                      .topnavbar .navbar-nav > .open > a {
                      }
                      .topnavbar .navbar-nav > li > a:hover,
                      .topnavbar .navbar-nav > .open > a:hover,
                      .topnavbar .navbar-nav > li > a:focus,
                      .topnavbar .navbar-nav > .open > a:focus {
                      }
                    }

                    /* ========================================================================
                       Component: sidebar
                     ========================================================================== */
                    .sidebar .nav > li > a,
                    .sidebar .nav > li > .nav-item {
                    }
                    .sidebar .nav > li > a:focus,
                    .sidebar .nav > li > .nav-item:focus,
                    .sidebar .nav > li > a:hover,
                    .sidebar .nav > li > .nav-item:hover {
                    }
                    .sidebar .nav > li > a > em,
                    .sidebar .nav > li > .nav-item > em {
                      color: inherits;
                    }
                    .sidebar .nav > li.active,
                    .sidebar .nav > li.open,
                    .sidebar .nav > li.active > a,
                    .sidebar .nav > li.open > a,
                    .sidebar .nav > li.active .nav,
                    .sidebar .nav > li.open .nav {
                    }
                    .sidebar .nav > li.active > a > em,
                    .sidebar .nav > li.open > a > em {
                    }
                    .sidebar .nav > li.active {
                      border-left-color: 0;
                    }
                    .sidebar-subnav {
                      background-color: 0;
                    }
                    .sidebar-subnav > .sidebar-subnav-header {
                      color: 0;
                    }
                    .sidebar-subnav > li > a,
                    .sidebar-subnav > li > .nav-item {
                      color: 0;
                    }
                    .sidebar-subnav > li > a:focus,
                    .sidebar-subnav > li > .nav-item:focus,
                    .sidebar-subnav > li > a:hover,
                    .sidebar-subnav > li > .nav-item:hover {
                      color: 0;
                    }
                    .sidebar-subnav > li.active > a,
                    .sidebar-subnav > li.active > .nav-item {
                      color: 0;
                    }
                    .content-wrapper>.content-heading{
                            background-color: #ffffff;
                            padding: 10px;
                    }
            </style>
</head>