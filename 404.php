<?php get_header();?>

	<div id="content">

		<h1>Ups! Algo paso</h1>
		<div data-alert class="alert-box alert radius">
			Esto es una pagina 404
			<a href="#" class="close">&times;</a>
		</div>
		<div class="error">
			<p class="bottom">Te invitamos a recorrer el blog y descubrir un monton sobre Linux, Tecnologia, SEO y programacion.</p>
		</div>
		<p>Estos son los <strong>ultimos articulos</strong> publicados en el blog:</p>
		<ul>
			<?php $archive_query = new WP_Query('showposts=20');
				while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li><?php the_time('F jS, Y');?> : <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> (<?php comments_number('0','1','%'); ?>)</li>
				<?php endwhile; ?>
		</ul>
	</div><!-- /content -->

	<!-- sidebar -->
	<?php get_sidebar();?>
	<!-- /sidebar -->

<?php get_footer();?>