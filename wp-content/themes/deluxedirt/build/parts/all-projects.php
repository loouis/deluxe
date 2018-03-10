<?php
  $args = array(
    'post_type' => 'projects',
    'posts_per_page' => '-1'
  );
  $the_query = new WP_Query( $args );
  $category = get_the_category();
  $counter = 0;
  
?>

<?php while( $the_query->have_posts() ): $the_query->the_post(); $counter++;?>
  <?php 
    $attachment_id = get_post_thumbnail_id();
    $m_image = wp_get_attachment_image_src($attachment_id, 'd_hero-image');
    $d_image = wp_get_attachment_image_src($attachment_id, 'd_smaller-full-screen');
  ?>

  <a href="<?php echo get_permalink();?>" class="image-text-block wow fadeIn our-projects__project our-projects__project--<?php echo $counter;?>" data-wow-delay="0.<?php echo $counter + '1';?>s">
    <header>
      <h4 class="small-title small-title--w-line"><?php echo $category[0]->cat_name;?></h4>
      <h3 class="text-shadow"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h3>
      <button class="circle-more-btn"><i></i></button>
    </header>
    <?php if( wp_is_mobile() ){ ?>
      <div class="image cover" style="background-image:url('<?php echo $m_image[0];?>')"></div>
    <?php }else{ ?>
      <div class="image cover" style="background-image:url('<?php echo $d_image[0];?>')"></div>
    <?php } ?>
  </a>
<?php endwhile; wp_reset_postdata(); ?>
