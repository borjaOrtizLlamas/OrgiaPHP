<script src="../js/validacion.js"></script>
<script src="../js/funcionesV2.js"></script>

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
                    
                    {foreach $anuncio as $valorA}
                    	<label for="titulo">Titulo</label>
                      	<input class="form-control" type="text" id="titulo" name="titulo" value="{$valorA.titulo}" onblur='comprobarTexto(this.value)'>
                    	</br>
                 		<label for="descripcion">Descipcion</label>
                        <input class="form-control" type="text" id="descripcion" name="descripcion" value="{$valorA.descripcion}" onblur='comprobarTexto(this.value)'>
                        </br>
                     {/foreach}
                    
                    {foreach $categoria as $valorC}
                     	    {if $nombreCategoria eq "libros"}
                            	
                            	<label for="autor">Autor</label>	
                           	    <input class="form-control" type="text" name="autor" value="{$valorC.autor}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="genero">Genero</label>
                                <input type="text" class="form-control" name="genero" value="{$valorC.genero}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="editorial">Editorial</label>
                                <input class="form-control" type="text" name="editorial" value="{$valorC.editorial}" onblur='comprobarTexto(this.value)'>
                                
                                
                                
                           	{elseif $nombreCategoria eq "inmobiliaria"}   
                           		<label for="Ciudad">Ciudad</label>	
                           	    <input class="form-control" type="text" name="ciudad" value="{$valorC.ciudad}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="metros">Metros Cuadrados</label>
                                <input class="form-control" type="text" name="metros_cuadrados" value="{$valorC.metros_cuadrados}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="calle">Calle</label>
                                <input class="form-control" type="text" name="calle" value="{$valorC.calle}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="codigo_postal">Codigo Postal</label>
                                <input class="form-control" type="text" name="codigo_postal" value="{$valorC.codigo_postal}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="banos">Baños</label>
                                <input class="form-control" type="text" name="banos" value="{$valorC.banos}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="dormitorios">Dormitorios</label>
                                <input class="form-control" type="text" name="dormitorios" value="{$valorC.dormitorios}" onblur='comprobarNumero(this.value)'>
                             {elseif $nombreCategoria eq "motor"}   
                           		<label for="marca">Marca</label>	
                           	    <input class="form-control" type="text" name="marca" value="{$valorC.marca}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="modelo">Modelo</label>
                                <input class="form-control" type="text" name="modelo" value="{$valorC.modelo}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="cv">CV</label>
                                <input class="form-control" type="text" name="cv" value="{$valorC.cv}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="color">Color</label>
                                <input class="form-control" type="text" name="color" value="{$valorC.color}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="kilometros">kilometros</label>
                                <input class="form-control" type="text" name="kilometraje" value="{$valorC.kilometraje}" onblur='comprobarNumero(this.value)'>
                             {elseif $nombreCategoria eq "moviles"}   
                           		<label for="pulgadas">Pulgadas</label>	
                           	    <input class="form-control"  type="text" name="pulgadas" value="{$valorC.pulgadas}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label class="form-control"  for="marca">Marca</label>
                                <input class="form-control" type="text" name="marca" value="{$valorC.marca}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="modelo">Modelo</label>
                                <input class="form-control" type="text" name="modelo" value="{$valorC.modelo}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="cpu">CPU</label>
                                <input class="form-control" type="text" name="cpu" value="{$valorC.cpu}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="memoria">Memoria Interna</label>
                                <input class="form-control" type="text" name="memoria_interna" value="{$valorC.memoria_interna}" onblur='comprobarNumero(this.value)'>
                              {elseif $nombreCategoria eq "ordenadores"}   
                           		<label for="tipo">Tipo</label>	
                           	    <input class="form-control" type="text" name="tipo" value="{$valorC.tipo}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="cpu">CPU</label>
                                <input class="form-control" type="text" name="cpu" value="{$valorC.cpu}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="ram">RAM</label>
                                <input class="form-control" type="text" name="ram" value="{$valorC.ram}" onblur='comprobarNumero(this.value)'>
                                </br>
                                <label for="hdd">HDD</label>
                                <input class="form-control" type="text" name="hdd" value="{$valorC.hdd}" onblur='comprobarNumero(this.value)'> 
                                </br>
                                <label for="grafica">Grafica</label>
                                <input class="form-control" type="text" name="grafica" value="{$valorC.grafica}" onblur='comprobarTexto(this.value)'>  
                                </br>
                                <label for="pulgadas">Pulgadas</label>
                                <input class="form-control" type="text" name="pulgadas" value="{$valorC.pulgadas}" onblur='comprobarNumero(this.value)'>
                              {elseif $nombreCategoria eq "peliculas"}   
                           		<label for="genero">Genero</label>	
                           	    <input class="form-control" type="text" name="genero" value="{$valorC.genero}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="formato">Formato</label>
                                <input class="form-control" type="text" name="formato" value="{$valorC.formato}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="director">Director</label>
                                <input class="form-control" type="text" name="director" value="{$valorC.director}" onblur='comprobarTexto(this.value)'>
                                {elseif $nombreCategoria eq "ropa"}   
                           		<label for="talla">Talla</label>	
                           	    <input class="form-control" type="text" name="talla" value="{$valorC.talla}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="tela">Tipo de Tela</label>
                                <input class="form-control" type="text" name="tipo_tela" value="{$valorC.tipo_tela}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="prenda">Tipo de Prenda</label>
                                <input class="form-control" type="text" name="tipo_prenda" value="{$valorC.tipo_prenda}" onblur='comprobarTexto(this.value)'>
                                {elseif $nombreCategoria eq "videojuegos"}   
                           		<label for="genero">Genero</label>	
                           	    <input class="form-control" type="text" name="genero" value="{$valorC.genero}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="plataforma">Plataforma</label>
                                <input class="form-control" type="text" name="plataforma" value="{$valorC.plataforma}" onblur='comprobarTexto(this.value)'>
                                </br>
                                <label for="desarrollador">Desarrollador</label>
                                <input class="form-control" type="text" name="desarrollador" value="{$valorC.desarrollador}" onblur='comprobarTexto(this.value)'>
                               
                            {/if}
                        {/foreach}
                        {foreach $anuncio as $valorA}
                        		</br>
                               	<label for="precio">Precio</label>
                                <input class="form-control" type="text" id="precio" name="precio" value="{$valorA.precio_anuncio}">
                                <br/>
                               	{if $valorA.premium == 1}
                                <input  type="checkbox" id="premium" name="premium" checked><strong>Premium</strong>
                                <br/>
                                {else}
                                <input type="checkbox" id="premium" name="premium" ><strong>Premium</strong>
                                <br/>
                                {/if}
                        {/foreach}
                                 <input class="btn btn-primary btn-lg" type="submit" value="Modificar">
                    </form>
</div></div>           		
   <div id="divError"></div>
