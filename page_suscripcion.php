<?php
/*
Template name: Confirmacion de suscripcion
*/
?>
<?php get_header(); ?>

	<div id="large-12 columns">

		<h1><?php the_title(); ?></h1>
		<p>¡Enhorabuena! Se ha confirmado su suscripción.</p>

		<p>Probablemente tambien quiera seguir el blog en estas redes sociales:</p>
		<div class="large-4 columns">
			<h4>Facebook</h4>
			<div class="fb-like-box" data-href="https://facebook.com/paraisolinux" data-width="292" data-show-faces="false" data-stream="false" data-show-border="false" data-header="false"></div>
		</div>
		<div class="large-4 columns">
			<h4>Google+</h4>
			<!-- Inserta esta etiqueta donde quieras que aparezca widget. -->
			<div class="g-person" data-width="314" data-href="//plus.google.com/110939727928679135174" data-layout="landscape" data-rel="author"></div>

			<!-- Inserta esta etiqueta después de la última etiqueta de widget. -->
			<script type="text/javascript">
			  window.___gcfg = {lang: 'es'};

			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</div>
		<div class="large-4 columns">
			<h4>Twitter</h4>
			<a href="https://twitter.com/sefsinalas" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @sefsinalas</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
	</div>

<?php get_footer(); ?>
