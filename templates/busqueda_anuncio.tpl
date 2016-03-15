        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap-slider.js"></script>
        <script src="js/anuncios.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slider.css">
		<link rel="stylesheet" type="text/css" href="css/buscqueda_anuncios.css">

        <div id="container_busqueda" class="text-center" style="margin-top:25px">
            <div class="container">
               <section class="hgroup"><div class="container">
                    <h1>busqueda de anuncios</h1>
                  	 <ul class="breadcrumb pull-right">
                         <li><a href="index.php">Home</a> </li>
                         <li class="active">busqueda de anuncios</li>
                    </ul>
               </div></section>
                <div class="row" id="" >
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="categoria_nombre">categorias</label><br>
                            <select class="form-control" name="categoria_nombre" id="categoria_nombre" onchange="busqueda()">
                                <option value="null">valores</option>
                                {foreach $log1 as $indice=>$valor}
                           			<option value="{$valor.0}" >{$valor.1}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="tipo">tipo</label><br>
                            <select  class="form-control" name="tipo" id="tipo" onchange="busqueda()">
                                <option value="null" >tipos</option>
                                <option value="particular">particular</option>
                                <option value="profesional">profesional</option>
                            </select>
                        </div>
                       <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="fecha">tipo</label><br>
                            <select class="form-control" name="fecha" id="fecha" onchange="busqueda()">
                                <option value="-1" >fecha</option>
                                <option value="0">mas viejos</option>
                                <option value="1">mas nuevos</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="titulo">titulo</label><br>
                            <input class="form-control" type="text" name="titulo" id="titulo" placeholder="titulo anuncio"  onkeyup="busqueda()"  style="80%"/>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2" onmouseover="busqueda()">
                            <label for="precio">precio</label><br>
                            <input  type="text" class="slider slider-horizontal" name="precio"  id="precio" data-slider-max="1000" data-slider-selection="before"  data-slider-tooltip="show"  data-slider-step="5" data-slider-value="[0,1000]"  />
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2" >
                            <label for="descripcion">descripcion</label><br>
                            <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="titulo anuncio"  onkeyup="busqueda()"  style="80%"/>
                        </div>
                        
                    </div>
                </div>
                <div class="row" id="" style="margin-top:20px;">
                    <div class="categ" id="inmobiliaria">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="ciudada_inmobiliaria">ciudad</label> <br>

                            <input class="form-control" type="text" name="ciudada_inmobiliaria" id="ciudada_inmobiliaria" onkeyup="busqueda()"  />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" onmouseover="busqueda()">

                            <label  for="ciudad_metros_cuadrados"> maximo metros_cuadrados</label> 
