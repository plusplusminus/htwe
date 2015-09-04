<?php global $post; ?>
<header class="header_post">  
	<h1 class="post_heading--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
</header>

<div class="col-md-8 col-md-offset-2">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post_content">
				<div class="post_entry clearfix">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
</div>