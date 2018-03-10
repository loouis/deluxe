<?php 
  $args = array(
    'post_type' => 'projects',
    'posts_per_page' => '3',
    'order'   => 'DESC',
  );
  $the_query = new WP_Query( $args );
  $counter = 0;
?>
<?php 
  while( $the_query->have_posts() ): $the_query->the_post(); $counter++; 
  $attachment_id = get_post_thumbnail_id();
  $d_split_image = wp_get_attachment_image_src($attachment_id, 'd_split-screen');
  $m_image = wp_get_attachment_image_src($attachment_id, 'd_hero-image');
  $d_image = wp_get_attachment_image_src($attachment_id, 'd_hero-image');
  $category = get_the_category();
?>
  <?php if($counter == 1){ ?>
    <div class="wrap">
      <div class="split">
        <a href="<?php echo get_permalink();?>" class="image-text-block large our-projects__project our-projects__project--<?php echo $counter;?> wow fadeIn" data-wow-delay="0.<?php echo $counter + '1'; ?>s">
          <header>
            <h4 class="small-title small-title--w-line"><?php echo $category[0]->cat_name;?></h4>
            <h3 class="large text-shadow"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h3>
            <button class="circle-more-btn"><i></i></button>
          </header>
          <?php if( wp_is_mobile() ){ ?>
            <div class="image" style="background-image:url('<?php echo $m_image[0];?>')"></div>
          <?php }else{ ?>
            <div class="image" style="background-image:url('<?php echo $d_split_image[0];?>')"></div>
          <?php } ?>
        </a>
      </div>
  <?php }else{ ?>
    <?php if($counter % 2 == 0){echo '<div class="split">';}?>
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
    <?php if($counter % 2 == 1){echo '</div>';}?>
  <?php } ?>
<?php endwhile; wp_reset_postdata();?>