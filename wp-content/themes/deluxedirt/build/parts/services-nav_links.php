<nav class="services__pager">
  <?php 
    $serviceLinkCounter = 0;
    while( have_rows('services_repeater') ) : the_row(); $serviceLinkCounter++;
  ?>
    <a href="#0" data-slide-index="<?php echo $serviceLinkCounter; ?>">
      <i><?php the_sub_field('services_icon');?></i>
      <p><?php the_sub_field('services_title');?></p>
    </a>
  <?php endwhile; wp_reset_postdata();?>
</nav>