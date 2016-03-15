<?php /* Smarty version 3.1.27, created on 2016-02-28 01:55:59
         compiled from "C:\xampp\htdocs\templates\pagar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1984156d2459f9d8348_65017843%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c4f896b0618440f6082679a6aa2bb97f8e0108' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\pagar.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984156d2459f9d8348_65017843',
  'variables' => 
  array (
    'anuncio' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d2459fa2e250_36028691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d2459fa2e250_36028691')) {
function content_56d2459fa2e250_36028691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1984156d2459f9d8348_65017843';
?>
<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
    	<form action="getDatosFactura.php" method="post">
    	<label for="selecciona">El siguiente anuncio esta sin pagar</label>
         <?php
$_from = $_smarty_tpl->tpl_vars['anuncio']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valor']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['valor']->value) {
$_smarty_tpl->tpl_vars['valor']->_loop = true;
$foreach_valor_Sav = $_smarty_tpl->tpl_vars['valor'];
?>
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['valor']->value['id_anuncio'];?>
"/>
       
        <p>Identificador del Anuncio: <?php echo $_smarty_tpl->tpl_vars['valor']->value['id_anuncio'];?>

        	<br/>
        Titulo: <?php echo $_smarty_tpl->tpl_vars['valor']->value['titulo'];?>
</p>
        <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>
        <input type="submit" value="Pagar">
	</form>
	</div>
</div><?php }
}
?>