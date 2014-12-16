<?php
define( 'TEMPLATE_PATH', get_bloginfo( 'stylesheet_directory' ) );
define( 'IMAGES_PATH', TEMPLATE_PATH.'/images/' );

// soporte para thumbs
add_theme_support( 'post-thumbnails' );

// soporte para link manager
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

// incluyo el panel de opciones
get_template_part('nhp', 'options');

// Add post formarts supports. http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside'));
// add post-formats to post_type 'page'
add_post_type_support( 'page', 'post-formats' );


// registro el sidebar
register_sidebar(array(
    'before_widget' => '<div class="widget"><div class="widget-content">',
    'after_widget' => '</div></div></div>',
    'before_title' => '<span class="widget-title">',
    'after_title' => '</span><div class="widget-body">',
));

// cosas del header que no sirven
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links',2);
remove_action('wp_head', 'wp_shortlink_wp_head',10,0);
remove_action('wp_head','feed_links_extra',3);
remove_filter('the_content', 'wptexturize');

/* ---------------------------------- POST RELACIONADOS ----------------------------------- */
function related_posts_tags()
{
   	$limit=4;
   	global $wpdb, $post, $table_prefix;

   	if ($post->ID)
    {
		$retval ='';
		// obtengo los tags
	    $tags = wp_get_post_tags($post->ID);
	    $tagsarray = array();

	    foreach ($tags as $tag)
        {
	       $tagsarray[] = $tag->term_id;
	    }

      	$tagslist = implode(',', $tagsarray);
      	$q = "SELECT p.ID, p.post_title, count(tr.object_id) as count FROM $wpdb->term_taxonomy AS tt, $wpdb->term_relationships AS tr, $wpdb->posts AS p WHERE tt.taxonomy ='post_tag' AND tt.term_taxonomy_id = tr.term_taxonomy_id AND tr.object_id  = p.ID AND (tt.term_id IN ($tagslist)) AND p.ID != $post->ID AND p.post_status = 'publish' AND p.post_date_gmt < NOW() GROUP BY tr.object_id ORDER BY count DESC, p.post_date_gmt DESC LIMIT $limit;";
      	$related = $wpdb->get_results($q);
      	$i=0;

      	//Si consigo post relacionados por tags
      	if ( $related )
        {
         	foreach($related as $r)
            {
         		$i++;

				if (has_post_thumbnail($r->ID))
                {
					$img=get_the_post_thumbnail($r->ID, 'thumbnail');
				}
				else
                {
					$template=get_bloginfo('template_directory');
					$img='<img src="'.$template.'/images/default-thumnail.png" alt="'.$r->post_title.'">';
				}
				//lo agrego a los posts_relacionados
				$posts_relacionados[$i]['img']=$img;
				$posts_relacionados[$i]['title']=wptexturize($r->post_title);
				$posts_relacionados[$i]['url']=get_permalink($r->ID);
            }
    	}

    	// si aun no alcanzo la cantidad de post relacionados que especifique
    	// completo lo que falte con los ulitmos post(esto es mas rapido que traer post aleatorios)
    	if($i<$limit)
        {
    		$limit = $limit - $i;
        	//muestro los ultimos posts
         	$q = "SELECT p.ID, p.post_title FROM $wpdb->posts AS p WHERE post_type = 'post' AND ID != $post->ID LIMIT $limit;";
         	$lasts = $wpdb->get_results($q);

         	if ( $lasts )
            {
            	foreach($lasts as $r)
                {
            		$i++;

					if (has_post_thumbnail($r->ID))
                    {
						$img=get_the_post_thumbnail($r->ID, 'thumbnail');
					}
					else
                    {
						$template=get_bloginfo('template_directory');
						$img='<img src="'.$template.'/images/default-thumnail.png" alt="'.$r->post_title.'">';
					}
					$posts_relacionados[$i]['img']=$img;
					$posts_relacionados[$i]['title']=wptexturize($r->post_title);
					$posts_relacionados[$i]['url']=get_permalink($r->ID);
				}
         	}
      	}
      	// armo lo que voy a mostrar
      	foreach ($posts_relacionados as $post_r)
        {
      		$retval.='<div class="one-related-post" data-equalizer-watch>';
                $retval.='<a href="'.$post_r['url'].'" title="'.$post_r['title'].'">';
                    $retval.='<div class="title-related-post">';
                        $retval .= $post_r['title'];
                    $retval .= '</div>';
      				$retval .= '<div class="image-related-post">';
      					$retval .= $post_r['img'];
      				$retval .= '</div>';
                $retval .= '</a>';
      		$retval .= '</div>';
      	}
      	echo $retval;
   	}
}


?>