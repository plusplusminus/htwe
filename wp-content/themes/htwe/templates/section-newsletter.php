<?php global $post; ?>

<?php $image_attributes_large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full' ); ?>

<section class="section_newsletter" style="background-image:url('<?php echo $image_attributes_large[0];?>');min-height:550px;">  
	<svg class="svg-icon shape-logo-stamp"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-stamp"></use></svg>

	<div class="wrap container-fluid">
		<div class="row center-xs middle-xs">
			<div class="col-xs-12 col-sm-6">

				<div class="newsletter_content">
						<svg class="svg-icon shape-logo-symbol"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-symbol"></use></svg>
						<div class="newsletter_content--info">
							<h6 class="newsletter_title"><span>&mdash;</span> Subscribe to our newsletter <span>&mdash;</span></h6>
							<p class="newsletter_text">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						</div>
						<div class="newsletter_form">
							<div class="row center-xs">
							  <div class="col-lg-8">
							    <div class="input-group">
							      <input type="text" class="form-control input-lg" placeholder="Email address">
							      <span class="input-group-btn">
							        <button class="btn btn-primary btn-lg" type="button"><small>Subscribe</small></button>
							      </span>
							    </div><!-- /input-group -->
							  </div><!-- /.col-lg-6 -->
							</div><!-- /.row -->
						</div>
					</figure>
				</div>

			</div>
		</div>
	</div>
</section> <?php // end #wrapper ?>