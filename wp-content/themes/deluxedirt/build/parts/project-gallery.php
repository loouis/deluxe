<?php

$images = get_field('project_gallery');

if( $images ): ?>
  <ul class="single-project-gallery">
    <?php foreach( $images as $image ): ?>
      <li class="single-project-gallery__cell">
        <img data-flickity-lazyload="<?php echo $image['sizes']['d_project-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
        <p><?php echo $image['caption']; ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>


