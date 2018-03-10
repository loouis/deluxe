<?php /* Template Name: Contact page */ get_header(); ?>

  <main role="">
    <section>
          <!-- footer -->
    <?php 
      $attachID = get_post_thumbnail_id();
      $m_image = wp_get_attachment_image_src($attachID,'m_split-screen-image');
      $d_image = wp_get_attachment_image_src($attachID,'d_full-screen');
    ?>

    <footer class="footer footer--contact-page cover" role="contentinfo">
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
          <div class="image cover wow fadeInScale" style="background-image:url('<?php echo $m_image[0];?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="footer__bg-img">
          <div class="image bg-fixed cover wow fadeInScale" style="background-image:url('<?php echo $d_image[0];?>')"></div>  
        </span>
      <?php } ?>
    </footer>
		<!-- /footer -->

    </section>
  </main>

<?php get_footer(); ?>
