<?php get_header();?>

	<div id="content">

		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
				<!-- obtengo el post -->
				<?php the_post(); ?>

				<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>

		        <h1><?php the_title();?></h1>
		        <div id="adsense_top">
		            <!-- opciones del thema de HNP -->
					<?php global $NHP_Options; ?>
					<?php $NHP_Options->show('adsense-bloque-superior');?>
		        </div>

		        <div class="social-share">
		        	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-lang="es">Compartir</a>
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

		        <div id="adsense_bottom">
		            <?php global $NHP_Options; ?>
		            <div class="bloque-adsense">
						<?php $NHP_Options->show('adsense-bloque-inferior');?>
					</div>

			        <div class="social-share-bottom">
						<div class="gp">
							<div class="g-plusone" data-size="tall"></div>
							<script type="text/javascript">
							  (function() {
							    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							    po.src = 'https://apis.google.com/js/plusone.js';
							    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script>
						</div>
						<div class="fb">
							<div class="fb-like" data-href="<?php the_permalink();?>" data-send="false" data-layout="box_count" data-width="110" data-show-faces="false" data-font="lucida grande"></div>
						</div>
						<div class="tw">
							<a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-url="<?php the_permalink();?>" data-dnt="true" data-lang="es">Compartir</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
					</div>
					<div style="clear: both;"></div> 
		        </div>

		        

		        <div id="info-articulo">
		        	<div class="titulo-seccion"><span>Info del articulo</span></div>
		        	
			        <div id="info-detalle">
			        	<div class="tags">
							<span>Etiquetas:</span>
							<?php $posttags = get_the_tags(); ?>
							<?php if ($posttags): ?>
							  	<?php foreach($posttags as $tag): ?>
							  		<?php echo '<a href="'.get_tag_link($tag->term_id ).'" title="Tag">'.$tag->name.'</a>' ?>
							  	<?php endforeach ?>
							<?php endif ?>
						</div>
			        	<div class="category">
			        		<?php $category = get_the_category(); ?>
			        		<?php if ($category[0]): ?>
			        			<span>Categoria:</span>	<?php echo '<a href="'.get_category_link($category[0]->term_id ).'" title="'.$category[0]->cat_name.'">'.$category[0]->cat_name.'</a>' ?>
			        		<?php endif ?>
						</div>
						<div class="autor">
							<span>Autor:</span> <?php echo '<a href="'.get_the_author_meta('user_url').'" rel="author" title="Autor del articulo">'.get_the_author().'</a>';?>
						</div>
						<div class="fecha">
							<?php echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', ''), '<span class="time">'.get_the_time('l, F jS, Y').'</span>') .'</time> ';?>
						</div>
						<?php edit_post_link('<br>Editar', '', ''); ?>
						
			        </div>
		        </div>

		        <div id="related-posts" data-equalizer>
		        	<div class="titulo-seccion"><span>Articulos relacionados</span></div>
		        	<?php related_posts_tags();?>
		        </div>

				<div id="comentarios">
					<div class="titulo-seccion"><span>Comentarios</span></div>
					<?php comments_template(); ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

    </div><!-- content -->

	<!-- sidebar -->
		<?php get_sidebar();?>
	<!-- /sidebar -->

<?php get_footer();?>