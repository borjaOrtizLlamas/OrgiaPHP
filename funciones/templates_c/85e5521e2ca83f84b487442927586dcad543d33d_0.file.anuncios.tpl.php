<?php /* Smarty version 3.1.27, created on 2016-02-28 01:06:12
         compiled from "C:\xampp\htdocs\clase\htdocs\trabajo\funciones\templates\anuncios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:150856d239f4bb0c42_70260950%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e5521e2ca83f84b487442927586dcad543d33d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clase\\htdocs\\trabajo\\funciones\\templates\\anuncios.tpl',
      1 => 1456616977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150856d239f4bb0c42_70260950',
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
    'imagen' => 0,
    'indice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d239f4ce9442_00047879',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d239f4ce9442_00047879')) {
function content_56d239f4ce9442_00047879 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '150856d239f4bb0c42_70260950';
?>
<?php echo '<script'; ?>
 src="js/legacy.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/custombox.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="css/custombox.css">
<?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dato']->_loop = false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$foreach_dato_Sav = $_smarty_tpl->tpl_vars['dato'];
?>
<?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo'] != '') {?>
        <div class="jumbotron text-center" <?php if ($_smarty_tpl->tpl_vars['dato']->value['premium'] == 1) {?> style="border: yellow 2px solid")<?php }?> >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 "><h3><?php echo $_smarty_tpl->tpl_vars['dato']->value['titulo'];?>
</h3></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 " style=""><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_c'];?>
</div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 "><?php echo $_smarty_tpl->tpl_vars['dato']->value['precio_anuncio'];?>
</div>
                </div>    
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 "><?php echo $_smarty_tpl->tpl_vars['dato']->value['des'];?>
</div>
                    <div class="clearfix"></div>
                </div>

	<?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "libro") {?>
                <div class="row">
                    <div class="col-lg-4  col-sm-6 col-md-4 col-xs-12 ">autor: <?php echo $_smarty_tpl->tpl_vars['dato']->value['autor'];?>
</div>
                    <div class="col-lg-4  col-sm-6 col-md-4 col-xs-12">genero: <?php echo $_smarty_tpl->tpl_vars['dato']->value['genero'];?>
</div>
                    <div class="col-lg-4  col-sm-6 col-md-4 col-xs-12">editorial: <?php echo $_smarty_tpl->tpl_vars['dato']->value['editorial'];?>
 </div>
                </div>
	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "inmobiliaria") {?>

                <div class="row">
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">ciudad: <?php echo $_smarty_tpl->tpl_vars['dato']->value['ciudad'];?>
</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">metros_cuadrados: <?php echo $_smarty_tpl->tpl_vars['dato']->value['metros_cuadrados'];?>
</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">calle: <?php echo $_smarty_tpl->tpl_vars['dato']->value['calle'];?>
 </div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">codigo_postal: <?php echo $_smarty_tpl->tpl_vars['dato']->value['codigo_postal'];?>
</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">banos: <?php echo $_smarty_tpl->tpl_vars['dato']->value['banos'];?>
</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">dormitorios: <?php echo $_smarty_tpl->tpl_vars['dato']->value['dormitorios'];?>
 </div>
              </div>

	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "motor") {?>

                <div class="row">
                    <div class="col-lg-2  col-sm-6 col-md-2 col-xs-12">marca: <?php echo $_smarty_tpl->tpl_vars['dato']->value['marca'];?>
</div>
                    <div class="col-lg-2  col-sm-6 col-md-2 col-xs-12">modelo: <?php echo $_smarty_tpl->tpl_vars['dato']->value['modelo'];?>
</div>
                    <div class="col-lg-2  col-sm-6 col-md-2 col-xs-12">cv: <?php echo $_smarty_tpl->tpl_vars['dato']->value['cv'];?>
</div>
                    <div class="col-lg-2 col-sm-6 col-md-2 col-xs-12">color: <?php echo $_smarty_tpl->tpl_vars['dato']->value['color'];?>
</div>
                    <div class="col-lg-4  col-sm-12 col-md-4 col-xs-12">kilometraje: <?php echo $_smarty_tpl->tpl_vars['dato']->value['kilometraje'];?>
</div>
                </div>


	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "moviles") {?>
						

                
                <div class="row">
                    <div class="col-lg-2  col-sm-2 col-md-2 col-xs-12 ">pulgadas: <?php echo $_smarty_tpl->tpl_vars['dato']->value['pulgadas'];?>
</div>
                    <div class="col-lg-2  col-sm-2 col-md-2 col-xs-12">marca: <?php echo $_smarty_tpl->tpl_vars['dato']->value['marca'];?>
></div>
                    <div class="col-lg-2  col-sm-2 col-md-2 col-xs-12">modelo: <?php echo $_smarty_tpl->tpl_vars['dato']->value['modelo'];?>
</div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">cpu: <?php echo $_smarty_tpl->tpl_vars['dato']->value['cpu'];?>
</div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">memoria_interna: <?php echo $_smarty_tpl->tpl_vars['dato']->value['memoria_interna'];?>
</div>
               
                </div> 
                

	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "ordenador") {?>

                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 ">tipo_ordenadores :<?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_ordenadores'];?>
</div>                   
                     <div class="col-lg-2 col-md-3 col-sm-6 "> cpu:<?php echo $_smarty_tpl->tpl_vars['dato']->value['cpu'];?>
</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ">ram :<?php echo $_smarty_tpl->tpl_vars['dato']->value['ram'];?>
</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 "> hdd:<?php echo $_smarty_tpl->tpl_vars['dato']->value['hdd'];?>
</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ">grafica :<?php echo $_smarty_tpl->tpl_vars['dato']->value['grafica'];?>
</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ">pulgadas :<?php echo $_smarty_tpl->tpl_vars['dato']->value['pulgadas'];?>
</div>
                </div>
                                

	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "ropa") {?>

                
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 ">tipo_prenda :<?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_prenda'];?>
</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 ">tipo_tela :<?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_tela'];?>
</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 "> talla:<?php echo $_smarty_tpl->tpl_vars['dato']->value['talla'];?>
</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 ">color :<?php echo $_smarty_tpl->tpl_vars['dato']->value['color'];?>
</div>
                </div>     
              
 
    
	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "peliculas") {?>
                
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 "> genero:<?php echo $_smarty_tpl->tpl_vars['dato']->value['genero'];?>
</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> formato:<?php echo $_smarty_tpl->tpl_vars['dato']->value['formato'];?>
</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> director:<?php echo $_smarty_tpl->tpl_vars['dato']->value['director'];?>
</div>
                </div>
                    
                    
                                    

	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "videojuegos") {?>
       
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 ">genero :<?php echo $_smarty_tpl->tpl_vars['dato']->value['genero'];?>
</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> desarrollador:<?php echo $_smarty_tpl->tpl_vars['dato']->value['desarrollador'];?>
</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> plataforma:<?php echo $_smarty_tpl->tpl_vars['dato']->value['plataforma'];?>
</div>
                </div>                                    
                                    
                                    

	<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['tipo'] == "servicios") {?>



	<?php }?>
    
    
            <?php if ($_smarty_tpl->tpl_vars['dato']->value['ruta_imagen'][0] != "null") {?>
                  <!-- carrusel -->
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
                <div id="a<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
$_from = $_smarty_tpl->tpl_vars['dato']->value['ruta_imagen'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
                           <?php if ($_smarty_tpl->tpl_vars['imagen']->value != "null") {?>
                   				<li data-target="#a<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
" data-slide-to="$indice" <?php if ($_smarty_tpl->tpl_vars['indice']->value == "0") {?>class="active" <?php }?>></li>
                           <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php
$_from = $_smarty_tpl->tpl_vars['dato']->value['ruta_imagen'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['imagen']->value != "null") {?>
                                <div class="item <?php if ($_smarty_tpl->tpl_vars['indice']->value == 0) {?>active<?php }?>">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="Chania">
                                </div>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
                    </div>
                      <a class="left carousel-control" href="#a<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
" role="button" data-slide="prev">
                        	<i class="fa fa-arrow-circle-left" style="margin-top:250%;"></i>
                      </a>
                      <a class="right carousel-control" href="#a<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
" role="button" data-slide="next">
							<i class="fa fa-arrow-circle-right" style="margin-top:250%;"></i>
                      </a>               
                </div>
            </div>
            
            <?php }?>
            
            
            
            <?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo_usuario'] == "profesional" && $_smarty_tpl->tpl_vars['dato']->value['dni_contacto'] != "null") {?>
                <div class="row">
                    <div class="col-lg-12  col-sm-12 col-md-12 col-xs-12">
						<h4>datos contacto</h4>
                    </div>
				</div>
                <div class="row">
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
                   			<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono'];?>

                    </div>
       	             <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
       			            <?php echo $_smarty_tpl->tpl_vars['dato']->value['email'];?>

                    </div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
                   			<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>

                    </div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
                 			<?php echo $_smarty_tpl->tpl_vars['dato']->value['apellidos'];?>

                    </div>
				</div>
            <?php } else { ?>   
                        <div class="row">
                <div class="col-lg-12  col-sm-12 col-md-12 col-xs-12">
                    <div class="element">contacto <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel'];?>
</div>
                </div>    
            </div>     
 
			<?php }?>   
            
            
			<?php if ($_smarty_tpl->tpl_vars['dato']->value['edicion']) {?>
				<div class="col-lg-12  col-sm-12 col-md-12 col-xs-12" style="margin-top:20px;">
				<form enctype="multipart/form-data" method="post">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
" name="id_anuncio"/>
					<input class="btn btn-primary btn-lg" type="submit" 'formaction="editarAnuncio.php"' value="Editar anuncio"/>
					<input class="btn btn-primary btn-lg" type="submit" formaction="funciones/borrarAnuncio.PHP" value="Eliminar"/>
					<?php if ($_smarty_tpl->tpl_vars['dato']->value['tipo_de_usuario'] == "admin") {?>
						<input class="btn btn-primary btn-lg" type="submit" 'formaction="ban.php"' value="ban"/>
					<?php }?>
				</form>
				</div>
            <?php }?>
    
        </div>

        
        
            
  </div>
  

</div>

<?php }?>
<?php
$_smarty_tpl->tpl_vars['dato'] = $foreach_dato_Sav;
}

}
}
?>