<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">

	<!--[if lt IE 9]><script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js" media="all"></script><![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header role="banner">
		<div id="navbar">
			<ul class="redes-sociais">
				<li><a href=""><?php echo do_shortcode("[icon name='facebook']"); ?></i></a></li>
				<li><a href=""><?php echo do_shortcode("[icon name='instagram']"); ?></a></li>
				<li><a href=""><?php echo do_shortcode("[icon name='twitter']"); ?></a></li>
				<li><a href=""><?php echo do_shortcode("[icon name='facebook']"); ?></i></a></li>
				<li><a href=""><?php echo do_shortcode("[icon name='instagram']"); ?></a></li>
				<li><a href=""><?php echo do_shortcode("[icon name='twitter']"); ?></a></li>
			</ul>
			<nav role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</nav>
			<?php echo do_shortcode("[ivory-search id='29' title='Menu Search Bar']"); ?>
		</div>
		<div id="logo">

		</div>
	</header>

	<div class="wrap">
