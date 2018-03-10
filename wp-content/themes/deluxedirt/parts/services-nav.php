<nav class="services__nav wow fadeIn" data-wow-delay=".15s">
  <ul>
    <?php 
      $serviceLinkCounter = -1;
      while( have_rows('services_repeater') ) : the_row(); $serviceLinkCounter++;
    ?>
    <?php if( $serviceLinkCounter++ == 0 ){ ?>
      <li class="services__nav__button is-selected">
        <div class="link">
          <i><?php the_sub_field('services_icon');?></i>
          <p><?php the_sub_field('services_title');?></p>
        </div>
      </li>
    <?php }else{ ?>
      <li class="services__nav__button">
        <div class="link">
          <i><?php the_sub_field('services_icon');?></i>
          <p><?php the_sub_field('services_title');?></p>
        </div>
      </li>
    <?php } ?>

    <?php endwhile; wp_reset_postdata();?>
  </ul>
</nav>