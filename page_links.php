<?php
/*
Template name: Pagina de Enlaces
*/
?>
<?php get_header(); ?>

	<div id="content">

		<h1><?php the_title(); ?></h1>
		<ul id="blogroll">
			<?php wp_list_bookmarks(array('show_description'=>1)); ?>
		</ul>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	</div>


	<!-- sidebar -->
		<?php get_sidebar();?>
	<!-- /sidebar -->

<?php get_footer(); ?>