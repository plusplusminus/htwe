<?php get_header(); ?>
	
	<div class="container-fluid wrap">
      
	   	<?php get_template_part('templates/post/post','header'); ?>

	  	<?php get_template_part('templates/post/post','content'); ?>

	</div>

	<!-- Related Posts -->
	<?php get_template_part('templates/section','blog'); ?>

	<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>
