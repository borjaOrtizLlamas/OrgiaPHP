<?php /* Smarty version 3.1.27, created on 2016-02-26 13:38:22
         compiled from "C:\Apache\htdocs\CENTRAL\funciones\templates\anunciosModificar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1526856d0473e58bc11_39168803%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c98fe1cb4ec7c60fc1712c1444c41a9dfdf0d24' => 
    array (
      0 => 'C:\\Apache\\htdocs\\CENTRAL\\funciones\\templates\\anunciosModificar.tpl',
      1 => 1456397578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526856d0473e58bc11_39168803',
  'variables' => 
  array (
    'anuncio' => 0,
    'valorA' => 0,
    'categoria' => 0,
    'nombreCategoria' => 0,
    'valorC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d0473e649191_53951589',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d0473e649191_53951589')) {
function content_56d0473e649191_53951589 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1526856d0473e58bc11_39168803';
?>
<?php echo '<script'; ?>
 src="../js/validacion.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/funcionesV2.js"><?php echo '</script'; ?>
>

<section class="hgroup"><div class="container">
    <h1>Factura</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="../index.php">Home</a> </li>
    	 <li><a href="../getDatosFactura.php">factura</a> </li>
         <li class="active">editar anuncio</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin" >
                    <form action="modificar_anuncio.php" method="post">
                    
                    <?php
$_from = $_smarty_tpl->tpl_vars['anuncio']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valorA'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valorA']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['valorA']->value) {
$_smarty_tpl->tpl_vars['valorA']->_loop = true;
$foreach_valorA_Sav = $_smarty_tpl->tpl_vars['valorA'];
?>
                    	<label for="titulo">Titulo</label>
                      	<input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['valorA']->value['titulo'];?>
" onblur='comprobarTexto(this.value)'>
                    	</br>
                 		<label for="descripcion">Descipcion</label>
                        <input class="form-control" type="text" id="descripcion" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['valorA']->value['descripcion'];?>
" onblur='comprobarTexto(this.value)'>
                        </br>
                     <?php
$_smarty_tpl->tpl_vars['valorA'] = $foreach_valorA_Sav;
}
?>
                    
                    <?php
$_from = $_smarty_tpl->tpl_vars['categoria']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valorC'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valorC']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['valorC']->value) {
$_smarty_tpl->tpl_vars['valorC']->_loop = true;
$foreach_valorC_Sav = $_smarty_tpl->tpl_vars['valorC'];
?>
                     	    <?php if ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "libros") {?>
                            	
                            	<label for="autor">Autor</label>	
                           	    <input class="form-control" type="text" name="autor" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['autor'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="genero">Genero</label>
                                <input type="text" class="form-control" name="genero" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['genero'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="editorial">Editorial</label>
                                <input class="form-control" type="text" name="editorial" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['editorial'];?>
" onblur='comprobarTexto(this.value)'>
                                
                                
                                
                           	<?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "inmobiliaria") {?>   
                           		<label for="Ciudad">Ciudad</label>	
                           	    <input class="form-control" type="text" name="ciudad" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['ciudad'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="metros">Metros Cuadrados</label>
                                <input class="form-control" type="text" name="metros_cuadrados" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['metros_cuadrados'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="calle">Calle</label>
                                <input class="form-control" type="text" name="calle" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['calle'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="codigo_postal">Codigo Postal</label>
                                <input class="form-control" type="text" name="codigo_postal" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['codigo_postal'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="banos">Baños</label>
                                <input class="form-control" type="text" name="banos" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['banos'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="dormitorios">Dormitorios</label>
                                <input class="form-control" type="text" name="dormitorios" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['dormitorios'];?>
" onblur='comprobarNumero(this.value)'>
                             <?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "motor") {?>   
                           		<label for="marca">Marca</label>	
                           	    <input class="form-control" type="text" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['marca'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="modelo">Modelo</label>
                                <input class="form-control" type="text" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['modelo'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="cv">CV</label>
                                <input class="form-control" type="text" name="cv" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['cv'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="color">Color</label>
                                <input class="form-control" type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['color'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="kilometros">kilometros</label>
                                <input class="form-control" type="text" name="kilometraje" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['kilometraje'];?>
" onblur='comprobarNumero(this.value)'>
                             <?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "moviles") {?>   
                           		<label for="pulgadas">Pulgadas</label>	
                           	    <input class="form-control"  type="text" name="pulgadas" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['pulgadas'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label class="form-control"  for="marca">Marca</label>
                                <input class="form-control" type="text" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['marca'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="modelo">Modelo</label>
                                <input class="form-control" type="text" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['modelo'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="cpu">CPU</label>
                                <input class="form-control" type="text" name="cpu" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['cpu'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="memoria">Memoria Interna</label>
                                <input class="form-control" type="text" name="memoria_interna" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['memoria_interna'];?>
" onblur='comprobarNumero(this.value)'>
                              <?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "ordenadores") {?>   
                           		<label for="tipo">Tipo</label>	
                           	    <input class="form-control" type="text" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['tipo'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="cpu">CPU</label>
                                <input class="form-control" type="text" name="cpu" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['cpu'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="ram">RAM</label>
                                <input class="form-control" type="text" name="ram" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['ram'];?>
" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="hdd">HDD</label>
                                <input class="form-control" type="text" name="hdd" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['hdd'];?>
" onblur='comprobarNumero(this.value)'> 
                                </br>
                                <label for="grafica">Grafica</label>
                                <input class="form-control" type="text" name="grafica" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['grafica'];?>
" onblur='comprobarTexto(this.value)'>  
                                </br>
                                <label for="pulgadas">Pulgadas</label>
                                <input class="form-control" type="text" name="pulgadas" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['pulgadas'];?>
" onblur='comprobarNumero(this.value)'>
                              <?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "peliculas") {?>   
                           		<label for="genero">Genero</label>	
                           	    <input class="form-control" type="text" name="genero" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['genero'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="formato">Formato</label>
                                <input class="form-control" type="text" name="formato" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['formato'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="director">Director</label>
                                <input class="form-control" type="text" name="director" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['director'];?>
" onblur='comprobarTexto(this.value)'>
                                <?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "ropa") {?>   
                           		<label for="talla">Talla</label>	
                           	    <input class="form-control" type="text" name="talla" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['talla'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="tela">Tipo de Tela</label>
                                <input class="form-control" type="text" name="tipo_tela" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['tipo_tela'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="prenda">Tipo de Prenda</label>
                                <input class="form-control" type="text" name="tipo_prenda" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['tipo_prenda'];?>
" onblur='comprobarTexto(this.value)'>
                                <?php } elseif ($_smarty_tpl->tpl_vars['nombreCategoria']->value == "videojuegos") {?>   
                           		<label for="genero">Genero</label>	
                           	    <input class="form-control" type="text" name="genero" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['genero'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="plataforma">Plataforma</label>
                                <input class="form-control" type="text" name="plataforma" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['plataforma'];?>
" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="desarrollador">Desarrollador</label>
                                <input class="form-control" type="text" name="desarrollador" value="<?php echo $_smarty_tpl->tpl_vars['valorC']->value['desarrollador'];?>
" onblur='comprobarTexto(this.value)'>
                               
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['valorC'] = $foreach_valorC_Sav;
}
?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['anuncio']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valorA'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valorA']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['valorA']->value) {
$_smarty_tpl->tpl_vars['valorA']->_loop = true;
$foreach_valorA_Sav = $_smarty_tpl->tpl_vars['valorA'];
?>
                        		</br>
                               	<label for="precio">Precio</label>
                                <input class="form-control" type="text" id="precio" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['valorA']->value['precio_anuncio'];?>
">
                                <br/>
                               	<?php if ($_smarty_tpl->tpl_vars['valorA']->value['premium'] == 1) {?>
                                <input  type="checkbox" id="premium" name="premium" checked><strong>Premium</strong>
                                <br/>
                                <?php } else { ?>
                                <input type="checkbox" id="premium" name="premium" ><strong>Premium</strong>
                                <br/>
                                <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['valorA'] = $foreach_valorA_Sav;
}
?>
                                 <input class="btn btn-primary btn-lg" type="submit" value="Modificar">
                    </form>
</div></div>           		
   <div id="divError"></div>
<?php }
}
?>