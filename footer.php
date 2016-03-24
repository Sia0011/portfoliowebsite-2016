  <footer class="site-footer clearfix">

        <div class="footer-column-one">
                  <!-- Navigation -->
                  <a href="<?php echo home_url(); ?>"><img class="escape-logo" src="<?php bloginfo('template_directory'); ?>/images/beeldmerk-taniakabuta-grey.png" /></a>

          </div>
          <div  class="footer-column-two footer_middle">
                  <!--copyright-part-footer-->
                  <div class="copyright-footer">
                      <p> &copy; Copyright <?php echo date('Y');?>  <span class="logo-font"> <b> <?php bloginfo('name'); ?></b></span>. All rights reserved.</p>
                  </div>
          </div>
          <div  class="footer-column-three">
                <!--short contact info-->
                <?php if( dynamic_sidebar( 'footer_right' ) ) : ?>

                <?php else: ?>
                <p> Instal a widget for area "footer right"</p>
                <?php endif; ?>



          </div>
  </footer>

</div> <!-- containter -->
<?php wp_footer(); ?>
</body>
</html>
