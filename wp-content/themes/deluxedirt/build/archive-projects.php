<?php /* */ get_header(); ?>

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
            <h1 class="text-shadow">All <br />Projects</h1>
          </div>
        </div>
      </section>

      <section class="all-projects">
        <div class="outter-wrapper">
          <div class="wrapper">
            <?php get_template_part('parts/all-projects', 'projects');?>
          </div>
        </div>
      </section>
    </section>
  </main>


<?php get_footer(); ?>
