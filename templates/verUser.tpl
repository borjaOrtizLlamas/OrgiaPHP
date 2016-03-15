<section class="hgroup"><div class="container">
    <h1>modificacion usuario</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
    	 <li class="active">ver cuenta</li>
    </ul>
</div></section>

<link rel="stylesheet" type="text/css" href="css/usuarios.css">
<div class="container text-center portfolio_description " style="margin-top:50px;" >

    <div class="signin" >

        <div class="row">
            <h3>Usuario: {$login}</h3>
        </div>
        <div class="row" style="margin-bottom:25px;">
           <i class="fa fa-calendar"></i>
 <strong>Fecha de registro: </strong>{$fecha}

        </div>

        {if $tipo >0}
      <div class="row" style="margin-bottom:10px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>  Nombre: </strong>{$nombre}
            </div>
            {if $tipo == 1}
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>   Apellidos:</strong> {$apellidos}
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>   DNI:</strong> {$dnicif}
            </div>
            {elseif $tipo == 2}
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong> CIF: </strong>{$dnicif}
            </div>
        </div>    
        {/if}
        {/if}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>
                 <i class="fa fa-phone"></i>
               Tel&eacute;fono:
   			 </strong>
                 {$telefono}
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <i class="fa fa-phone"></i>

   <strong>
  Fax: </strong>{$fax} 
            </div>     
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong><i class="fa fa-envelope"></i>
  E-mail:</strong> {$email} 
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong> <i class="fa fa-location-arrow"></i>
  Ciudad: </strong>{$ciudad} </strong> 
            </div>   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong><i class="fa fa-location-arrow"></i>
provincia:</strong> {$provincia} </strong>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong><i class="fa fa-location-arrow"></i>
 C&oacute;digo postal: </strong>{$codpostal}</strong>
            </div>    
        </div>
        <div class="row" style="margin-top:25px;">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <strong><i class="fa fa-location-arrow"></i>
   Direcci&oacute;n: </strong>{$direccion}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <strong> <i class="fa fa-credit-card"></i>
N&uacute;mero de cuenta:</strong> {$numero_cuenta}
            </div>
        </div>		<br><br>

        <form>
            <div class="row">

                <input type="submit" value="EDITAR" class="btn btn-primary btn-lg" name="edit_user" formaction="verUser.php" formmethod="post" formenctype="multipart/form-data"/>
                {if $tipo == 2}
            </div>

        </form>
        <div class="row">
            <h3>Contacto:</h3>
        </div>
        
        <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
            	<strong>Nombre:</strong> {$cont_nom}
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
            	<strong>Apellidos:</strong> {$cont_ape}
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <strong><i class="fa fa-envelope"></i>  E-mail: </strong>{$cont_ema} 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <strong>  DNI:</strong> {$cont_dni} 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <strong><i class="fa fa-location-arrow"></i>  Telefono:</strong> {$cont_tel} 
            </div>
        </div><br><br>
        <form>
            <div class="row">
                <input type="submit" value="Editar contacto" class="btn btn-primary btn-lg" name="edit_user" formaction="verUser.php" formmethod="post" formenctype="multipart/form-data"/>
                {/if}
                <input type="submit" value="VER ANUNCIOS" class="btn btn-primary btn-lg" name="ver_anuncios" formaction="funciones/anuncioUser.php" formmethod="post" formenctype="multipart/form-data"/>
                </div>
        </form>
        {if $tipo eq 0}
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
        	<a class="btn btn-primary btn-lg" href="aceptar_profesionales.php">aceptar a profesionales</a>
            </div></div>
        {/if}
    </div>
</div>
