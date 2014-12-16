<?php
/*
Template name: Pagina de Categoria
*/
?>
<?php get_header(); ?>

    <div id="content">

		<h1><?php the_title(); ?></h1>
		<?php $cats = get_categories("hierarchical=0"); ?>

        <?php if($cats != NULL) { ?>
        <ul>
            <?php foreach ($cats as $cat) { ?>
                <li>
                    <?php if($cat != NULL) { $base_url = get_bloginfo('home') . "/category/" . $cat->slug; ?>
                    <h3><a href="<?php echo $base_url?>"><?php echo $cat->cat_name?></a></h3>
                    <?php } ?>

                    <?php // Show category description if ($cat->category_description != NULL) ?>
                    <p><?php echo $cat->category_description ?></p>

                    <?php $myposts = get_posts("numberposts=3&category=$cat->cat_ID"); ?>
                    <ul>
                    <?php foreach($myposts as $post) : ?>
                        <li><?php the_time('M d') ?>. <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endforeach; ?>
                    </ul><br />
                </li>
            <?php } ?>
        </ul>
        <?php } ?>

    </div><!-- /content -->

    <!-- sidebar -->
        <?php get_sidebar();?>
    <!-- /sidebar -->

<?php get_footer(); ?>
