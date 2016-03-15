<?php /* Smarty version 3.1.27, created on 2016-02-26 09:02:20
         compiled from "C:\Apache\htdocs\CENTRAL\templates\pagar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1762956d0068c9599d9_98134248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4854c5fe351eaa37859d2b5c3f137cbfff78d8a4' => 
    array (
      0 => 'C:\\Apache\\htdocs\\CENTRAL\\templates\\pagar.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1762956d0068c9599d9_98134248',
  'variables' => 
  array (
    'anuncio' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d0068c9a00c5_69229587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d0068c9a00c5_69229587')) {
function content_56d0068c9a00c5_69229587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1762956d0068c9599d9_98134248';
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