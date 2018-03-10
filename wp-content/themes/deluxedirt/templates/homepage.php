<?php /* Template Name: Homepage */ get_header(); ?>

  <main role="">
    <?php
      $attachment_id = get_post_thumbnail_id();
      $d_heroImage = wp_get_attachment_image_src($attachment_id, 'd_full-screen');
      $m_heroImage = wp_get_attachment_image_src($attachment_id, 'm_split-screen-image');
    ?>

    <section class="hero">
      <div class="outter-wrapper">
        <div class="wrapper">
          <div class="hero__text">
            <h2 class="we-are text-shadow--small wow scaleInTextLarge">WE ARE</h2>
            <h1 class="text-shadow wow scaleInTextLarge">Deluxe Dirt <br />Innovations.</h1>
            <span class="hero__text__rotating wow scaleInTextLarge">
              <span>
                <h1>Dirt Pump</h1>
                <h1>Race Tracks</h1>
                <h1>Dirt Jumping</h1>
              </span>
            </span>
            <h1 class="text-shadow wow scaleInTextLarge">Speacialists.</h1>
          </div>
        </div>
      </div>
      <?php if( wp_is_mobile() ){ ?>
        <span class="hero__bg-img">
          <div class="image cover wow imgScaleIn" style="background-image:url('<?php echo $m_heroImage[0]; ?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="hero__bg-img">
          <div class="image cover bg-fixed wow imgScaleIn" style="background-image:url('<?php echo $d_heroImage[0];?>')"></div>  
        </span>
      <?php } ?>
    </section><!-- //hero -->

    <section id="about" class="about">
      <div class="outter-wrapper">
        <div class="wrapper">
          <div class="split split-l">
            <header>
              <h4 class="small-title wow fadeIn" data-wow-delay=".25s"><?php the_field('about_small-title');?></h4>
              <h2 class="text-shadow uppercase wow scaleInTextLarge" data-wow-delay=".5s"><?php echo str_replace('|', '<br />', get_field('about_title'));?></h2>
            </header>
            <div class="text wow fadeInUp" data-wow-delay=".5s"><?php the_field('about_text');?></div>
          </div><!-- // Split-l -->
          <div class="split split-r">
            <div class="images">
              <div class="images__image images__image--bottom">
                <?php $imageBottom = get_field('about_image1');?>
                <img src="<?php echo $imageBottom['sizes']['d_ratio-4_5'];?>" data-wow-delay=".5s" data-wow-duration=".5s" class="wow imgScale" alt=" <?php echo $imageBottom['alt'];?>">
              </div>
              <div class="images__image images__image--top">
                <?php $imageTop = get_field('about_image2');?>
                <img src="<?php echo $imageTop['sizes']['d_full-screen-half'];?>" class="wow imgScale" data-wow-delay=".25s" data-wow-duration=".5s"  alt=" <?php echo $imageTop['alt'];?>">
              </div>
            </div>
          </div><!-- // Split-r -->
        </div><!-- // Wrapper -->
      </div><!-- // Outter-wrapper -->
      <?php $AboutImage_ID = get_field('about_bgimage');?>
      <?php if( wp_is_mobile() ){ ?>
        <span class="about__bg-img">
          <div class="image cover" style="background-image:url('<?php echo $AboutImage_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="about__bg-img">
          <div class="image cover bg-fixed" style="background-image:url('<?php echo $AboutImage_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php } ?>
    </section><!-- // About -->

    <section class="services">
      <div class="outter-wrapper">
        <div id="services" class="wrapper anchor-page-pos">
          <header class="header-title">
            <h4 class="small-title wow fadeIn" data-wow-delay=".75s">Love for Dirt</h4>
            <h2 class="text-shadow large wow scaleInTextLarge" data-wow-delay=".5s">Services.</h2>
            <?php get_template_part('parts/services', 'nav');?>
          </header>
          <div class="services__carousel-con">
            <div class="services-carousel wow fadeIn">
              <?php get_template_part('parts/services');?>
            </div>
          </div>
        </div><!-- // Wrapper -->
      </div><!-- // Outter wrapper -->
      <?php $ServicesImage_ID = get_field('services_bg-image');?>
      <?php if( wp_is_mobile() ){ ?>
        <span class="services__bg-img">
          <div class="image cover" style="background-image:url('<?php echo $ServicesImage_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php }else { ?>
        <span class="services__bg-img">
          <div class="image bg-fixed cover" style="background-image:url('<?php echo $ServicesImage_ID['sizes']['d_full-screen-split'];?>')"></div>  
        </span>
      <?php } ?>
    </section><!-- // Services -->
    
    <section id="projects" class="our-projects">
      <div class="outter-wrapper">
        <div class="wrapper">
        <header class="header-title">
          <h4 class="small-title wow fadeIn" data-wow-delay=".75s">Our</h4>
          <h2 class="text-shadow large wow scaleInTextLarge" data-wow-delay=".5s">Projects.</h2>
        </header>
        <div class="our-projects__projects">
          <?php get_template_part('parts/recent-projects');?>
        </div>
        <div class="wrap">
          <a href="<?php echo site_url();?>/projects" class="btn btn--white btn--icon wow fadeInUp">
            <p>See all Projects</p>
            <i>
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><style>.cls-1{fill:#231f20;}</style></defs><title>btn-icon</title><polygon class="cls-1" points="47.95 91.48 39.46 83 72.46 50 39.46 17.01 47.95 8.52 89.43 50 47.95 91.48"/><polygon class="cls-1" points="25.3 76.48 16.81 68 34.81 50 16.81 32 25.3 23.51 51.78 50 25.3 76.48"/></svg>
            </i>
          </a>
        </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
