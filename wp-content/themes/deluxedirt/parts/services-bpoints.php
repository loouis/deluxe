<?php while( have_rows('services_b-point-repeater') ): the_row();?>
  <li>
    <p><?php the_sub_field('services_b-point_bullet-point');?></p>
  </li>
<?php endwhile; wp_reset_postdata();?>