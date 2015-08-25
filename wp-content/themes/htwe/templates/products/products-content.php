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
<div class="col-sm-6">
	<main class="section_product">
		<header class="header_product">  
			<h1 class="post_heading--title"><?php the_title(); echo sprintf($format, $currency, $price); ?></h1>
			<div class="article_meta--content">
				<ul class="meta_author">
					<li class="author_item meta_author--author"><span class""="">by</span> <?php echo sprintf($artist); ?></li>
				</ul>
				<div class="post_social clearfix">
					<?php 

					$url = get_permalink();
				    $title = get_the_title();
				    $summary = get_the_excerpt();   

				    global $post;

				    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

				    ?>

					<div class="social_options">
						<ul class="social_buttons">
							<li class="social_button">
								<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo urlencode($title); ?>&p[summary]=<?php echo urlencode($summary); ?>&p[url]=<?php echo urlencode($url); ?>&p[images][0]=<?php echo urlencode($thumb[0]); ?>', 'sharer', 'toolbar=0,status=0,width=626,height=436');return false;" class="social_button--btn css-facebook">
									<span class="fa fa-facebook"></span>
								</a>
							</li>
							<li class="social_button">
								<a target="_blank" href="https://twitter.com/share/?counturl=<?php the_permalink();?>&amp;url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="social_button--btn css-twitter">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li class="social_button">
								<a target="_blank" onclick="window.open('//pinterest.com/pin/create/button/?url=<?php the_permalink();?>&amp;media=<?php echo $thumb[0];?>', 'sharer', 'toolbar=0,status=0,width=626,height=436');return false;" href="#" class="social_button--btn css-pinterest">
									<span class="fa fa-pinterest"></span>
								</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</header>

		<article id="post-<?php the_ID(); ?>" <?php post_class('article_post clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> 
			
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="post_content">
						<div class="post_entry clearfix">
							
							<?php the_content(); ?>
							
							<?php if (!empty($groups)) : $count = 0; ?>
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