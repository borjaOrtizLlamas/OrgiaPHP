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

<form action="funciones/updateContact.php" method="post" enctype="multipart/form-data" onSubmit="return comprobarTodoContacto()">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

        <label for="nombre">Nombre de Contacto:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" maxlength="20"  value="{$cont_nom}" onBlur="comprobarVacio(this.id)"/> <span id="span_nombre" style="color:red"></span>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="apellidos">Apellidos: </label>
        <input type="text"  class="form-control" name="apellidos" id="apellidos" value="{$cont_ape}" onBlur="comprobarVacio(this.id)"/>
		<span id="span_apellidos" style="color:red"></span>
        </div>
     </div>
     
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="DNI">DNI: </label>
        <input type="text" class="form-control" name="DNI" id="DNI" value="{$cont_dni}" onblur="comprobarDNICIF(this.value, this.id)"/>
		<span id="span_DNI" style="color:red"></span>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="correo">E-mail:</label>
        <input type="text" class="form-control" name="correo" id="correo"  value="{$cont_ema}" onBlur="comprobarCorreo()"/>
        <span id="span_correo" style="color:red"></span>
        </div>
      </div>
      
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        
        <label for="telefono">Tel&eacute;fono: </label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{$cont_tel}" onBlur="comprobarTelefono()"/>					<span id="span_telefono" style="color:red"></span></div></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <input type="submit" class="btn btn-primary btn-lg" value="ACEPTAR"/>
        <input type="button" class="btn btn-primary btn-lg" value="SALIR"  onClick="window.location.href='verUser.php'"/></div></div>
    </form>
</div></div>