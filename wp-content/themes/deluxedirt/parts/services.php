<?php 
  while( have_rows('services_repeater') ) : the_row(); 
?>
  <article class="services-carousel__service">
    <p class="services-carousel__service__open-para"><?php the_sub_field('services_body-copy');?></p>
    <ul>
      <?php get_template_part('parts/services', 'bpoints');?>
    </ul>
  </article>
<?php endwhile; wp_reset_postdata();?>