<link rel="stylesheet" type="text/css" href="css/login.css">

<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
    	 <li><a href="verUser.php">cuenta</a> </li>
         <li class="active">registro/log/modificacion</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">

	<form method="post" id="form" name="form" enctype="multipart/form-data">
    <input type="hidden" value="{$tipo}" id="tipo"/>
    <input type="hidden" id="botoneslogin" style="display:none"/>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="login">Login: 
        {$login}</label>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
                <label for="fecha">Fecha de registro: 
        {$fecha}</label>
		</div>
   	</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="password">Contrase&ntilde;a:</label>
    	<input type="password" class="form-control" name="pass1" id="pass1" maxlength="20" onkeyup="comprobarPass11(this.id,true)"/>												<span id="span_pass1" style="color:red"></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="password2">Confirmar Contrase&ntilde;a: </label>
        <input type="password" class="form-control" name="pass2" id="pass2" maxlength="20" onBlur="comprobarPass2('pass1', this.id,true)"/>										<span id="span_pass2" style="color:red"></span>
        </div>
     </div>   
    <div class="row">
        {if $tipo >0}
        <div class="col-lg-6 col-md-6 col-sm-6">
        	<label for="nombre">Nombre{if $tipo == 2} de la empresa{/if}:</label>
        	<input type="text" class="form-control" name="nombre" value="{$nombre}" id="nombre" onblur="comprobarVacio(this.id,true)"/>												<span id="span_nombre" style="color:red"></span>
         </div>
            
        	{if $tipo == 1}
        <div class="col-lg-3 col-md-3 col-sm-3">
        		<label for="apellidos">Apellido: </label>
        		<input type="text" class="form-control" name="apellidos" value="{$apellidos}" id="apellidos" onblur="comprobarVacio(this.id,true)"/>									<span id="span_apellidos" style="color:red"></span><br/>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        		<label for="dni">DNI: </label>
        		<input type="text" class="form-control" name="dni" value="{$dnicif}" id="DNI" onblur="comprobarDNICIF(this.value,this.id,true)"/>									<span id="span_DNI" style="color:red"></span><br/>
        </div>        
        	{elseif $tipo == 2}
        <div class="col-lg-6 col-md-6 col-sm-6">
        		<label for="cif">CIF: </label>
        		<input type="text" class="form-control" name="cif" value="{$dnicif}" id="CIF" onBlur="comprobarDNICIF(this.value,this.id,true)"/>									<span id="span_CIF" style="color:red"></span><br/>
        </div>
        	{/if}
        {/if}
  </div>  
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="telefono">Tel&eacute;fono: </label>
        <input type="text" class="form-control" name="telefono" value="{$telefono}" id="telefono" onBlur="comprobarTelefono(this.id,true)"/>											<span id="span_telefono" style="color:red"></span><br/></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="fax">Fax: </label>
        <input type="text" class="form-control" name="fax" value="{$fax}" maxlength="20"/><br></div>
        
    </div>    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="email">E-mail: </label>
        <input type="text" class="form-control" name="email" value="{$email}" id="correo" onBlur="comprobarCorreo(this.id,true)"/>													<span id="span_correo" style="color:red"></span><br/></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="ciudad">Ciudad: </label>
        <input type="text" class="form-control" name="ciudad" value="{$ciudad}" id="ciudad" onBlur="comprobarVacio(this.id,true)"/>													<span id="span_ciudad" style="color:red"></span><br/></div>
    </div>    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="provincia">Provincia: </label>
        <input type="text" class="form-control" name="provincia" value="{$provincia}" id="provincia" onBlur="comprobarVacio(this.id,true)"/>											<span id="span_provincia" style="color:red"></span><br/></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="codpostal">C&oacute;digo postal: </label>
        <input type="text" class="form-control" name="codpostal" value="{$codpostal}" id="cod_postal" onBlur="comprobarCodPostal(this.id,true)"/>									<span id="span_cod_postal" style="color:red"></span><br/></div>
        
    </div>    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="direccion">Direcci&oacute;n: </label>
        <input type="text" class="form-control" name="direccion" value="{$direccion}" id="direccion" onBlur="comprobarVacio(this.id,true)"/>											<span id="span_direccion" style="color:red"></span><br/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="numero_cuenta">N&uacute;mero de cuenta: </label>
        <input type="text" class="form-control" name="numero_cuenta" value="{$numero_cuenta}" maxlength="20" size="22" id="num_cuenta" onBlur="comprobarNumCuenta(this.id,true)"/>	<span id="span_num_cuenta" style="color:red"></span><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
    	<input type="button" class="btn btn-primary btn-lg" value="ACEPTAR" onClick="comprobarUpdateUser()" name="edit_user"/>
        <input type="button" class="btn btn-primary btn-lg" value="SALIR" onClick="history.back()"/>
        <input type="button" class="btn btn-primary btn-lg" value="DARSE DE BAJA"  onClick="borrarUser()"/>
  		</div>
   </div>
    </form>
</div></div>