<?php /* Smarty version 3.1.27, created on 2016-02-28 01:52:15
         compiled from "C:\xampp\htdocs\funciones\templates\contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2471556d244bf0f75f6_56869644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1c76e48a409eb95a60fc7589198bc0a737ec9fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\funciones\\templates\\contacto.tpl',
      1 => 1456400622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2471556d244bf0f75f6_56869644',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d244bf0fb473_21966015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d244bf0fb473_21966015')) {
function content_56d244bf0fb473_21966015 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2471556d244bf0f75f6_56869644';
?>
<link rel="stylesheet" type="text/css" href="css/login.css">

<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="../index.php">Home</a> </li>
    	 <li><a href="../verUser.php">cuenta</a> </li>
         <li class="active">registro/log/modificacion</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
<form action="contacto.php" method="post" enctype="multipart/form-data" onSubmit="return comprobarTodoContacto()">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="nombre">Nombre de Contacto:</label>
<input type="text" class="form-control" name="nombre" id="nombre" maxlength="20" onBlur="comprobarVacio(this.id,true)"/>
<span id="span_nombre" style="color:red"></span>
		</div>
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="apellidos">Apellidos: </label>
<input type="text" class="form-control" name="apellidos" id="apellidos" onBlur="comprobarVacio(this.id,true)"/>
<span id="span_apellidos" style="color:red"></span>
		</div>
     </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="DNI">DNI: </label>
<input type="text" class="form-control" name="DNI" id="DNI" onblur="comprobarDNICIF(this.value,this.id,true)"/>
<span id="span_DNI" style="color:red"></span>
		</div>
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="correo">E-mail: </label>
<input type="text" class="form-control" name="correo" id="correo" onBlur="comprobarCorreo(this.id,true)"/>
<span id="span_correo" style="color:red"></span>
</div></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
<label for="telefono">Tel&eacute;fono: </label>
<input type="text" class="form-control" name="telefono" id="telefono" onBlur="comprobarTelefono(this.id,true)"/>	
<span id="span_telefono" style="color:red"></span>
</div></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
<input type="submit" class="btn btn-primary btn-lg" value="Registrarse"/>
</div></div>
</form>
</div></div><?php }
}
?>