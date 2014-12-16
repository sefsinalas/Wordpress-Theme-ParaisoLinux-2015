<?php
/*
Template name: Pagina de Archivos
*/
?>
<?php get_header(); ?>

	<div id="content">

		<h1><?php the_title(); ?></h1>

		<h2>Archivos por mes:</h2>
			<ul>
				<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
		  	</ul>

		<h2>Archivos por categorias:</h2>
		  	<ul>
				<?php wp_list_categories('show_count=1&title_li='); ?>
		  	</ul>

		<h2>Archivos de los ultimos 20 posts</h2>
			<ul>
				<?php $archive_query = new WP_Query('showposts=20');
					while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li><?php the_time('F jS, Y');?> : <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> (<?php comments_number('0','1','%'); ?>)</li>
				<?php endwhile; ?>
			</ul>

		<h2>Archivos de los mas populares basados en los comentarios</h2>
			<ul>
			<?php
			$popular_posts = $wpdb->get_results("SELECT id,post_title, post_date, comment_count FROM {$wpdb->prefix}posts ORDER BY comment_count DESC LIMIT 0,10");
			foreach($popular_posts as $post) {?>
				<li><?php echo date('F jS, Y', strtotime($post->post_date));?> : <a href="<?php echo get_permalink($post->id); ?>" title="Permalink to <?php echo $post->post_title;?>"><?php print $post->post_title;?></a> (<?php echo $post->comment_count; ?>)</li>
			<?php }?>
			</ul>
	</div><!-- /content -->

	<!-- sidebar -->
		<?php get_sidebar();?>
	<!-- /sidebar -->

<?php get_footer(); ?>
