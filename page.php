<?php get_header();?>

	<div id="content">

		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
				<!-- obtengo el post -->
				<?php the_post(); ?>

				<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>

				<h1><?php the_title();?></h1>

				<div class="social-share">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-lang="es" >Twittear</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					<g:plusone size="medium"></g:plusone>
					<script type="text/javascript">
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>

					<div class="fb-like" data-href="<?php the_permalink();?>" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false" data-font="lucida grande"></div>
				</div>

				<div id="post-<?php the_ID(); ?>" <?php post_class();?>>
		            <?php the_content(); ?>
		        </div><!-- post -->

				<div id="comentarios">
					<div class="titulo-seccion"><span>Comentarios</span></div>
					<?php comments_template(); ?>
				</div>


			<?php endwhile;?>
		<?php endif ?>

	</div><!-- /content -->

	<!-- sidebar -->
	<?php get_sidebar();?>
	<!-- /sidebar -->

<?php get_footer();?>