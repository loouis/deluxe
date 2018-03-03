<?php

$images = get_field('project_gallery');

if( $images ): ?>
  <ul id="bxslider">
    <?php foreach( $images as $image ): ?>
      <li>
        <img src="<?php echo $image['sizes']['d_project-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
        <p><?php echo $image['caption']; ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
