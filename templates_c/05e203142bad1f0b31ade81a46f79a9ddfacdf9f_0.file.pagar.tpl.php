<?php /* Smarty version 3.1.27, created on 2016-02-28 01:17:10
         compiled from "C:\xampp\htdocs\clase\htdocs\trabajo\templates\pagar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:582256d23c86194323_13914418%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e203142bad1f0b31ade81a46f79a9ddfacdf9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clase\\htdocs\\trabajo\\templates\\pagar.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582256d23c86194323_13914418',
  'variables' => 
  array (
    'anuncio' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d23c861e2539_51535846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d23c861e2539_51535846')) {
function content_56d23c861e2539_51535846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '582256d23c86194323_13914418';
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