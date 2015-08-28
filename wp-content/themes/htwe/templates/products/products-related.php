<?php
global $post;

$custom_taxterms = wp_get_object_terms( $post->ID, 'product-category', array('fields' => 'ids') );
// arguments
$args = array(
'post_type' => 'products',
'post_status' => 'publish',
'posts_per_page' => 3, // you may edit this number
'orderby' => 'rand',
'tax_query' => array(
    array(
        'taxonomy' => 'product-category',
        'field' => 'id',
        'terms' => $custom_taxterms
    )
),
'post__not_in' => array ($post->ID),
);

$related = new WP_Query($args);

?>



<?php if ( $related->have_posts() ) : $count = 0; ?>
    <section class="section_grid">  
        <div class="wrap container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <div class="related_posts--heading">    
                            <span class="related_posts--title">
                                You might also like these...
                            </span>
                        </div>

                        <div class="row">
                            <?php while ( $related->have_posts() ) : $related->the_post(); $count++;?>
                                <?php $class = get_grid_class($count); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-6 col-md-4 grid_product'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                                    <?php get_template_part('templates/shop/product','grid'); ?>
                                </article>
                            <?php endwhile; ?>
                        </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_query(); ?>
            