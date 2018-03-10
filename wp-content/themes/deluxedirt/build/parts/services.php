<?php 
  while( have_rows('services_repeater') ) : the_row(); 
?>
  <article class="services-carousel__service">

    <div class="services-carousel__service__mobile-accord">
      <header>
        <i><?php the_sub_field('services_icon');?></i>
        <p class="uppercase text-shadow--small"><?php the_sub_field('services_title');?></p>
      </header>
      <i class="arrow arrow--prev"></i>
      <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/d_parkwood-01-300x169.jpg')"></div>
    </div>
    
    <div class="services-carousel__service__content">
      <p class="services-carousel__service__open-para"><?php the_sub_field('services_body-copy');?></p>
      <ul>
        <?php get_template_part('parts/services', 'bpoints');?>
      </ul>
    </div>
    
  </article>
<?php endwhile; wp_reset_postdata();?>