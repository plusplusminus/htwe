<?php
	global $post;
	$currency = get_post_meta($post->ID,'product_currency',true);
	$price = get_post_meta($post->ID,'product_price',true);
	$artist = get_post_meta($post->ID,'product_artist',true);
	$groups = get_post_meta($post->ID,'features_group',true);
	$link = get_post_meta($post->ID,'product_link',true);
	$linktext = get_post_meta($post->ID,'product_link_text',true);
	$format = '<small class="article_content--price">%s %d</small>';
	
?>
<div class="col-md-6">
	<main class="section_product">
		<header class="header_product">  
			<h1 class="post_heading--title"><?php the_title(); echo sprintf($format, $currency, $price); ?></h1>
			<small class="article_content--artist"><?php echo sprintf($artist); ?></small>
		</header>

		<article id="post-<?php the_ID(); ?>" <?php post_class('article_post clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> 
		
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="post_content">
						<div class="post_entry clearfix">
							
							<?php the_content(); ?>
							
							<?php if (!empty($groups)) : $features; ?>
								<br>
								<h4>Features:</h4>

								<ul class="list-unstyled small">
								<?php foreach ($groups as $key => $group) : $count++; ?>
									<?php $name = $group['feature_title'];?>
									<?php $detail = $group['feature_detail'];?>

									<?php if (!empty($name)) { ?>
										<li><strong><?php echo $name;?>:</strong> <?php echo $detail;?></li>
									<?php } ;?>

								<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_query(); ?>

			<?php if (empty($link)) { ?>
				<?php gravity_form( 1, true, false, false, '', true );?>
			<?php } else { ?>
				<br><a class="btn btn-primary" target="_blank" href="<?php echo $link; ?>"><?php echo $linktext; ?></a>
			<?php } ?>

		</article><?php // end #wrapper ?>
	</main>
</div>