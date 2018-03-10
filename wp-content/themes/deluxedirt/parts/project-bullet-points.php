<?php
  $counter = -1;
?>

<ul>
  <?php while( have_rows('pbp_repeater') ): the_row(); $counter++ ?>
    <?php
      $title = get_sub_field('pbp_title');
      $no = get_sub_field('pbp_no');
      $noUnit = get_sub_field('pbp_no-unit');
    ?>
    <li class="wow fadeInUp" data-wow-delay="0.<?php echo $counter + '1';?>s">
      <h3 class="project-single-info__bull-points__title small"><?php echo $title;?></h3>
      <div class="container">
        <h2 class="project-single-info__bull-points__no text-shadow large"><?php echo $no;?></h2>
        <p class="project-single-info__bull-points__unit text-shadow--small"><?php echo $noUnit;?></p>
      </div>
    </li>
  <?php endwhile; ?>
</ul>
