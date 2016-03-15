<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Services</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="less/animate.less-master/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="../js/prettyPhoto_3.1.5/prettyPhoto.css" type="text/css" media="screen">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css" media="screen">
<!--[if IE 7]>
    <link rel="stylesheet" href="fonts/font-awsome/css/font-awesome-ie7.min.css">
    <![endif]-->
    
    
        <!-- NUESTRO-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/compruebaLoginJS.js"></script>
        
        <!--FIN NUESTRO-->
        
<script type="text/javascript" src="../js/modernizr.custom.48287.js"></script>
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">
<link rel="shortcut icon" href="favicon.png">
</head>
<body>
<header>
     <div class="container">
          <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header"><a class="navbar-brand" href="index.php">
               <img src="../images/restart_logo.png" alt="optional logo" height="90" width="90">
               <span class="logo_title">Orgia<strong>PHP</strong></span> <span class="logo_subtitle">a clean &amp; multipurpose template</span> </a>
              <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="nb_left pull-left">
               <span class="fa fa-reorder"></span> </span> <span class="nb_right pull-right">menu</span> </a></div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
                         <li><a href="../index.php">Home</a></li>
                         <li><a href="../about_us.php">Nosotros</a></li>
                         <li><a href="../busqueda_anuncio.php">busqueda</a></li>
                         {if $logeado eq 1}<li><a href="../anuncios_categoria.php">insertar</a></li>{/if}
                         <li><a href="../contact.php">Contacto</a></li>
                    </ul>
               </div>
          </div>
          <div id="social_media_wrapper"> <a href="#facebook"><i class="fa fa-facebook"></i></a> <a href="#twitter"><i class="fa fa-twitter"></i></a> <a href="#googleplus"><i class="fa fa-google-plus"></i></a> </div>
          <div id="sign"> {if $logeado eq 1}<a href="../verUser.php"><i class="fa fa-cog"></i>Cuenta</a><a href="log_des.php"><i class="fa fa-power-off"></i>Salir</a>{else}<a href="../register.php"><i class="fa fa-user"></i>Login/Registro</a>{/if}</div>
     </div>
</header>