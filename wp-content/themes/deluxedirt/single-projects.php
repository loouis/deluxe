<?php /* Template Name: projects Template Post Type: projects */ get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<main role="">
  <section>
  <?php
      $attachment_id = get_post_thumbnail_id();
      $d_heroImage = wp_get_attachment_image_src($attachment_id, 'd_smaller-height-full-screen');
      $m_heroImage = wp_get_attachment_image_src($attachment_id, 'm_split-screen-image');
    ?>

    <section class="hero hero--half-height">
      <div class="outter-wrapper">
        <div class="wrapper">
          <div class="hero__text">
            <h1 class="text-shadow large wow scaleInTextLarge"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
          </div>
        </div><!-- //wrapper -->
      </div><!-- // outter wrapper -->
      <?php if( wp_is_mobile() ){ ?>
        <span class="hero__bg-img">
          <div class="image cover wow imgScaleIn" style="background-image:url('<?php echo $m_heroImage[0]; ?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="hero__bg-img">
          <div class="image cover bg-fixed wow imgScaleIn" style="background-image:url('<?php echo $d_heroImage[0];?>')"></div>  
        </span>
      <?php } ?>
    </section><!-- //Hero -->
    <section class="project-single-info">
      <div class="outter-wrapper">
        <div class="wrapper">
          <div class="l-40 project-single-info__text">
            <h3 class="text-shadow--small wow scaleInTextLarge"><?php the_field('single-prj_title');?></h3>
            <div class="wow fadeInUp"><?php the_field('single-prj_text');?></div>
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
          <div class="image cover bg-fixed" style="background-image:url('<?php echo $bg_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php } ?>
    </section><!-- //project-single-info -->

    
    <section class="project-gallery">
      <div class="outter-wrapper">
        <div class="wrapper">
          <header>
            <h3 class="text-shadow--small wow scaleInTextLarge">Photos.</h3>
          </header>  
          <div class="project-gallery__wrap wow fadeInUp">
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
      <span class="bg-image">
        <div class="image cover wow fadeInScale" style="background-image: url('<?php echo $m_heroImage[0]; ?>')"></div>
      </span>
      <?php }else { ?>
      <span class="bg-image">
        <div class="image cover wow fadeInScale" style="background-image: url('<?php echo $d_heroImage[0];?>')"></div>
      </span>
    <?php } ?>
    </section><!-- //project-gallery -->
    <section class="other-projects">
      <div class="outter-wrapper">
        <div class="wrapper">
          <h3 class="wow fadeInUp">Other Projects.</h3>
          <div class="other-projects__projects">
            <?php get_template_part('parts/other-projects');?>
          </div>
        </div>
      </div>
    </section>
  </section>
</main>
<?php endwhile; endif;?>

<?php get_footer(); ?>
