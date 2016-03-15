<div class="container text-center portfolio_description " style="margin-top:50px;" >
    <div class="signin">
    	<form action="getDatosFactura.php" method="post">
    	<label for="selecciona">El siguiente anuncio esta sin pagar</label>
         {foreach $anuncio as $valor}
        <input type="hidden" name="{$valor.id_anuncio}"/>
       
        <p>Identificador del Anuncio: {$valor.id_anuncio}
        	<br/>
        Titulo: {$valor.titulo}</p>
        {/foreach}
        <input type="submit" value="Pagar">
	</form>
	</div>
</div>