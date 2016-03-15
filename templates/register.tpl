<link rel="stylesheet" type="text/css" href="../twitter-bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<section class="hgroup">
<div class="container">
    <h1>Register or Sign in</h1>
    <ul class="breadcrumb pull-right">
         <li><a href="index.php">Home</a> </li>
         <li class="active">Register of Sign in</li>
    </ul>
</div>
</section>
<section>
<div class="container">
<div class="row">

					<div class="signin">

<form id="registro" onSubmit="return comprobarTodo()">
<div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">

  						  <label for="login">Nombre de Usuario:</label>
    <input type="text" name="login" id="login" class="form-control" maxlength="20" onkeyup="comprobarUsuario(this.id, true)"/>
    <span id="span_login" style="color:red"></span>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
  			  <label for="password">Contrase&ntilde;a:</label>
    <input type="password" name="password" id="pass1" class="form-control" maxlength="20" onkeyup="comprobarPass1(this.id, true)"/>

    <span id="span_pass1" style="color:red"></span>
		</div>
 </div>
 <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div id="botoneslogin">
        <input type="submit" value="Entrar" name="doLog" class="btn btn-success btn-lg" formaction="funciones/login.php" formmethod="post" formenctype="multipart/form-data"/>
        <input type="button" class="btn btn-success btn-lg" value="Crear cuenta" onclick="registrarse(true)"/>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">{$pw}</div>
    </div>
    <div id="crearcuenta">
 <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
        <label for="password2">Confirmar Contrase&ntilde;a: </label>
        <input type="password" name="password2" id="pass2" class="form-control" maxlength="20" onBlur="comprobarPass2('pass1', this.id, true)"/>
        <span id="span_pass2" style="color:red"></span>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <label for="correo">E-mail: </label>
            <input type="text" name="correo" id="correo" class="form-control" onBlur="comprobarCorreo(this.id, true)"/>
        <span id="span_correo" style="color:red"></span>
        </div>
    </div>
 <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">

       		<label for="telefono">Tel&eacute;fono: </label>
        <input type="text" name="telefono" id="telefono" class="form-control" onBlur="comprobarTelefono(this.id, true)"/>	
        <span id="span_telefono" style="color:red"></span>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">

        	<label for="tipo">Tipo de usuario: </label><br>

        <label for="rParticular">Particular: </label>
        <input type="radio" name="tipo" id="rParticular" value="1" checked onclick="userTipo(this.id, true);"/>

        <label for="rProfesional">Profesional: </label>
        <input type="radio" name="tipo" id="rProfesional"  value="2" onclick="userTipo(this.id, true);"/>
        </div>
 </div>  
 <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
        	<label for="nombre">Nombre<span id="proname"> de la empresa</span>: </label>

        <input type="text" name="nombre" id="nombre" class="form-control" onblur="comprobarVacio(this.id, true)"/>	
        <span id="span_nombre" style="color:red"></span>
		</div>
</div>

        <div id="particular">
 <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">

            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" onblur="comprobarVacio(this.id, true)"/>
            <span id="span_apellidos" style="color:red"></span>
            </div>
          
          <div class="col-sm-6 col-md-6 col-lg-6">

            <label for="DNI">DNI: </label>
            <input type="text" name="DNI" id="DNI" class="form-control" onblur="comprobarDNICIF(this.value, this.id, true)"/>
            <span id="span_DNI" style="color:red"></span>
            </div>
        </div>

    <div id="profesional">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
        	    <label for="CIF">CIF: </label>
            <input type="text" name="CIF" id="CIF" class="form-control" onBlur="comprobarDNICIF(this.value, this.id, true)"/>	
            <span id="span_CIF" style="color:red"></span>
            </div>
        </div>
    </div>  </div> 
<div class="row">
         <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="fax">Fax: </label>
                <input type="text" class="form-control" name="fax" id="fax"/>
        </div>  
        <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="cod_postal">C&oacute;digo postal: </label>
                <input type="text" name="cod_postal" class="form-control" id="cod_postal" onBlur="comprobarCodPostal(this.id, true)"/>
        
        
                <span id="span_cod_postal" style="color:red"></span>
        </div>
</div>
<div class="row">
	<div class="col-sm-6 col-md-6 col-lg-6">
        <label for="direccion">Direcci&oacute;n: </label>
        <input type="text" name="direccion" class="form-control" id="direccion" onBlur="comprobarVacio(this.id, true)"/>
        <span id="span_direccion" style="color:red"></span>
        </div>
	<div class="col-sm-6 col-md-6 col-lg-6">

        <label for="provincia">Provincia: </label>
        <input type="text" name="provincia" class="form-control" id="provincia" onBlur="comprobarVacio(this.id, true)"/>

        <span id="span_provincia" style="color:red"></span>
	</div>
</div>
<div class="row">
       <div class="col-sm-6 col-md-6 col-lg-6">

        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" class="form-control" id="ciudad" onBlur="comprobarVacio(this.id, true)"/>
        <span id="span_ciudad" style="color:red"></span>
        </div>
<div class="col-sm-6 col-md-6 col-lg-6">
        <label for="num_cuenta">Nº de cuenta: </label>

        <input type="text" name="num_cuenta" class="form-control" id="num_cuenta" onBlur="comprobarNumCuenta(this.id, true)"/>
        <span id="span_num_cuenta" style="color:red"></span>
        </div>
</div>
<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">

            <input type="submit" class="btn btn-success btn-lg" value="Registrarse" id="nuevacuenta" formaction="funciones/login.php" formmethod="post" formenctype="multipart/form-data"/>
            <input type="button" class="btn btn-success btn-lg" value="Iniciar sesion" onclick="registrarse(false)"/>
    </div>
</div> 
¡ </div>
</form>
</div>
</div>
</div></div></section>