<br>
                            <input  type="text" class="slider slider-horizontal" name="metros_cuadrados_inmobiliaria"  id="metros_cuadrados_inmobiliaria" data-slider-max="1000" data-slider-selection="before"  data-slider-tooltip="show"  data-slider-step="5" />

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" onmouseover="busqueda()">
                            <label for="banos_inmobiliaria"> minimo  baños</label> <br>
                            <input type="text" class="slider slider-horizontal" name="banos_inmobiliaria"  id="banos_inmobiliaria" data-slider-max="10" data-slider-selection="before"  data-slider-tooltip="show" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" onmouseover="busqueda()">
                            <label for="dormitorios"> dormitorios</label><br> 
                            <input type="text" class="slider slider-horizontal" name="dormitorios"  id="dormitorios" data-slider-max="10" data-slider-selection="before"  data-slider-tooltip="show" />
                        </div>
                    </div>
                    <div class="categ" id="libros">
                     	<div class="col-lg-4 col-md-4 col-sm-4" >
                            <label for="autor_libros">autor</label><br>
                            <input class="form-control" type="text" name="autor_libros" id="autor_libros" placeholder="titulo anuncio"  onkeyup="busqueda()"  />
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4" >
                            <label for="editorial_libros">editorial</label><br>
                            <input class="form-control" type="text" name="editorial_libros" id="editorial_libros" placeholder="autor"  onkeyup="busqueda()" />
						</div>
                       	<div class="col-lg-4 col-md-4 col-sm-4" >
                            <label for="genero_libros">genero</label><br>
                            <input class="form-control" type="text" name="genero_libros" id="genero_libros" placeholder="genero"  onkeyup="busqueda()"/>
						</div>
                    </div>
                    <div class="categ" id="motor">
                       	<div class="col-lg-3 col-md-3 col-sm-3" >

                        <label for="marca_motor">marca</label><br>
	              		<input class="form-control" type="text" name="marca_motor" id="marca_motor" placeholder="marca"  onkeyup="busqueda()" />
                        </div>
                       	<div class="col-lg-2 col-md-2 col-sm-2" >
                        <label for="modelo_motor">modelo</label><br>
	              		<input class="form-control" type="text" name="modelo_motor" id="modelo_motor" placeholder="modelo"  onkeyup="busqueda()" />
                        </div>
                       	<div class="col-lg-2 col-md-2 col-sm-2" onmouseover="busqueda()">
                        <label for="cv_motor">cv_motor</label><br>
                        <input type="text" class="slider slider-horizontal" name="cv_motor"  id="cv_motor" data-slider-max="150" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,150]"  data-slider-step="1" />
                   		</div>
                       	<div class="col-lg-3 col-md-3 col-sm-3" >
	                    <label for="color_motor">color</label><br>
	              		<input class="form-control" type="text" name="color_motor" id="color_motor" placeholder="color"  onkeyup="busqueda()"  />
        				</div>
                       	<div class="col-lg-2 col-md-2 col-sm-2" onmouseover="busqueda()" >
	                    <label for="kilometraje_motor">kilometraje</label><br>
                        <input type="text" class="slider slider-horizontal" name="kilometraje_motor"  id="kilometraje_motor" data-slider-max="300000" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,300000]"  data-slider-step="1000" />
        				</div>
                    </div>
                    <div class="categ" id="moviles">
                       	<div class="col-lg-3 col-md-3 col-sm-3" onmouseover="busqueda()">
                            <label for="pulgadas_movil">pulgadas</label><br>
                            <input type="text" class="slider slider-horizontal" name="pulgadas_movil"  id="pulgadas_movil" data-slider-max="500" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,500]"  data-slider-step="10" />
						</div>
                        <div class="col-lg-2 col-md-2 col-sm-2">

                            <label for="marca_moviles">marca</label><br>
                            <input type="text" name="marca_moviles" id="marca_moviles" placeholder="marca" class="form-control" onkeyup="busqueda()"  />
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="modelo_moviles">modelo</label><br>
                            <input type="text" name="modelo_moviles" id="modelo_moviles" placeholder="modelo" class="form-control" onkeyup="busqueda()"  />
                         </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="cpu_moviles">cpu moviles</label><br>
                            <input type="text" name="cpu_moviles" id="cpu_moviles" placeholder="cpu" class="form-control" onkeyup="busqueda()"  />						
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"  onmouseover="busqueda()">
                            <label for="memoria_interna_moviles">memoria interna</label><br>
                             <input type="text" class="slider slider-horizontal" name="memoria_interna_moviles"  id="memoria_interna_moviles" data-slider-max="2000" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,2000]"  data-slider-step="10" /><br>mb
                        </div>
                        
                        
                    </div>
                    <div class="categ" id="ordenadores">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="tipo_ordenadores">tipo</label><br>
                            <input type="text" name="tipo_ordenadores" id="tipo_ordenadores" placeholder="marca" class="form-control" onkeyup="busqueda()" />
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="cpu_ordenadores">cpu</label><br>
                            <input type="text" name="cpu_ordenadores" id="cpu_ordenadores" placeholder="marca" class="form-control" onkeyup="busqueda()" />
	                    </div>
						<div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="ram_ordenadores">cpu</label><br>
                             <input type="text" class="slider slider-horizontal" name="ram_ordenadores"  id="ram_ordenadores" data-slider-max="32000" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,32000]"  data-slider-step="100" /><br>mb
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="hdd_ordenadores">hdd</label><br>
                             <input type="text" class="slider slider-horizontal" name="hdd_ordenadores"  id="hdd_ordenadores" data-slider-max="32000" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,360]"  data-slider-step="100" /><br>gb
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="grafica_ordenadores">hdd</label><br>
                            <input type="text" name="tipo" id="grafica_ordenadores" placeholder="grafica_ordenadores" class="form-control" onkeyup="busqueda()" />

                             
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="pulgadas_ordenador">pulgadas</label><br>
                             <input type="text" class="slider slider-horizontal" name="pulgadas_ordenador"  id="pulgadas_ordenador" data-slider-max="1600" data-slider-selection="before"  data-slider-tooltip="show" data-slider-value="[0,1600]"  data-slider-step="100" /><br>
                        </div>


                    </div>
                    
                    <div class="categ" id="ropa">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                           <label for="talla_ropa">cpu</label><br>
                           <input class="form-control" type="text" name="talla_ropa" id="talla_ropa"  onkeyup="busqueda()" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                           <label for="color_ropa">color_ropa</label><br>
                           <input class="form-control" type="text" name="color_ropa" id="color_ropa"   onkeyup="busqueda()" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                           <label for="tipo_tela_ropa">tipo_tela_ropa</label><br>
                           <input class="form-control" type="text" name="tipo_tela_ropa" id="tipo_tela_ropa"   onkeyup="busqueda()" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                           <label for="tipo_prenda_ropa">cpu</label><br>
                           <input  class="form-control" type="text" name="tipo_prenda_ropa" id="tipo_prenda_ropa"  onkeyup="busqueda()" />
                        </div>	 	
                    </div>     
                    
                                   
                    <div class="categ" id="peliculas">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                           <label for="genero">genero</label><br>
                           <input class="form-control" type="text" name="genero" id="genero"  onkeyup="busqueda()" />
						</div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                           <label for="formato">formato</label><br>
                           <input class="form-control" type="text" name="formato" id="formato"  onkeyup="busqueda()" />
						</div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                           <label for="director">director</label><br>
                           <input class="form-control" type="text" name="director" id="director"  onkeyup="busqueda()" />
						</div>
                    </div>

                    <div class="categ" id="videojuegos">
                   
                        <div class="col-lg-4 col-md-4 col-sm-4">
                           <label for="desarrollador_videojuego">desarrollador_videojuego</label><br>
                           <input class="form-control" type="text" name="desarrollador_videojuego" id="desarrollador_videojuego"  onkeyup="busqueda()" />
						</div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                           <label for="plataforma_videojuego">plataforma_videojuego</label><br>
                           <input class="form-control" type="text" name="plataforma_videojuego" id="plataforma_videojuego"  onkeyup="busqueda()" />
						</div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                           <label for="genero_videojuego">genero_videojuego</label><br>
                           <input class="form-control" type="text" name="genero_videojuego" id="genero_videojuego"  onkeyup="busqueda()" />
						</div>
					</div>
                    
                    
                    
                </div>
            </div>
        </div>



<div class="container">
        <div id="anuncioss">

        </div>
</div>
        <script>$('.slider').slider()

        </script>