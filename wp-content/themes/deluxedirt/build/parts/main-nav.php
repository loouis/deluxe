
<div class="website-main-nav">
  <div class="outter-wrapper">
    <div class="wrapper">
      <div class="container">

        <?php if( is_front_page() ){ ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class'=> 'website-main-nav__links'
          )); ?>
        <?php }else{?>
          <?php wp_nav_menu(array(
            'theme_location' => 'extra-menu',
            'menu_class'=> 'website-main-nav__links'
          ));?>
        <?php } ?>

        <div class="website-main-nav__contact-details">

          <ul class="website-main-nav__contact-details__links">
            <li>
              <a class="btn-text-link-box" href="tel:<?php echo the_field('deluxe_tel-no', 'options');?>"><?php the_field('deluxe_tel-no', 'options');?></a>
            </li>
            <li>
              <a class="btn-text-link-box" href="mailto:<?php echo the_field('deluxe-email-address', 'options');?>"><?php the_field('deluxe-email-address', 'options');?></a>
            </li>
          </ul>

          <ul class="website-main-nav__contact-details__social">
            <?php get_template_part('parts/social-links');?>
          </ul>

        </div><!-- /website-main-nav__contact-details -->
  
      </div>
    </div>
  </div>
</div>
