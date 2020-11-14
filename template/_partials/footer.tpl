<!--FOOTER-->
{block name='hook_footer'}
    {hook h='displayFooter'}
{/block}
<footer>
	<div class="container">
		<div class="row nav-footer">
			<div class="col-md-4">
				<div class="menu-footer1">
					<ul>
						<li><a href="/121-ofertas-del-mes">Ofertas</a></li>
                        <li><a href="/194-bebidas-jugos-y-aguas">Bebidas, Jugos y Aguas </a></li>
						<li><a href="/3-cervezas">Cervezas</a></li>
                        <li><a href="/131-accesorios">Accesorios</a></li>
                        <li><a href="/7-vinos-y-espumantes">Vinos y espumantes</a></li>
                        <li><a href="/packs">Packs</a></li>
                        <li><a href="/11-piscos-y-licores">Piscos y licores</a></li>
                        <li><a href="/122-especiales">Especiales</a></li>
                        <li><a href="/21-energeticas-y-deportivas">Energéticas y deportivas</a></li>
					</ul>
				</div>
			</div>
			{if $logged}
			<div class="col-md-3">
				<div class="menu-footer2">
					<ul>
						<li><a href="/nosotros">Nosotros</a></li>
						<li><a href="/blog/eventos-c3?portada">Eventos</a></li>
						<li><a href="/blog/coctelera-c2">Coctelera</a></li>
						<li><a href="/despacho">Despacho</a></li>
						<li><a href="/concursos">Concursos</a></li>
                        <li><a href="/preguntas-frecuentes">Preguntas frecuentes</a></li>
						<!--<li><a href="#" class="btn-contacto2">Contacto</a></li>-->
						<li><a href="/terminos">Términos y condiciones</a></li>
						<li><a href="/politicas">Políticas de privacidad</a></li>
						<li><a href="/tipo-clientes">Categoría de Clientes</a></li>
					</ul>
				</div>
			</div>
			{else}
			<div class="col-md-3">
				<div class="menu-footer2">
					<ul>
						<li><a href="/nosotros">Nosotros</a></li>
						<li><a href="/blog/eventos-c3?portada">Eventos</a></li>
						<li><a href="/blog/coctelera-c2">Coctelera</a></li>
						<li><a href="/despacho">Despacho</a></li>
						<li><a href="/concursos">Concursos</a></li>
                        <li><a href="/preguntas-frecuentes">Preguntas frecuentes</a></li>
						<li><a href="/terminos">Términos y condiciones</a></li>
						<li><a href="/politicas">Políticas de privacidad</a></li>
						<li><a href="/tipo-clientes">Categoría de Clientes</a></li>
					</ul>
				</div>
			</div>
			{/if}
			<div class="col-md-2">
				<div class="info-contact">
					<h2>Informacion de contacto</h2>
					<p>Vitacura 2670, Las Condes, Santiago. Chile</p>
					<a href="tel:6004502502">600 450 2502</a>
				</div>
                <div class="foot-social">
                    <a href="https://www.instagram.com/labarraccu/" target="_blank"><img src="/themes/ccu/assets/images/instagram.png"></a>
                    <a href="https://www.facebook.com/labarraccu/" target="_blank"><img src="/themes/ccu/assets/images/facebook.png"></a>
                </div>
			</div>
			<div class="col-md-3 no-padding">
				<div class="info-payment">
					<!--<img src="/themes/ccu/assets/images/foot-payment1.png">-->
					<img src="/themes/ccu/assets/images/foot-payment2.png">   
					<img src="/themes/ccu/assets/images/foot-payment4.png">  
					<img src="/themes/ccu/assets/images/foot-payment3.png">   
					<img src="/themes/ccu/assets/images/logo_footer.png">   
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="footer-bottom">
	<p>2017 CCU S.A Todos los derechos reservados. “CCU” es una marca registrada de CCU</p>
</div>

{if $logged}
<div class="date-delivery-mobile visible-xs visible-sm">
<p>Próxima fecha</p>
<p>de entrega disponible: {$link->getGeoReferencia()|date_format:"%d/%m/%Y"}</p>
</div>
{/if}
<!--/FOOTER-->

<!--Iwana-->
<script src="https://iwanacash.com/service/trackCommerce.js" defer async></script>
<!--/Iwana-->

<!--Desactiva el botón de Travelpay luego de hacerle clic-->
<script type="text/javascript">
$('#btn-travelpay').click(function(){    
    $(this).attr("disabled","disabled");
    $("form").submit();
});
    
	var clocks = [];
  $('.count-down').each(function() {
      var clock = $(this),
          date = (new Date(clock.data('countdown')).getTime() - new Date().getTime()) / 1000;

      clock.FlipClock(date, {
          countdown: true,
          language: 'es-es'
      });

      clocks.push(clock);
  });
    
</script>