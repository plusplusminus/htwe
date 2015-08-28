<section class="section_shop">  
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="shop_content">
				<figure class="shop_content--image">
					<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
					<div class="shop_content--info">
						<div class="content_heading">
							<h1 class="content_heading--title"><?php the_title(); ?></h1>
						</div>
						<?php the_content(); ?>
						<?php
						$args = array( 'hide_empty' => 0,'parent' => 0 );

						$terms = get_terms( 'product-category', $args );
						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						    $count = count( $terms );
						    $i = 0;
						    $term_list = '<ul class="list-inline">';
						    foreach ( $terms as $term ) {
						        $i++;
						    	$term_list .= '<li><a class="btn btn-primary" href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a></li>';
						    	if ( $count != $i ) {
						            
						        }
						        else {
						            $term_list .= '</ul>';
						        }
						    }
						    echo $term_list;
						}
						?>
					</div>
					<div class="shop_content--action">
						<small>Start Shopping</small>
					</div>
				</figure>
				<div class="divider"></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>	
</section> <?php // end #wrapper ?>