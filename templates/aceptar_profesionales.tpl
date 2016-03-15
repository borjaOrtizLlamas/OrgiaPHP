<section class="hgroup"><div class="container">
    <h1>añadir profesionales</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
    	 <li><a href="verUser.php">Cuenta</a> </li>
    	 <li class="active">añadir profesionales</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin" >
              {foreach $profesionales as $indice=>$valor}
              {if $valor neq ""}
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <strong>el cif=></strong>{$valor.cif}
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <strong>nombre de empresa =></strong>{$valor.nombre_empresa}
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                
                             <a class="btn btn-primary btn-lg" href="funciones/aceptar_profesionales.php?login_usuario={$valor.log}">aceptar a profesional=> {$valor.log}</a>
                    </div>
                </div>
                {/if}
 			  {/foreach}     
	</div>
</div>