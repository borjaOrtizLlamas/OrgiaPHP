<?php /* Smarty version 3.1.27, created on 2016-02-28 01:17:04
         compiled from "C:\xampp\htdocs\clase\htdocs\trabajo\templates\aceptar_profesionales.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:242556d23c80367a23_74201435%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01caa86a3e3d1bc12682e227059cf80b8848d82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clase\\htdocs\\trabajo\\templates\\aceptar_profesionales.tpl',
      1 => 1456386322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242556d23c80367a23_74201435',
  'variables' => 
  array (
    'profesionales' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d23c803d11b4_19363816',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d23c803d11b4_19363816')) {
function content_56d23c803d11b4_19363816 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '242556d23c80367a23_74201435';
?>
<section class="hgroup"><div class="container">
    <h1>añadir profesionales</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
    	 <li><a href="verUser.php">Cuenta</a> </li>
    	 <li class="active">añadir profesionales</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin" >
              <?php
$_from = $_smarty_tpl->tpl_vars['profesionales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valor']->_loop = false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['valor']->value) {
$_smarty_tpl->tpl_vars['valor']->_loop = true;
$foreach_valor_Sav = $_smarty_tpl->tpl_vars['valor'];
?>
              <?php if ($_smarty_tpl->tpl_vars['valor']->value != '') {?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <strong>el cif=></strong><?php echo $_smarty_tpl->tpl_vars['valor']->value['cif'];?>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <strong>nombre de empresa =></strong><?php echo $_smarty_tpl->tpl_vars['valor']->value['nombre_empresa'];?>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                
                             <a class="btn btn-primary btn-lg" href="funciones/aceptar_profesionales.php?login_usuario=<?php echo $_smarty_tpl->tpl_vars['valor']->value['log'];?>
">aceptar a profesional=> <?php echo $_smarty_tpl->tpl_vars['valor']->value['log'];?>
</a>
                    </div>
                </div>
                <?php }?>
 			  <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>     
	</div>
</div><?php }
}
?>