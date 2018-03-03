<?php /* */ get_header(); ?>

  <main role="">
    <section>
      <section class="hero">
        <div class="hero__text">
          <h1>Projects</h1>
        </div>
      </section>


      <section class="all-projects">
        <div class="wrapper">
          <?php get_template_part('parts/all-projects', 'projects');?>
        </div>
      </section>
    </section>
  </main>


<?php get_footer(); ?>
