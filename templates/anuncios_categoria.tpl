<script src="js/validacion.js"></script>
<script src="js/funcionesV2.js"></script>
<script src="js/anuncios_categoria.js"></script>

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
            {foreach $categorias as $valor}
                <option id="{$valor.id_categoria}" name="{$valor.nombre}" onClick="agregarCampos('divFormulario')" onChange="agregarCampos('divFormulario')" onKeyDown="agregarCampos('divFormulario')">{$valor.nombre}</option>
            {/foreach}
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

