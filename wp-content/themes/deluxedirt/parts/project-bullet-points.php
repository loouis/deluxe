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
    <li>
      <h3 class="project-single-info__bull-points__title"><?php echo $title;?></h3>
      <div class="">
        <h2 class="project-single-info__bull-points__no"><?php echo $no;?></h2>
        <p class="project-single-info__bull-points__unit"><?php echo $noUnit;?></p>
      </div>
    </li>
  <?php endwhile; ?>
</ul>
