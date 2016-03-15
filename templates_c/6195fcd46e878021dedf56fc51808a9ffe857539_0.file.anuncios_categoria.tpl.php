<?php /* Smarty version 3.1.27, created on 2016-02-26 13:36:40
         compiled from "C:\Apache\htdocs\CENTRAL\templates\anuncios_categoria.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1490356d046d8a10de9_84762255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6195fcd46e878021dedf56fc51808a9ffe857539' => 
    array (
      0 => 'C:\\Apache\\htdocs\\CENTRAL\\templates\\anuncios_categoria.tpl',
      1 => 1456477069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490356d046d8a10de9_84762255',
  'variables' => 
  array (
    'categorias' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d046d8a5d4a7_35373932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d046d8a5d4a7_35373932')) {
function content_56d046d8a5d4a7_35373932 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1490356d046d8a10de9_84762255';
?>
<?php echo '<script'; ?>
 src="js/validacion.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/funcionesV2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/anuncios_categoria.js"><?php echo '</script'; ?>
>

<section class="hgroup">
<div class="container">
    <h1>Register or Sign in</h1>
    <ul class="breadcrumb pull-right">
         <li><a href="index.php">Home</a> </li>
         <li class="active">Insertar anuncios</li>
    </ul>
</div>
</section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
        <form action="funciones/insertarAnuncio.php" enctype="multipart/form-data" method="post" id="form1">
        
        
        <div style="color:#F00" id="divError"></div>
        <input type="hidden" id="login_usuario" name="login_usuario">
     <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control"  name="titulo"  size="60" onblur='comprobarTexto(this.value)' >
        </div>		
        <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="descripcion" >Descripcion</label>
		<textarea class="form-control" rows="3"   name="descripcion" size="60" onblur='comprobarTexto(this.value)'></textarea>
		</div>    
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:25px;">
         <label for="categoriaTxt">Categoria</label>
        <select id="categoria" name="categoria" class="form-control" style="margin-bottom:25px;">
            <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valor']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['valor']->value) {
$_smarty_tpl->tpl_vars['valor']->_loop = true;
$foreach_valor_Sav = $_smarty_tpl->tpl_vars['valor'];
?>
                <option id="<?php echo $_smarty_tpl->tpl_vars['valor']->value['id_categoria'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['valor']->value['nombre'];?>
" onClick="agregarCampos('divFormulario')" onChange="agregarCampos('divFormulario')" onKeyDown="agregarCampos('divFormulario')"><?php echo $_smarty_tpl->tpl_vars['valor']->value['nombre'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>
        </select>
        </div>
        
      <div class="jumbotron text-center" style="font: 75% Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">    
     <div class="row">
        <div id="divFormulario" class="formulario" >
        </div>
     </div>   
     </div>   
        
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:25px;">
			<label for="precio" >Precio</label>

            <div class="input-group">
                <div class="input-group-addon"></div>
                <input type="text"  class="form-control" id="precio" name="precio">
                <div class="input-group-addon">€</div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px;">
            <label for="premium">Premium</label>
            <input type="checkbox" id="premium" name="premium">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12" style="border:thin 1px;">
        <input type="file" class=""  name="files[]" id="files" multiple directory="" webkitdirectory="" mozdirectory="">
        </div>
        <input type="submit"  class="btn btn-success btn-lg" id="crear" value="Crear Anuncio"/>
        
        </form>
           		
 	  <div id="divError"></div>
	</div>
</div>

<?php }
}
?>