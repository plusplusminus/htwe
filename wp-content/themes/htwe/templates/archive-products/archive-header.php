<section class="section_shop">  
	<div class="shop_content">
		<figure class="shop_content--image">
			<?php $catimage = apply_filters( 'taxonomy-images-queried-term-image', '', array(
				'attr' => array(
					'class' => 'img-responsive'
					),
				'image_size' => 'full',
			) ); ?>
			<?php echo $catimage;?>
			<div class="shop_content--info">
				<div class="content_heading">

					<?php if ( is_tax()) { 
						$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );;
					?>
					<h1 class="content_heading--title">
						<?php _e( $term->name, '' ); ?>
					</h1>
					<?php } ?>

				</div>
				<?php echo category_description( $category_id ); ?>
			</div>
			<div class="shop_content--action">
				<small>Start Shopping</small>
			</div>
		</figure>
		<div class="divider"></div>
	</div>
</section> <?php // end #wrapper ?>