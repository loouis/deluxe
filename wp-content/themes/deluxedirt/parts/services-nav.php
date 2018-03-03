<nav class="services__nav">
  <ul>
    <?php 
      $serviceLinkCounter = -1;
      while( have_rows('services_repeater') ) : the_row(); $serviceLinkCounter++;
    ?>
      <li>
        <a href="#0" data-slide-index="<?php echo $serviceLinkCounter; ?>">
          <i><?php the_sub_field('services_icon');?></i>
          <p><?php the_sub_field('services_title');?></p>
        </a>
      </li>
    <?php endwhile; wp_reset_postdata();?>
  </ul>
</nav>