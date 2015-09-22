<?php global $post; ?>
<?php global $tpb_options; ?>
<section class="section_newsletter" style="background-image:url('<?php echo $tpb_options['news_image']['url'];?>');min-height:550px;">  
	<svg class="svg-icon shape-logo-stamp"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-stamp"></use></svg>

	<div class="wrap container-fluid">
		<div class="row center-xs middle-xs">
			<div class="col-xs-12 col-sm-6">

				<div class="newsletter_content">
						<svg class="svg-icon shape-logo-symbol"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-symbol"></use></svg>
						<div class="newsletter_content--info">
							<h6 class="newsletter_title"><span>&mdash;</span> <?php echo $tpb_options['news_title'];?> <span>&mdash;</span></h6>
							<p class="newsletter_text"><?php echo $tpb_options['news_text'];?></p>
						</div>

						<div class="newsletter_form">
							<div class="row center-xs">
							  	<div class="col-lg-8">
									<!-- Begin MailChimp Signup Form -->
									<form action="//highteawithelephants.us11.list-manage.com/subscribe/post?u=0dde60f552eadb4cad53c9350&amp;id=4ef3d4268c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<div class="input-group">
											<input type="email" value="" name="EMAIL" class="form-control input-lg" id="mce-EMAIL" placeholder="Email address" required>
								    		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    		<div style="position: absolute; left: -5000px;"><input type="text" name="b_0dde60f552eadb4cad53c9350_4ef3d4268c" tabindex="-1" value=""></div>
							    			<span class="input-group-btn">
							    				<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary btn-lg"><small>Subscribe</small></button>
							    			</span>
							    		</div>
									</form>
									<!--End mc_embed_signup-->
								</div>
							</div>
						</div>




					</figure>
				</div>

			</div>
		</div>
	</div>
</section> <?php // end #wrapper ?>