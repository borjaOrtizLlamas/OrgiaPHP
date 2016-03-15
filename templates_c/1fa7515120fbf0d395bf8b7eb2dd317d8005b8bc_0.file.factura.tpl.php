<?php /* Smarty version 3.1.27, created on 2016-02-26 09:02:12
         compiled from "C:\Apache\htdocs\CENTRAL\templates\factura.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27556d0068475dba8_36548189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa7515120fbf0d395bf8b7eb2dd317d8005b8bc' => 
    array (
      0 => 'C:\\Apache\\htdocs\\CENTRAL\\templates\\factura.tpl',
      1 => 1456396675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27556d0068475dba8_36548189',
  'variables' => 
  array (
    'nombre' => 0,
    'apellidos' => 0,
    'id_tipo' => 0,
    'empresa' => 0,
    'id_anuncio' => 0,
    'anuncio' => 0,
    'total' => 0,
    'desglose' => 0,
    'valor' => 0,
    'premium' => 0,
    'ruta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d006847b8197_86650775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d006847b8197_86650775')) {
function content_56d006847b8197_86650775 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27556d0068475dba8_36548189';
?>
<?php echo '<script'; ?>
 src="js/verDesglose.js"><?php echo '</script'; ?>
>
Nombre: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

<br />

Apellidos: <?php echo $_smarty_tpl->tpl_vars['apellidos']->value;?>


<?php if ($_smarty_tpl->tpl_vars['id_tipo']->value == 2) {?>
	<br />
    Empresa anunciante: <?php echo $_smarty_tpl->tpl_vars['empresa']->value;?>

<?php }?>
<br />

Referencia anuncio: <?php echo $_smarty_tpl->tpl_vars['id_anuncio']->value;?>

<br />

Anuncio: <?php echo $_smarty_tpl->tpl_vars['anuncio']->value;?>

<br />
<br />

Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
&#8364; <input type="button" onclick="verDesglose()" value="Desglosar Factura" /> 
<br />
<br />
<div id="desglose" style="visibility:hidden">
    <?php
$_from = $_smarty_tpl->tpl_vars['desglose']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valor']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['valor']->value) {
$_smarty_tpl->tpl_vars['valor']->_loop = true;
$foreach_valor_Sav = $_smarty_tpl->tpl_vars['valor'];
?>
      Im&aacute;gen: <?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
<br />
    <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>
    
    <?php if ($_smarty_tpl->tpl_vars['premium']->value == 1) {?>
        Premium: 1.5&#8364;
        <br />
        <br />
    <?php }?>
</div>

<br />
<br />


<form action="funciones/modifica_mostrar_anuncio.php">
	<input type="submit" value="Modificar" />
</form>
<?php if ($_smarty_tpl->tpl_vars['total']->value > 0) {?>
	<form action="https://www.sandbox.paypal.com/es/cgi-bin/webscr" name="f1" id="f1" method="post"> 
        <fieldset> 
            <legend class="prod"><strong>Finalizar la Compra</strong> <a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=400, height=350');"><img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="Solution Graphics" border="0" align="absmiddle" /></a></legend> 
            <input type="hidden" name="shipping" value="0" /> 
            <input type="hidden" name="cbt" value="Haz click aqui para volver a OrgiaPHP.org" /> 
            <input type="hidden" name="cmd" value="_xclick" /> 
            <input type="hidden" name="rm" value="2" /> 
            <input type="hidden" name="bn" value="nombre de la empresa vendedora" /> 
            <input type="hidden" name="business" value="rauljasensiodaw2-facilitator@gmail.com" /> 
            <input type="hidden" name="item_name" value="Imagenes" /> 
            <input type="hidden" name="item_number" value="Nombre del comprador" /> 
            <input type="hidden" name="amount" value=<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 /> 
            <input type="hidden" name="custom" value="30,00" /> 
            <input type="hidden" name="currency_code" value="EUR" /> 
            <input type="hidden" name="image_url" value="" /> 
            <input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" /> 
            <input type="hidden" name="cancel_return" value="errorPago.php" /> 
            <input type="hidden" name="no_shipping" value="0" /> 
            <input type="hidden" name="no_note" value="0" />
        
         
            <!-- Mostramos el detalle de la compra --> 
            <table width="50%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:1px;"> 
            <tr> 
            <td align="left" valign="top"><span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:<?php echo $_smarty_tpl->tpl_vars['premium']->value;?>
</span><br /> 
            <span class="texto1negro"> </span><span class="prod"><strong>Productos:</strong> Precio total<br />
            <strong>Precio Total:</strong> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 </span></td> 
            </tr> 
            </table> 
            
            
            <input type="submit" name="Submit" value="Finalizar Compra" /> 
    	</fieldset> 
	</form> 
<?php } else { ?>
	<form>
    	<input type="submit" formaction="funciones/correctoPago.php" value="Finalizar Compra" >
    </form>
<?php }
}
}
?>