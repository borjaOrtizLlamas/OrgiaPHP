<?php /* Smarty version 3.1.27, created on 2016-02-28 01:41:54
         compiled from "C:\xampp\htdocs\templates\verUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1980056d2425254d137_00770377%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e36617a62bc1fcde3d96d80c7e780bc92378591' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\verUser.tpl',
      1 => 1456618554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980056d2425254d137_00770377',
  'variables' => 
  array (
    'login' => 0,
    'fecha' => 0,
    'tipo' => 0,
    'nombre' => 0,
    'apellidos' => 0,
    'dnicif' => 0,
    'telefono' => 0,
    'fax' => 0,
    'email' => 0,
    'ciudad' => 0,
    'provincia' => 0,
    'codpostal' => 0,
    'direccion' => 0,
    'numero_cuenta' => 0,
    'cont_nom' => 0,
    'cont_ape' => 0,
    'cont_ema' => 0,
    'cont_dni' => 0,
    'cont_tel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d242525cdfc1_14399591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d242525cdfc1_14399591')) {
function content_56d242525cdfc1_14399591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1980056d2425254d137_00770377';
?>
<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
    	 <li class="active">ver cuenta</li>
    </ul>
</div></section>

<link rel="stylesheet" type="text/css" href="css/usuarios.css">
<div class="container text-center portfolio_description " style="margin-top:50px;" >

    <div class="signin" >

        <div class="row">
            <h3>Usuario: <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h3>
        </div>
        <div class="row" style="margin-bottom:25px;">
           <i class="fa fa-calendar"></i>
 <strong>Fecha de registro: </strong><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>


        </div>

        <?php if ($_smarty_tpl->tpl_vars['tipo']->value > 0) {?>
      <div class="row" style="margin-bottom:10px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>  Nombre: </strong><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 1) {?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>   Apellidos:</strong> <?php echo $_smarty_tpl->tpl_vars['apellidos']->value;?>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>   DNI:</strong> <?php echo $_smarty_tpl->tpl_vars['dnicif']->value;?>

            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['tipo']->value == 2) {?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong> CIF: </strong><?php echo $_smarty_tpl->tpl_vars['dnicif']->value;?>

            </div>
        </div>    
        <?php }?>
        <?php }?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>
                 <i class="fa fa-phone"></i>
               Tel&eacute;fono:
   			 </strong>
                 <?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>

        </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <i class="fa fa-phone"></i>

   <strong>
  Fax: </strong><?php echo $_smarty_tpl->tpl_vars['fax']->value;?>
 
            </div>     
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong><i class="fa fa-envelope"></i>
  E-mail:</strong> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong> <i class="fa fa-location-arrow"></i>
  Ciudad: </strong><?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>
 </strong> 
            </div>   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong><i class="fa fa-location-arrow"></i>
provincia:</strong> <?php echo $_smarty_tpl->tpl_vars['provincia']->value;?>
 </strong>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong><i class="fa fa-location-arrow"></i>
 C&oacute;digo postal: </strong><?php echo $_smarty_tpl->tpl_vars['codpostal']->value;?>
</strong>
            </div>    
        </div>
        <div class="row" style="margin-top:25px;">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <strong><i class="fa fa-location-arrow"></i>
   Direcci&oacute;n: </strong><?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <strong> <i class="fa fa-credit-card"></i>
N&uacute;mero de cuenta:</strong> <?php echo $_smarty_tpl->tpl_vars['numero_cuenta']->value;?>

            </div>
        </div>		<br><br>

        <form>
            <div class="row">

                <input type="submit" value="EDITAR" class="btn btn-primary btn-lg" name="edit_user" formaction="verUser.php" formmethod="post" formenctype="multipart/form-data"/>
                <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 2) {?>
            </div>

        </form>
        <div class="row">
            <h3>Contacto:</h3>
        </div>
        
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
            	<strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['cont_nom']->value;?>

            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
            	<strong>Apellidos:</strong> <?php echo $_smarty_tpl->tpl_vars['cont_ape']->value;?>

            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <strong><i class="fa fa-envelope"></i>  E-mail: </strong><?php echo $_smarty_tpl->tpl_vars['cont_ema']->value;?>
 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <strong>  DNI:</strong> <?php echo $_smarty_tpl->tpl_vars['cont_dni']->value;?>
 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <strong><i class="fa fa-location-arrow"></i>  Telefono:</strong> <?php echo $_smarty_tpl->tpl_vars['cont_tel']->value;?>
 
            </div>
        </div><br><br>
        <form>
            <div class="row">
                <input type="submit" value="Editar contacto" class="btn btn-primary btn-lg" name="edit_user" formaction="verUser.php" formmethod="post" formenctype="multipart/form-data"/>
                <?php }?>
                <input type="submit" value="VER ANUNCIOS" class="btn btn-primary btn-lg" name="ver_anuncios" formaction="funciones/anuncioUser.php" formmethod="post" formenctype="multipart/form-data"/>
                </div>
        </form>
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 0) {?>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
        	<a class="btn btn-primary btn-lg" href="aceptar_profesionales.php">aceptar a profesionales</a>
            </div></div>
        <?php }?>
    </div>
</div>
<?php }
}
?>