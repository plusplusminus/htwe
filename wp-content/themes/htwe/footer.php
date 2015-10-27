  <?php global $tpb_options; ?> 
    <footer id="footer" class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-8 col-md-6">
            <?php secondary_nav('secondary-nav','navbar_bottom'); ?>
            <div class="footer_social">
              <ul class="social_menu">
                <li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['twitter_url'];?>"><span class="fa fa-twitter"></span></a></li>
                <li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['facebook_url'];?>"><span class="fa fa-facebook"></span></a></li>
                <li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['instagram_url'];?>"><span class="fa fa-instagram"></span></a></li>
                <li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['pinterest_url'];?>"><span class="fa fa-pinterest"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-4 col-md-6">
            <div class="footer_attribution">
              <span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</span>
              <span>Made in <svg class="svg-icon shape-icon-africa"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-africa"></use></svg> by <a href="http://www.plusplusminus.co.za/?utm_source=HTWE&amp;utm_medium=Footer&amp;utm_campaign=Credit" title="PlusPlusMinus Design &amp; Development" target="_blank">PlusPlusMinus</a></span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
  </body>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->

  </body>

</html> <!-- end page. what a ride! -->
