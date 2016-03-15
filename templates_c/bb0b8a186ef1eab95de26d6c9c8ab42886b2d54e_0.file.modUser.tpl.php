<?php /* Smarty version 3.1.27, created on 2016-02-28 01:42:00
         compiled from "C:\xampp\htdocs\templates\modUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2833756d24258418785_98925143%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb0b8a186ef1eab95de26d6c9c8ab42886b2d54e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\modUser.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2833756d24258418785_98925143',
  'variables' => 
  array (
    'tipo' => 0,
    'login' => 0,
    'fecha' => 0,
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
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d242584763a2_07043090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d242584763a2_07043090')) {
function content_56d242584763a2_07043090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2833756d24258418785_98925143';
?>
<link rel="stylesheet" type="text/css" href="css/login.css">

<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
    	 <li><a href="verUser.php">cuenta</a> </li>
         <li class="active">registro/log/modificacion</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">

	<form method="post" id="form" name="form" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
" id="tipo"/>
    <input type="hidden" id="botoneslogin" style="display:none"/>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="login">Login: 
        <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</label>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
                <label for="fecha">Fecha de registro: 
        <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</label>
		</div>
   	</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="password">Contrase&ntilde;a:</label>
    	<input type="password" class="form-control" name="pass1" id="pass1" maxlength="20" onkeyup="comprobarPass11(this.id,true)"/>												<span id="span_pass1" style="color:red"></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="password2">Confirmar Contrase&ntilde;a: </label>
        <input type="password" class="form-control" name="pass2" id="pass2" maxlength="20" onBlur="comprobarPass2('pass1', this.id,true)"/>										<span id="span_pass2" style="color:red"></span>
        </div>
     </div>   
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value > 0) {?>
        <div class="col-lg-6 col-md-6 col-sm-6">
        	<label for="nombre">Nombre<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 2) {?> de la empresa<?php }?>:</label>
        	<input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" id="nombre" onblur="comprobarVacio(this.id,true)"/>												<span id="span_nombre" style="color:red"></span>
         </div>
            
        	<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 1) {?>
        <div class="col-lg-3 col-md-3 col-sm-3">
        		<label for="apellidos">Apellido: </label>
        		<input type="text" class="form-control" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['apellidos']->value;?>
" id="apellidos" onblur="comprobarVacio(this.id,true)"/>									<span id="span_apellidos" style="color:red"></span><br/>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        		<label for="dni">DNI: </label>
        		<input type="text" class="form-control" name="dni" value="<?php echo $_smarty_tpl->tpl_vars['dnicif']->value;?>
" id="DNI" onblur="comprobarDNICIF(this.value,this.id,true)"/>									<span id="span_DNI" style="color:red"></span><br/>
        </div>        
        	<?php } elseif ($_smarty_tpl->tpl_vars['tipo']->value == 2) {?>
        <div class="col-lg-6 col-md-6 col-sm-6">
        		<label for="cif">CIF: </label>
        		<input type="text" class="form-control" name="cif" value="<?php echo $_smarty_tpl->tpl_vars['dnicif']->value;?>
" id="CIF" onBlur="comprobarDNICIF(this.value,this.id,true)"/>									<span id="span_CIF" style="color:red"></span><br/>
        </div>
        	<?php }?>
        <?php }?>
  </div>  
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="telefono">Tel&eacute;fono: </label>
        <input type="text" class="form-control" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
" id="telefono" onBlur="comprobarTelefono(this.id,true)"/>											<span id="span_telefono" style="color:red"></span><br/></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="fax">Fax: </label>
        <input type="text" class="form-control" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['fax']->value;?>
" maxlength="20"/><br></div>
        
    </div>    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="email">E-mail: </label>
        <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" id="correo" onBlur="comprobarCorreo(this.id,true)"/>													<span id="span_correo" style="color:red"></span><br/></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="ciudad">Ciudad: </label>
        <input type="text" class="form-control" name="ciudad" value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>
" id="ciudad" onBlur="comprobarVacio(this.id,true)"/>													<span id="span_ciudad" style="color:red"></span><br/></div>
    </div>    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="provincia">Provincia: </label>
        <input type="text" class="form-control" name="provincia" value="<?php echo $_smarty_tpl->tpl_vars['provincia']->value;?>
" id="provincia" onBlur="comprobarVacio(this.id,true)"/>											<span id="span_provincia" style="color:red"></span><br/></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="codpostal">C&oacute;digo postal: </label>
        <input type="text" class="form-control" name="codpostal" value="<?php echo $_smarty_tpl->tpl_vars['codpostal']->value;?>
" id="cod_postal" onBlur="comprobarCodPostal(this.id,true)"/>									<span id="span_cod_postal" style="color:red"></span><br/></div>
        
    </div>    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="direccion">Direcci&oacute;n: </label>
        <input type="text" class="form-control" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
" id="direccion" onBlur="comprobarVacio(this.id,true)"/>											<span id="span_direccion" style="color:red"></span><br/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="numero_cuenta">N&uacute;mero de cuenta: </label>
        <input type="text" class="form-control" name="numero_cuenta" value="<?php echo $_smarty_tpl->tpl_vars['numero_cuenta']->value;?>
" maxlength="20" size="22" id="num_cuenta" onBlur="comprobarNumCuenta(this.id,true)"/>	<span id="span_num_cuenta" style="color:red"></span><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
    	<input type="button" class="btn btn-primary btn-lg" value="ACEPTAR" onClick="comprobarUpdateUser()" name="edit_user"/>
        <input type="button" class="btn btn-primary btn-lg" value="SALIR" onClick="history.back()"/>
        <input type="button" class="btn btn-primary btn-lg" value="DARSE DE BAJA"  onClick="borrarUser()"/>
  		</div>
   </div>
    </form>
</div></div><?php }
}
?>