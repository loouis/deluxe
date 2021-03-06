<?php
  $counter = -1;
  $currentPostID = get_the_ID();
  $op_args = ( array(
    'post_type' => 'projects',
    'posts_per_page' => 2,
    'orderby'	=> 'rand',
    'post__not_in' => array($currentPostID),
  ));
  $op_query = new WP_Query( $op_args );
  $category = get_the_category();
?>


<?php while( $op_query->have_posts() ): $op_query->the_post(); $counter++;?>
  <?php
    $attachment_id = get_post_thumbnail_id();
    $d_image = wp_get_attachment_image_src($attachment_id, 'd_hero-image');
    $image_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true);
  ?>
  
  <a href="<?php echo get_permalink();?>" class="image-text-block our-projects__project our-projects__project--<?php echo $counter;?> wow fadeIn" data-wow-delay="0.<?php echo $counter + '1'; ?>s">
    <header>
      <h4 class="small-title small-title--w-line"><?php echo $category[0]->cat_name;?></h4>
      <h3 class="text-shadow"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h3>
      <button class="circle-more-btn"><i></i></button>
    </header>
    <?php if( wp_is_mobile() ){ ?>
      <div class="image" style="background-image:url('<?php echo $m_image[0];?>')"></div>
    <?php }else{ ?>
      <div class="image" style="background-image:url('<?php echo $d_image[0];?>')"></div>
    <?php } ?>
  </a>
  
<?php endwhile; wp_reset_postdata();?>

