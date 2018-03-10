<?php while( have_rows('deluxe_social', 'options') ) : the_row(); ?>
  <li class="footer__social-links__link">
    <a href="<?php echo the_sub_field('deluxe_social-link', 'options');?>" class="btn-icon-circle" target="_blank">
      <i><?php the_sub_field('deluxe-social_icon', 'options');?></i>
    </a>
  </li>
<?php endwhile; wp_reset_postdata();?>