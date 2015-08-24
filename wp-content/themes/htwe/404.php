<?php get_header(); ?>
	
	<div class="container-fluid wrap">
      
	   	<?php global $post; ?>
		<header class="header_post">  
			<h1 class="post_heading--title">Hakuna Matata...</h1>
		</header>

	  	<main class="section_article">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<div <?php post_class('article_post clearfix'); ?>> 
					
						<div class="post_content text-center">
							<div class="post_entry clearfix">
								<p><?php get_search_form(); ?></p>
								<p>Keep calm and try again by typing in the Search box above. </p>
							</div>
						</div>
			
					
					</article><?php // end #wrapper ?>
				</div>
			</div>
		</main>

	</div>

	<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>
