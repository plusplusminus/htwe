<?php /* Template Name: Image Header */ ?>

<?php get_header(); ?>
	
	<div class="container-fluid wrap">
      
	   	<?php get_template_part('templates/page/page','header-image'); ?>

	  	<?php get_template_part('templates/page/page','content'); ?>

	</div>

	<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>
