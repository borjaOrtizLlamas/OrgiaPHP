<script src="js/verDesglose.js"></script>


<section class="hgroup"><div class="container">
    <h1>Factura</h1>
    <ul class="breadcrumb pull-right">
    	 <li><a href="index.php">Home</a> </li>
         <li class="active">factura</li>
    </ul>
</div></section>

<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
	      	    <p><strong> Nombre:</strong> {$nombre}</p>
   	        	<p><strong>Apellidos: </strong>{$apellidos}</p>
            </div>
            {if $id_tipo == 2}
                <div class="col-lg-12 col-md-12 col-sm-12">
                 <p>   <strong>Empresa anunciante: </strong>{$empresa}</p>
                </div>
            {/if}
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <p> <strong> Referencia anuncio: </strong>{$id_anuncio}</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
            	<p><strong>Anuncio:</strong> {$anuncio}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
				<p><strong> Total: {$total}&#8364;</strong></p>
            </div>
         	<div class="col-lg-12 col-md-12 col-sm-12">
            	<input type="button" class="btn btn-primary btn-lg"  onclick="verDesglose()" value="Desglosar Factura" /> 
            </div>
        </div>    
            

<div id="desglose" style="visibility:hidden;margin-top:20px;" >
<div class="jumbotron">
    {foreach from=$desglose item=valor}
        <div class="row">
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<p><strong> Im&aacute;gen:</strong> {$valor}</p>
            </div>
        </div>
    {/foreach}
    
    {if $premium == 1}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p><strong> Premium: </strong> 1.5&#8364; </p>
            </div>
        </div>
    {/if}
    </div>
</div>


<form action="funciones/modifica_mostrar_anuncio.php">
	<input type="submit" class="btn btn-primary btn-lg" value="Modificar" />
</form>



<form action="https://www.sandbox.paypal.com/es/cgi-bin/webscr" name="f1" id="f1" method="post"> 
<fieldset> 
<legend class="prod"><p style="font:75% 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><strong>Finalizar la Compra </strong><a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=400, height=350');"><img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="Solution Graphics" border="0" align="absmiddle" /></a></p></legend> 
<input type="hidden" name="shipping" value="0" /> 
<input type="hidden" name="cbt" value="Haz click aqui para volver a Proyectoanuncios.com" /> 
<input type="hidden" name="cmd" value="_xclick" /> 
<input type="hidden" name="rm" value="2" /> 
<input type="hidden" name="bn" value="nombre de la empresa vendedora" /> 
<input type="hidden" name="business" value="rauljasensiodaw2-facilitator@gmail.com" /> 
<input type="hidden" name="item_name" value="Imagenes" /> 
<input type="hidden" name="item_number" value="Nombre del comprador" /> 
<input type="hidden" name="amount" value={$total} /> 
<input type="hidden" name="custom" value="30,00" /> 
<input type="hidden" name="currency_code" value="EUR" /> 
<input type="hidden" name="image_url" value="" /> 
<input type="hidden" name="return" value="{$ruta}" /> 
<input type="hidden" name="cancel_return" value="errorPago.php" /> 
<input type="hidden" name="no_shipping" value="0" /> 
<input type="hidden" name="no_note" value="0" />

 
<!-- Mostramos el detalle de la compra --> 

<div class="jumbotron">
        <div class="row"  style="font:75% 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:{$premium}</span>
 			</div>
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<span class="texto1negro"> </span><span class="prod"><strong>Productos:</strong> Precio total
			</div>
         	<div class="col-lg-12 col-md-12 col-sm-12">
				<strong>Precio Total:</strong> {$total} </span>
			</div>
		</div>
</div>

<input type="submit" class="btn btn-primary btn-lg" name="Submit" value="Finalizar Compra" /> 
</fieldset> 
</form> 
	</div>
</div>