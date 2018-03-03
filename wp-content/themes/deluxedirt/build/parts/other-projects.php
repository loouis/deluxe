<?php
  $currentPostID = get_the_ID();
  $op_args = ( array(
    'post_type' => 'projects',
    'posts_per_page' => 2,
    'post__not_in' => array($currentPostID),
  ));
  $op_query = new WP_Query( $op_args );
?>

<ul>
  <?php while( $op_query->have_posts() ): $op_query->the_post(); ?>
    <?php
      $attachment_id = get_post_thumbnail_id();
      $d_image = wp_get_attachment_image_src($attachment_id, 'd_hero-image');
      $image_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true);
    ?>
    <li>
      <a href="<?php get_permalink();?>">
        <p><?php the_title();?></p>
        <div class="image">
          <picture>
            <source media="(min-width: 650px)" srcset="<?php echo $d_image[0];?>">
            <img src="<?php echo $d_image[0];?>" alt="<?php echo $image_alt; ?>">
          </picture>
        </div>
      </a>
    </li>
  <?php endwhile; wp_reset_postdata();?>
</ul>
