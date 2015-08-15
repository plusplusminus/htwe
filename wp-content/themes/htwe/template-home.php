<?php 

/* Template Name: Home */

?>

<?php get_header(); ?>

	<?php get_template_part('templates/section','welcome'); ?>

	<?php get_template_part('templates/section','feature'); ?>

	<?php get_template_part('templates/section','blog'); ?>

	<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>