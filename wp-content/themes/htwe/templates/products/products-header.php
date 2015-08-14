<?php 
	global $post; 
?>

<div class="col-md-6">
	<figure class="product_image">
		<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
		<figcaption class="product_image--caption"></figcaption>
	</figure>
</div>
