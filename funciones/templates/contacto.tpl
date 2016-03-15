<link rel="stylesheet" type="text/css" href="css/login.css">

<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="../index.php">Home</a> </li>
    	 <li><a href="../verUser.php">cuenta</a> </li>
         <li class="active">registro/log/modificacion</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
<form action="contacto.php" method="post" enctype="multipart/form-data" onSubmit="return comprobarTodoContacto()">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="nombre">Nombre de Contacto:</label>
<input type="text" class="form-control" name="nombre" id="nombre" maxlength="20" onBlur="comprobarVacio(this.id,true)"/>
<span id="span_nombre" style="color:red"></span>
		</div>
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="apellidos">Apellidos: </label>
<input type="text" class="form-control" name="apellidos" id="apellidos" onBlur="comprobarVacio(this.id,true)"/>
<span id="span_apellidos" style="color:red"></span>
		</div>
     </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="DNI">DNI: </label>
<input type="text" class="form-control" name="DNI" id="DNI" onblur="comprobarDNICIF(this.value,this.id,true)"/>
<span id="span_DNI" style="color:red"></span>
		</div>
        <div class="col-lg-6 col-md-6 col-sm-6">
<label for="correo">E-mail: </label>
<input type="text" class="form-control" name="correo" id="correo" onBlur="comprobarCorreo(this.id,true)"/>
<span id="span_correo" style="color:red"></span>
</div></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
<label for="telefono">Tel&eacute;fono: </label>
<input type="text" class="form-control" name="telefono" id="telefono" onBlur="comprobarTelefono(this.id,true)"/>	
<span id="span_telefono" style="color:red"></span>
</div></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
<input type="submit" class="btn btn-primary btn-lg" value="Registrarse"/>
</div></div>
</form>
</div></div>