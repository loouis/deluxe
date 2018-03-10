  
  <?php if( !is_page('contact') ) : ?>
     <!-- footer -->
    <?php $footerIMG = get_field('footer-bg-img', 'options');?>

    <footer class="footer cover" role="contentinfo">
      <div class="outter-wrapper">
        <div class="wrapper">
          <header>
            <h2 class="wow scaleInTextLarge"><?php the_field('footer-title', 'options');?></h2>
            <p class="large wow fadeInUp"><?php the_field('footer-para', 'options');?></p>
          </header>

          <div class="container">
            <div class="footer__container-details wow fadeInUp">
              <h4>Contact us</h4>
              <ul>
                <li>
                  <i></i>
                  <a class="btn-text-link-box" href="tel:<?php echo the_field('deluxe_tel-no', 'options');?>"><?php the_field('deluxe_tel-no', 'options');?></a>
                </li>
                <li>
                  <i></i>
                  <a class="btn-text-link-box" href="mailto:<?php echo the_field('deluxe-email-address', 'options');?>"><?php the_field('deluxe-email-address', 'options');?></a>
                </li>
                <li>
                  <i></i>
                  <p><?php the_field('deluxe_abn-number', 'options');?></p>
                </li>
              </ul>
            </div>
            <div class="footer__social-links wow fadeInUp" data-wow-delay=".25s">
              <h4>Follow us</h4>
              <ul>
                <?php get_template_part('parts/social-links');?>
              </ul>
            </div>
          </div>
          <!-- copyright -->
          <p class="copyright wow fadeIn" data-wow-delay=".7s">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
          </p>
          <!-- /copyright -->
        </div>
      </div>
      <?php if( wp_is_mobile() ){ ?>
        <span class="footer__bg-img">
          <div class="image cover wow fadeInScale" style="background-image:url('<?php echo $footerIMG['sizes']['m_split-screen-image'];?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="footer__bg-img">
          <div class="image bg-fixed cover wow fadeInScale" style="background-image:url('<?php echo $footerIMG['sizes']['d_full-screen'];?>')"></div>  
        </span>
      <?php } ?>
    </footer>
    <!-- /footer -->
  <?php endif; ?>
   
		<?php get_template_part('parts/main-nav');?>

    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-min.js"></script>

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
