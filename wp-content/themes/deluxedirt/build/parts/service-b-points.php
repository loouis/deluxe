<?php while( have_rows('services_b-point-repeater') ): the_row();?>
  <li><?php the_sub_field('services_b-point_bullet-point');?></li>
<?php endwhile; wp_reset_postdata();?>