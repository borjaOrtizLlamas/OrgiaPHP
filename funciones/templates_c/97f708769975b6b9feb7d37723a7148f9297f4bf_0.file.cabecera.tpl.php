<?php /* Smarty version 3.1.27, created on 2016-02-28 01:52:15
         compiled from "C:\xampp\htdocs\funciones\templates\cabecera.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2210656d244bf091cd1_86598726%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f708769975b6b9feb7d37723a7148f9297f4bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\funciones\\templates\\cabecera.tpl',
      1 => 1456400874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2210656d244bf091cd1_86598726',
  'variables' => 
  array (
    'logeado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d244bf0e3d76_28843910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d244bf0e3d76_28843910')) {
function content_56d244bf0e3d76_28843910 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2210656d244bf091cd1_86598726';
?>
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
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/compruebaLoginJS.js"><?php echo '</script'; ?>
>
        
        <!--FIN NUESTRO-->
        
<?php echo '<script'; ?>
 type="text/javascript" src="../js/modernizr.custom.48287.js"><?php echo '</script'; ?>
>
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
                         <li><a href="../services.php">Servicios</a></li>
                         <li><a href="../busqueda_anuncio.php">busqueda</a></li>
                         <?php if ($_smarty_tpl->tpl_vars['logeado']->value == 1) {?><li><a href="../anuncios_categoria.php">insertar</a></li><?php }?>
                         <li><a href="../contact.php">Contacto</a></li>
                    </ul>
               </div>
          </div>
          <div id="social_media_wrapper"> <a href="#facebook"><i class="fa fa-facebook"></i></a> <a href="#twitter"><i class="fa fa-twitter"></i></a> <a href="#googleplus"><i class="fa fa-google-plus"></i></a> </div>
          <div id="sign"> <?php if ($_smarty_tpl->tpl_vars['logeado']->value == 1) {?><a href="../verUser.php"><i class="fa fa-cog"></i>Cuenta</a><a href="log_des.php"><i class="fa fa-power-off"></i>Salir</a><?php } else { ?><a href="../register.php"><i class="fa fa-user"></i>Login/Registro</a><?php }?></div>
     </div>
</header><?php }
}
?>