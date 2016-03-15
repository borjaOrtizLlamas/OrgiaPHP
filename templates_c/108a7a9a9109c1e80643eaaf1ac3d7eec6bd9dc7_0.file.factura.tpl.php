<?php /* Smarty version 3.1.27, created on 2016-02-26 09:13:59
         compiled from "C:\AD_PHP\Apache2.2\htdocs\trabajofinal\templates\factura.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2757556d0094807b0b5_81954337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '108a7a9a9109c1e80643eaaf1ac3d7eec6bd9dc7' => 
    array (
      0 => 'C:\\AD_PHP\\Apache2.2\\htdocs\\trabajofinal\\templates\\factura.tpl',
      1 => 1456396578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2757556d0094807b0b5_81954337',
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
  'unifunc' => 'content_56d00948113f68_22923293',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d00948113f68_22923293')) {
function content_56d00948113f68_22923293 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2757556d0094807b0b5_81954337';
?>
<?php echo '<script'; ?>
 src="js/verDesglose.js"><?php echo '</script'; ?>
>


<section class="hgroup"><div class="container">
    <h1>Factura</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
         <li class="active">factura</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
	      	    <p><strong> Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
   	        	<p><strong>Apellidos: </strong><?php echo $_smarty_tpl->tpl_vars['apellidos']->value;?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['id_tipo']->value == 2) {?>
                <div class="col-lg-12 col-md-12 col-sm-12">
                 <p>   <strong>Empresa anunciante: </strong><?php echo $_smarty_tpl->tpl_vars['empresa']->value;?>
</p>
                </div>
            <?php }?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <p> <strong> Referencia anuncio: </strong><?php echo $_smarty_tpl->tpl_vars['id_anuncio']->value;?>
</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
            	<p><strong>Anuncio:</strong> <?php echo $_smarty_tpl->tpl_vars['anuncio']->value;?>
</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
				<p><strong> Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
&#8364;</strong></p>
            </div>
         	<div class="col-lg-12 col-md-12 col-sm-12">
            	<input type="button" class="btn btn-primary btn-lg"  onclick="verDesglose()" value="Desglosar Factura" /> 
            </div>
        </div>    
            

<div id="desglose" style="visibility:hidden;margin-top:20px;" >
<div class="jumbotron">
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
        <div class="row">
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<p><strong> Im&aacute;gen:</strong> <?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
</p>
            </div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>
    
    <?php if ($_smarty_tpl->tpl_vars['premium']->value == 1) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p><strong> Premium: </strong> 1.5&#8364; </p>
            </div>
        </div>
    <?php }?>
    </div>
</div>


<form action="funciones/modifica_mostrar_anuncio.php">
	<input type="submit" class="btn btn-primary btn-lg" value="Modificar" />
</form>



<form action="https://www.sandbox.paypal.com/es/cgi-bin/webscr" name="f1" id="f1" method="post"> 
<fieldset> 
<legend class="prod"><p style="font:75% 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><strong>Finalizar la Compra </strong><a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=400, height=350');"><img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="Solution Graphics" border="0" align="absmiddle" /></a></p></legend> 
<input type="hidden" name="shipping" value="0" /> 
<input type="hidden" name="cbt" value="Haz click aqui para volver a Proyectoanuncios.com" /> 
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

<div class="jumbotron">
        <div class="row"  style="font:75% 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:<?php echo $_smarty_tpl->tpl_vars['premium']->value;?>
</span>
 			</div>
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<span class="texto1negro"> </span><span class="prod"><strong>Productos:</strong> Precio total
			</div>
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<strong>Precio Total:</strong> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 </span>
			</div>
		</div>
</div>

<input type="submit" class="btn btn-primary btn-lg" name="Submit" value="Finalizar Compra" /> 
</fieldset> 
</form> 
	</div>
</div><?php }
}
?>