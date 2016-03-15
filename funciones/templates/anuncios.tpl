<script src="js/legacy.js"></script>
<script src="js/custombox.js"></script>
<link rel="stylesheet" type="text/css" href="css/custombox.css">
{foreach $datos as  $indice=>$dato}
{if $dato.tipo neq  ""}
        <div class="jumbotron text-center" {if $dato.premium eq 1} style="border: yellow 2px solid"){/if} >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 "><h3><strong>{$dato.titulo}</strong></h3></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">{$dato.nombre_c}</div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">{$dato.precio_anuncio}</div>
                </div>    
                <div class="row">
                
                    <div class="col-lg-12 col-md-12 col-sm-12 "><div class="jumbotron" style="background-color:rgba(204,255,255,1);">{$dato.des}</div></div>
                    <div class="clearfix"></div>
                    
                </div>

	{if $dato.tipo eq  "libro"}
                <div class="row">
                    <div class="col-lg-4  col-sm-6 col-md-4 col-xs-12 ">autor: {$dato.autor}</div>
                    <div class="col-lg-4  col-sm-6 col-md-4 col-xs-12">genero: {$dato.genero}</div>
                    <div class="col-lg-4  col-sm-6 col-md-4 col-xs-12">editorial: {$dato.editorial} </div>
                </div>
	{elseif $dato.tipo eq "inmobiliaria"}

                <div class="row">
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">ciudad: {$dato.ciudad}</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">metros_cuadrados: {$dato.metros_cuadrados}</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">calle: {$dato.calle} </div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">codigo_postal: {$dato.codigo_postal}</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">banos: {$dato.banos}</div>
                    <div class="col-lg-2  col-sm-4 col-md-2 col-xs-12">dormitorios: {$dato.dormitorios} </div>
              </div>

	{elseif $dato.tipo eq "motor"}

                <div class="row">
                    <div class="col-lg-2  col-sm-6 col-md-2 col-xs-12">marca: {$dato.marca}</div>
                    <div class="col-lg-2  col-sm-6 col-md-2 col-xs-12">modelo: {$dato.modelo}</div>
                    <div class="col-lg-2  col-sm-6 col-md-2 col-xs-12">cv: {$dato.cv}</div>
                    <div class="col-lg-2 col-sm-6 col-md-2 col-xs-12">color: {$dato.color}</div>
                    <div class="col-lg-4  col-sm-12 col-md-4 col-xs-12">kilometraje: {$dato.kilometraje}</div>
                </div>


	{elseif $dato.tipo eq "moviles"}
						

                
                <div class="row">
                    <div class="col-lg-2  col-sm-2 col-md-2 col-xs-12 ">pulgadas: {$dato.pulgadas}</div>
                    <div class="col-lg-2  col-sm-2 col-md-2 col-xs-12">marca: {$dato.marca}></div>
                    <div class="col-lg-2  col-sm-2 col-md-2 col-xs-12">modelo: {$dato.modelo}</div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">cpu: {$dato.cpu}</div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">memoria_interna: {$dato.memoria_interna}</div>
               
                </div> 
                

	{elseif $dato.tipo eq "ordenador"}

                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 ">tipo_ordenadores :{$dato.tipo_ordenadores}</div>                   
                     <div class="col-lg-2 col-md-3 col-sm-6 "> cpu:{$dato.cpu}</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ">ram :{$dato.ram}</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 "> hdd:{$dato.hdd}</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ">grafica :{$dato.grafica}</div>
                    <div class="col-lg-2 col-md-3 col-sm-6 ">pulgadas :{$dato.pulgadas}</div>
                </div>
                                

	{elseif $dato.tipo eq "ropa"}

                
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 ">tipo_prenda :{$dato.tipo_prenda}</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 ">tipo_tela :{$dato.tipo_tela}</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 "> talla:{$dato.talla}</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 ">color :{$dato.color}</div>
                </div>     
              
 
    
	{elseif $dato.tipo eq "peliculas"}
                
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 "> genero:{$dato.genero}</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> formato:{$dato.formato}</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> director:{$dato.director}</div>
                </div>
                    
                    
                                    

	{elseif $dato.tipo eq "videojuegos"}
       
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 ">genero :{$dato.genero}</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> desarrollador:{$dato.desarrollador}</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 "> plataforma:{$dato.plataforma}</div>
                </div>                                    
                                    
                                    

	{elseif $dato.tipo eq "servicios"}



	{/if}
    
    
            {if $dato.ruta_imagen.0 neq "null"}
                  <!-- carrusel -->
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
                <div id="a{$dato.id}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        {foreach $dato.ruta_imagen as $indice=>$imagen}
                           {if $imagen neq "null"}
                   				<li data-target="#a{$dato.id}" data-slide-to="$indice" {if $indice eq "0"}class="active" {/if}></li>
                           {/if}
                        {/foreach}
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        {foreach $dato.ruta_imagen as $indice=>$imagen}
                            {if $imagen neq "null"}
                                <div class="item {if $indice eq 0}active{/if}">
                                    <img src="{$imagen}" alt="Chania">
                                </div>
                            {/if}
                        {/foreach}
                    </div>
                      <a class="left carousel-control" href="#a{$dato.id}" role="button" data-slide="prev">
                        	<i class="fa fa-arrow-circle-left" style="margin-top:250%;"></i>
                      </a>
                      <a class="right carousel-control" href="#a{$dato.id}" role="button" data-slide="next">
							<i class="fa fa-arrow-circle-right" style="margin-top:250%;"></i>
                      </a>               
                </div>
            </div>
            
            {/if}
            
            
            
            {if $dato.tipo_usuario eq "profesional" and $dato.dni_contacto neq "null" }
                <div class="row">
                    <div class="col-lg-12  col-sm-12 col-md-12 col-xs-12">
						<h4>datos contacto</h4>
                    </div>
				</div>
                <div class="row">
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
                   			{$dato.telefono}
                    </div>
       	             <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
       			            {$dato.email}
                    </div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
                   			{$dato.nombre}
                    </div>
                    <div class="col-lg-3  col-sm-3 col-md-3 col-xs-12">
                 			{$dato.apellidos}
                    </div>
				</div>
            {else}   
            <div class="row">
                <div class="col-lg-12  col-sm-12 col-md-12 col-xs-12">
                    <div class="element">contacto:<i class="fa fa-phone"></i>{$dato.tel}</div>
                </div>    
            </div>     
 
			{/if}   
            
            
			{if $dato.edicion }
				<div class="col-lg-12  col-sm-12 col-md-12 col-xs-12" style="margin-top:20px;">
				<form enctype="multipart/form-data" method="post">
					<input type="hidden" value="{$dato.id}" name="id_anuncio"/>
					<input class="btn btn-primary btn-lg" type="submit" 'formaction="editarAnuncio.php"' value="Editar anuncio"/>
					<input class="btn btn-primary btn-lg" type="submit" formaction="funciones/borrarAnuncio.PHP" value="Eliminar"/>
					{if $dato.tipo_de_usuario eq "admin"}
						<input class="btn btn-primary btn-lg" type="submit" 'formaction="ban.php"' value="ban"/>
					{/if}
				</form>
				</div>
            {/if}
    
        </div>

        
        
            
  </div>
  

</div>

{/if}
{/foreach}
