<?php get_header();?>

	<div id="content">

		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
				<!-- obtengo el post -->
				<?php the_post(); ?>

				<?php $class_thumb = (has_post_thumbnail()) ? 'w-thumb' : 'wo-thumb' ?>	

				<div id="post-<?php the_ID(); ?>" <?php post_class($class_thumb);?> >
					
					<div class="post-thumb">
						<a rel="nofollow" href="<?php the_permalink(); ?>" class="th">
							<?php the_post_thumbnail( array(210, 160), array('class' => 'alignleft', 'class' => 'hide-for-small') ); ?>
						</a>
					</div>

					<div class="title-excerpt">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

						<!-- si tiene thumbnail muestro el extracto junto a una imagen -->
						<div class="<?php echo $class_thumb ?>">
							<?php the_excerpt(); ?>
							<a rel="nofollow" href="<?php the_permalink(); ?>">Continuar leyendo &rarr;</a>
						</div>
					</div>

					

				</div>
				
				<hr>

			<?php endwhile;?>
		<?php endif ?>

		<div class="pagenavi">
			<?php wp_pagenavi(); ?>
		</div>

	</div><!-- /content -->

	<?php get_sidebar();?>

<?php get_footer();?>