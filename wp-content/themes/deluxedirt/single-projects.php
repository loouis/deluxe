<?php /* Template Name: projects Template Post Type: projects */ get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<main role="">
  <section>
    <section class="hero">
      <div class="wrapper">
        <div class="hero__text">
          <h1><?php the_title();?></h1>
        </div>
      </div><!-- //wrapper -->
    </section><!-- //Hero -->
    <section class="project-single-info">
      <div class="wrapper">
        <div class="l-40 project-single-info__text">
          <?php the_content();?>
        </div>
        <div class="l-60 project-single-info__bull-points">
          <?php get_template_part('parts/project-bullet-points');?>
        </div>
      </div><!-- //wrapper -->
    </section><!-- //project-single-info -->
    <section class="project-gallery">
      <div class="wrapper">
        <div class="project-gallery__wrap">
          <?php get_template_part('parts/project-gallery');?>
        </div>
        <span>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/ddi-approved.png" alt="Deluxe Dirt Innovations approved">
        </span>
      </div><!-- //wrapper -->
    </section><!-- //project-gallery -->
    <section class="other-projects">
      <div class="wrapper">
        <h3>Other Projects</h3>
        <?php get_template_part('parts/other-projects');?>
      </div>
    </section>
  </section>
</main>
<?php endwhile; endif;?>

<?php get_footer(); ?>
