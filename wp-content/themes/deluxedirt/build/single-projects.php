<?php /* Template Name: projects Template Post Type: projects */ get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<main role="">
  <section>
  <?php
      $attachment_id = get_post_thumbnail_id();
      $d_heroImage = wp_get_attachment_image_src($attachment_id, 'd_full-screen');
      $m_heroImage = wp_get_attachment_image_src($attachment_id, 'm_split-screen-image');
    ?>

    <?php if( wp_is_mobile() ){ ?>
      <section class="hero hero--half-height" style="background-image: url('<?php echo $m_heroImage[0]; ?>')">
    <?php }else { ?>
      <section class="hero hero--half-height" style="background-image: url('<?php echo $d_heroImage[0];?>')">
    <?php } ?>
      <div class="wrapper">
        <div class="hero__text">
          <h1 class="text-shadow"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
        </div>
      </div><!-- //wrapper -->
    </section><!-- //Hero -->
    <section class="project-single-info">
      <div class="outter-wrapper">
        <div class="wrapper">
          <div class="l-40 project-single-info__text">
            <h3 class="text-shadow--small"><?php the_field('single-prj_title');?></h3>
            <p><?php the_field('single-prj_text');?></p>
          </div>
          <div class="l-60 project-single-info__bull-points">
            <?php get_template_part('parts/project-bullet-points');?>
          </div>
        </div><!-- //wrapper -->
      </div> <!-- //outter-wrapper -->
      <?php $bg_ID = get_field('single-prj_bg-image');?>
      <?php if( wp_is_mobile() ){ ?>
        <span class="about__bg-img">
          <div class="image cover" style="background-image:url('<?php echo $bg_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="about__bg-img">
          <div class="image cover" style="background-image:url('<?php echo $bg_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php } ?>
    </section><!-- //project-single-info -->

    
    <section class="project-gallery">
      <div class="outter-wrapper">
        <div class="wrapper">
          <header>
            <h3 class="text-shadow--small">Photos.</h3>
          </header>  
          <div class="project-gallery__wrap">
            <?php get_template_part('parts/project-gallery');?>
            <nav class="single-project-gallery__nav">
              <a href="#0" class="btn-circle single-project-gallery__nav--prev">
                <i class="arrow arrow--prev"></i>
              </a>
              <a href="#0" class="btn-circle single-project-gallery__nav--next">
                <i class="arrow arrow--next"></i>
              </a>
            </nav>
          </div>
          <span>
            <img class="ddi-approved" src="<?php echo get_template_directory_uri();?>/assets/images/seal-of-approval.png" alt="Deluxe Dirt Innovations approved">
          </span>
        </div><!-- //wrapper -->
      </div><!-- //outter-wrapper -->
    <?php if( wp_is_mobile() ){ ?>
      <div class="bg-image bg-fixed" style="background-image: url('<?php echo $m_heroImage[0]; ?>')"></div>
    <?php }else { ?>
      <div class="bg-image bg-fixed" style="background-image: url('<?php echo $d_heroImage[0];?>')"></div>
    <?php } ?>
    </section><!-- //project-gallery -->
    <section class="other-projects">
      <div class="wrapper">
        <h3>Other Projects</h3>
        <div class="other-projects__projects">
          <?php get_template_part('parts/other-projects');?>
        </div>
      </div>
    </section>
  </section>
</main>
<?php endwhile; endif;?>

<?php get_footer(); ?>
