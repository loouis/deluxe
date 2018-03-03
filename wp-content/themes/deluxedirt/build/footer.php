    <!-- footer -->
    <?php $footerIMG = get_field('footer-bg-img', 'options');?>

  <?php if( wp_is_mobile() ){ ?>
    <footer class="footer cover" role="contentinfo" style="background-image:url(<?php echo $footerIMG['sizes']['m_split-screen-image'];?>)">
  <?php }else{ ?>
    <footer class="footer cover" role="contentinfo" style="background-image:url(<?php echo $footerIMG['sizes']['d_full-screen'];?>)">
  <?php } ?>
      <div class="outter-wrapper">
        <div class="wrapper">
          <header>
            <h2><?php the_field('footer-title', 'options');?></h2>
            <p><?php the_field('footer-para', 'options');?></p>
          </header>

          <div class="container">
            <div class="footer__container-details">
              <h4>Contact us</h4>
              <ul>
                <li>
                  <i></i>
                  <a href="tel:<?php echo the_field('deluxe_tel-no', 'options');?>"><?php the_field('deluxe_tel-no', 'options');?></a>
                </li>
                <li>
                  <i></i>
                  <a href="mailto:<?php echo the_field('deluxe-email-address', 'options');?>"><?php the_field('deluxe-email-address', 'options');?></a>
                </li>
                <li>
                  <i></i>
                  <p><?php the_field('deluxe_abn-number', 'options');?></p>
                </li>
              </ul>
            </div>
            <div class="footer__social-links">
              <h4>Follow us</h4>
              <ul>
                <?php get_template_part('parts/social-links');?>
              </ul>
            </div>
          </div>

          <!-- copyright -->
          <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
          </p>
          <!-- /copyright -->
        </div>
      </div>
		</footer>
		<!-- /footer -->

		<?php get_template_part('parts/main-nav');?>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
      (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
      (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
      l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
      ga('send', 'pageview');
		</script>

	</body>
</html>
