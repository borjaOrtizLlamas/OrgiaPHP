<?php /* Smarty version 3.1.27, created on 2016-02-26 09:01:41
         compiled from "C:\Apache\htdocs\CENTRAL\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:426156d006654a0169_27197018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1980f4b122c2cd6a56a96cba5cee6aba04ea6d9c' => 
    array (
      0 => 'C:\\Apache\\htdocs\\CENTRAL\\templates\\login.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426156d006654a0169_27197018',
  'variables' => 
  array (
    'pw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d006654b4864_41088444',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d006654b4864_41088444')) {
function content_56d006654b4864_41088444 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '426156d006654a0169_27197018';
?>
<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
         <li class="active">registro/log</li>
    </ul>
</div></section>

<link rel="stylesheet" type="text/css" href="css/login.css">
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"><?php echo '</script'; ?>
>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
	<form id="registro" onSubmit="return comprobarTodo()">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <label for="login">Nombre de Usuario:</label>
            <input type="text" class="form-control" name="login" id="login" maxlength="20" onkeyup="comprobarUsuario(this.id,true)"/>	
        <span id="span_login" style="color:red"></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

            <label for="password">Contrase&ntilde;a:</label>
            <input type="password" class="form-control" name="password" id="pass1" maxlength="20" onkeyup="comprobarPass1(this.id,true)"/>
            				<span id="span_pass1" style="color:red"></span>
        </div>
  </div>                    
            
    <div id="botoneslogin">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <input type="submit" class="btn btn-primary btn-lg"  value="Entrar" name="doLog" formaction="funciones/login.php" formmethod="post" formenctype="multipart/form-data"/>
                <input type="button" class="btn btn-primary btn-lg"  value="Crear cuenta" onclick="registrarse(true)"/>
           </div>
       </div> 
   </div>
        <div id="crearcuenta">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
				<label for="password2">Confirmar Contrase&ntilde;a: </label>
				<input type="password"  class="form-control" name="password2" id="pass2" maxlength="20" onBlur="comprobarPass2('pass1', this.id,true)"/>
          	<span id="span_pass2" style="color:red"></span>
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">

                <label for="correo">E-mail: </label>
                <input type="text" class="form-control" name="correo" id="correo" onBlur="comprobarCorreo(this.id,true)"/>								<span id="span_correo" style="color:red"></span>
             </div>
           </div>
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
                <label for="telefono">Tel&eacute;fono: </label>
                <input type="text" class="form-control"  name="telefono" id="telefono" onBlur="comprobarTelefono(this.id,true)"/>							<span id="span_telefono" style="color:red"></span>
           </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<label for="tipo">Tipo de usuario: </label>
				<label for="rParticular">Particular: </label>
				<input type="radio" name="tipo" id="rParticular" value="1" checked onclick="userTipo(this.id,true);"/>
				<label for="rProfesional">Profesional: </label>
				<input type="radio" name="tipo" id="rProfesional" value="2" onclick="userTipo(this.id,true);"/>
              </div>
           </div>
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<label for="nombre">Nombre<span id="proname"> de la empresa</span>: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" onblur="comprobarVacio(this.id,true)"/>								<span id="span_nombre" style="color:red"></span>
                </div>
                
				<div id="particular">
			<div class="col-lg-3 col-md-3 col-sm-3">
                	<label for="apellidos">Apellidos: </label>
					<input type="text" class="form-control" name="apellidos" id="apellidos" onblur="comprobarVacio(this.id,true)"/>						<span id="span_apellidos" style="color:red"></span>
                    </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
					<label for="DNI">DNI: </label>
					<input type="text" class="form-control" name="DNI" id="DNI" onblur="comprobarDNICIF(this.value, this.id,true)"/>
              <span id="span_DNI" style="color:red"></span>
              </div>
            </div>
                
				<div id="profesional">
            <div class="col-lg-6 col-md-6 col-sm-6">
					<label for="CIF">CIF: </label>
					<input type="text" class="form-control" name="CIF" id="CIF" onBlur="comprobarDNICIF(this.value, this.id,true)"/>						<span id="span_CIF" style="color:red"></span><br/>
				</div>
                </div>
               </div>
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<label for="fax">Fax: </label>
                <input type="text" class="form-control" name="fax" id="fax"/>
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<label for="cod_postal">C&oacute;digo postal: </label>
                <input type="text" class="form-control" name="cod_postal" id="cod_postal" onBlur="comprobarCodPostal(this.id,true)"/>
            					<span id="span_cod_postal" style="color:red"></span>
            </div></div>     
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<label for="direccion">Direcci&oacute;n: </label>
                <input type="text" class="form-control" name="direccion" id="direccion" onBlur="comprobarVacio(this.id,true)"/>							<span id="span_direccion" style="color:red"></span>
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
                <label for="provincia">Provincia: </label>
                <input type="text" class="form-control" name="provincia" id="provincia" onBlur="comprobarVacio(this.id,true)"/>							<span id="span_provincia" style="color:red"></span>
            </div>
       </div>
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
       
				<label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" onBlur="comprobarVacio(this.id,true)"/>								<span id="span_ciudad" style="color:red"></span>
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<label for="num_cuenta">Nº de cuenta: </label>
                <input type="text" class="form-control" name="num_cuenta" id="num_cuenta" onBlur="comprobarNumCuenta(this.id,true)"/>					<span id="span_num_cuenta" style="color:red"></span>
                </div>
                </div>
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
                <input type="submit" value="Registrarse" id="nuevacuenta" formaction="funciones/login.php" formmethod="post" class="btn btn-primary btn-lg" formenctype="multipart/form-data"/>
                <input type="button" class="btn btn-primary btn-lg" value="Iniciar sesion" onclick="registrarse(false)"/>
                </div>
            </div>
        </div>
    </form>
    <?php echo $_smarty_tpl->tpl_vars['pw']->value;?>

	</div>
</div><?php }
}
?>