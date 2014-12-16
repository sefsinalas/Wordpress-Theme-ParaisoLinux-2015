<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="es"> <![endif]-->
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?>
	</title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="shortcut icon" type="image/png" href="http://paraisolinux.com/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="Feed de Paraiso Linux" href="http://paraisolinux.com/feed/">
	<link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

	<script src="<?php echo get_template_directory_uri(); ?>/app/components/modernizr/modernizr.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- facebook sdk -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=117645824980664";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- /facebook sdk -->

	<div id="container">

		<div id="sidebar-left" class="text-center">

			<a href="http://paraisolinux.com" title="ParaisoLinux" class="th [radius] logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/cabezapenguin.gif" alt="ParaisoLinux">
			</a>

            <a href="http://paraisolinux.com" title="ParaisoLinux - Home" id="sidebar-title">ParaisoLinux</a>
            
			<p class="tagline">
				 <?php echo get_bloginfo ( 'description' );  ?>
			</p>

			<div id="facebook-sidebar-left">
				<div class="fb-like" data-href="https://facebook.com/paraisolinux" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>

			<div id="twitter-sidebar-left">
				<a href="https://twitter.com/sefsinalas" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir</a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>

            <div id="licence">
                <p>Esta obra está bajo una <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc-sa/2.5/ar/">Licencia Creative Commons</a></p>
            </div>

        </div><!-- sidebar_left -->

        <div id="main">

        	<div id="header">

<!--                 <div id="blog-title">
                    <a href="http://paraisolinux.com" title="Paraiso Linux">ParaisoLinux</a>
                </div> -->

                <div id="top-nav">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name">
                              <span id="blog-title"><a href="http://paraisolinux.com" title="Paraiso Linux">ParaisoLinux</a></span>
                            </li>
                             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
                          </ul>

                        <section class="top-bar-section">
                            <!-- Left Nav Section -->
                            <ul class="right">
                                <li class="divider"></li>
                                <li><a href="http://paraisolinux.com" rel="nofollow">Inicio</a></li>
                                <li class="divider"></li>
                                <li class="has-dropdown not-click">
                                    <a href="#">Blogs/SEO</a>
                                    <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                        <li><a href="http://paraisolinux.com/category/blog-y-seo/consejos_seo/" rel="nofollow">Consejos SEO</a></li>
                                        <li><a href="http://paraisolinux.com/category/blog-y-seo/consejos-varios/" rel="nofollow">Consejos Varios</a></li>
                                        <li><a href="http://paraisolinux.com/category/blog-y-seo/consejos-varios/" rel="nofollow">Informacion General</a></li>
                                        <li><a href="http://paraisolinux.com/category/blog-y-seo/consejos-varios/" rel="nofollow">Herramientas y Utilidades</a></li>
                                        <li><a href="http://paraisolinux.com/category/blog-y-seo/wordpress-desarrollo/" rel="nofollow">Tutoriales Wordpress</a></li>
                                        <li><a href="http://paraisolinux.com/category/blog-y-seo/" rel="nofollow">Categoria Completa →</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="has-dropdown">
                                    <a href="#">Linux</a>
                                    <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                        <li><a href="http://paraisolinux.com/category/linux/aplicaciones/" rel="nofollow">Aplicaciones para Linux</a></li>
                                        <li><a href="http://paraisolinux.com/category/linux/entorno/" rel="nofollow">Entorno Grafico</a></li>
                                        <li><a href="http://paraisolinux.com/category/linux/humor/" rel="nofollow">Humor</a></li>
                                        <li><a href="http://paraisolinux.com/category/linux/juegos/" rel="nofollow">Juegos</a></li>
                                        <li><a href="http://paraisolinux.com/category/linux/noticias/" rel="nofollow">Noticias</a></li>
                                        <li><a href="http://paraisolinux.com/category/linux/tutoriales/" rel="nofollow">Tutoriales</a></li>
                                        <li><a href="http://paraisolinux.com/category/linux/" rel="nofollow">Categoria Completa →</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="has-dropdown not-click">
                                    <a href="#">Desarrollo</a>
                                    <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                        <li><a href="http://paraisolinux.com/category/desarrollo/diseno-desarrollo-web/" rel="nofollow">Diseño y Desarrollo Web</a></li>
                                        <li><a href="http://paraisolinux.com/category/desarrollo/programacion-de-escritorio/" rel="nofollow">Programacion de escritorio</a></li>
                                        <li><a href="http://paraisolinux.com/category/desarrollo/varios/" rel="nofollow">Varios</a></li>
                                        <li><a href="http://paraisolinux.com/category/desarrollo/" rel="nofollow">Categoria Completa →</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="http://paraisolinux.com/category/tecnologia/" rel="nofollow">Tecnologia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="http://paraisolinux.com/category/offtopic/" rel="nofollow">Offtopic</a>
                                </li>
                                <li class="divider hide-for-small"></li>
                            </ul>

                            <!-- Left Nav Section -->
                        </section></nav>
                </div>
                
                <div style="clear: both;"></div> 

            </div><!-- header -->

            <div id="content-wrapper">
