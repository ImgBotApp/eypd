<?php
/**
 * Featured Stories
 */

global $post;
$args    = array(
	'posts_per_page' => 2,
	'category_name'  => 'Homepage',
	'post_status'    => 'publish',
	'order'          => 'DESC',
	'post__in'       => get_option( 'sticky_posts' ),
);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );
	?>
    <div class="eight columns">
        <h4><a href="<?php the_permalink(); ?>" rel="bookmark"
               title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt(); ?>

    </div>
    <div class="eight columns">
        <p><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( '150' ); ?></a></p>
    </div>


<?php endforeach; ?>
<?php wp_reset_postdata(); ?>