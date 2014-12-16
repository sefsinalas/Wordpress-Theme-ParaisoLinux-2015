<?php
/*
Template name: Pagina de Autor
*/
?>
<?php get_header(); ?>

	<div id="content">

		<div itemtype="http://schema.org/Person" itemscope="" id="contacto">
			<img height="250" width="250" title="Eduardo Federico Santillan" alt="Eduardo Federico Santillan" itemprop="image" src="http://paraisolinux.com/wp-content/uploads/2012/01/fede.jpg">

			<h2><span itemprop="name">Eduardo Federico Santillan</span></h2>
			<h3><span itemprop="jobTitle">Blogger / Desarrollador</span></h3>

			<div id="datos">
				<ul>
					<li>Vivo en: <div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
									<span class="general foundicon-location"> <span itemprop="addressLocality">Salta</span>, <span itemprop="addressRegion">Salta</span>, <span itemprop="postalCode">4400</span>  <span itemprop="addressCountry">Argentina</span>
								</div>
					</li>
					<li>Este es mi telefono: <span itemprop="telephone">(0387) 154-411416</span></li>
					<li>Naci el dia: <span itemprop="birthDate">1985-11-23</span></li>
					<li>Agregame a tus circulos en G+: <span><a title="Agregame en Google+" href="https://plus.google.com/110939727928679135174" itemprop="url" rel="me">Perfil en Google+</a></span></li>
					<li>Este es mi blog favorito: <span><a title="ParaisoLinux.com" href="http://www.paraisolinux.com" itemprop="url" rel="me">paraisolinux.com</a></span></li>
					<li>Sigueme en twitter: <span><a title="Sigueme en twitter" href="http://twitter.com/sefsinalas" itemprop="url" rel="me">@sefsinalas</a></span></li>
					<li>Me describo como: <span itemprop="description">Sin descripcion.</span></li>
				</ul>
			</div>

		</div><!-- /contacto -->

	</div><!-- /content -->

	<!-- sidebar -->
	<?php get_sidebar();?>
	<!-- /sidebar -->

<?php get_footer(); ?>