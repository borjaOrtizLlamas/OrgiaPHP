<?php /* Smarty version 3.1.27, created on 2016-02-26 09:13:55
         compiled from "C:\AD_PHP\Apache2.2\htdocs\trabajofinal\templates\pagar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:888656d00944138693_27644958%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1540badfc5ec2b553a06fd4b1a0045ece0b0deed' => 
    array (
      0 => 'C:\\AD_PHP\\Apache2.2\\htdocs\\trabajofinal\\templates\\pagar.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888656d00944138693_27644958',
  'variables' => 
  array (
    'anuncio' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d00944159836_66359096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d00944159836_66359096')) {
function content_56d00944159836_66359096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '888656d00944138693_27644958';
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