<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.jpg" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <header class="main-header clear" role="banner">
			<button class="main-header__hamburger">
				<i></i>
			</button>
      <div class="main-header__logo">
        <a href="<?php echo home_url(); ?>">
          <i><?php echo the_field('deluxe-logo','options');?></i>
          <div>
            <p>DELUXE <br />DIRT  INN.</p>
          </div>
        </a>
      </div>
    </header>
			
