<?php
  $args = array(
    'post_type' => 'projects',
    'posts_per_page' => '-1'
  );
  $the_query = new WP_Query( $args );
?>

<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
  <a href="<?php echo get_permalink();?>" class="all-projects__project">
    <div class="all-projects__project__text">
      <h4 class="small-title">Love for Dirt</h4>
      <h2><?php the_title();?></h2>
    </div>
  </a>
<?php endwhile; wp_reset_postdata(); ?>
