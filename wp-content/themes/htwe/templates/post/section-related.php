<?php
global $post;
$tag_ids = array();
$current_cat = get_the_category($post->ID);
$current_cat = $current_cat[0]->cat_ID;
$this_cat = '';
$tags = get_the_tags($post->ID);
if ( $tags ) {
    foreach($tags as $tag) {
        $tag_ids[] = $tag->term_id;
    }
} else {
    $this_cat = $current_cat;
}
$args = array(
    'post_type'   => 'post',
    'numberposts' => 5,
    'orderby'     => 'rand',
    'tag__in'     => $tag_ids,
    'cat'         => $this_cat,
    'post__not_in'     => array($post->ID)
);


$related = new WP_Query($args);


/**
 * If the tags are only assigned to this post try getting
 * the posts again without the tag__in arg and set the cat
 * arg to this category.
 */
if ( $related->post_count == 0) {
    wp_reset_query();
    $args['tag__in'] = '';
    $args['cat'] = $current_cat;
    $related = new WP_Query($args);
}

?>

<?php if ( $related->have_posts() ) : $count = 0; ?>
    <section class="section_grid">  
        <div class="wrap container-fluid">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="row">
                        <div class="related_posts--heading">    
                            <span class="related_posts--title">
                                You might also enjoy these...
                            </span>
                        </div>
                    </div>
                    <div class="row js-infinite-cont">
                        <?php while ( $related->have_posts() ) : $related->the_post(); $count++;?>
                            <?php $class = get_grid_class($count); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class($class.' js-infinite'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                                <?php get_template_part('content',get_post_format()); ?>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <nav class="wp-prev-next hide">
                        <ul class="clearfix">
                            <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                            <li class="next-link"><?php previous_posts_link( __( '&laquo; New Entries', 'bonestheme' )) ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_query(); ?>
            