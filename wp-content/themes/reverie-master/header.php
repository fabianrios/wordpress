<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
	<!-- font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="contain-to-grid">
	<!-- Starting the Top-Bar -->
	<div class="main-menu">
		<div class="row collapse">
			<div class="large-3 columns">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.jpg" width="201" height="77" alt="Logo"></a>
			</div>
			<div class="large-8 columns">
				<nav class="top-bar">
					 <section class="top-bar-section">
					    <?php
					        wp_nav_menu( array(
					            'theme_location' => 'primary',
					            'container' => false,
					            'depth' => 0,
					            'items_wrap' => '<ul class="left">%3$s</ul>',
					            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
					            'walker' => new reverie_walker( array(
					                'in_top_bar' => true,
					                'item_type' => 'li'
					            ) ),
					        ) );
					    ?>
					</section>
				</nav>
			</div>
			<div class="large-1 columns">
			    <ul class="right no-bullet lang">
					<li><a href="">Español</a></li>
					<li><a href="">Ingles</a></li>
					<li><a href="">Portugués</a></li>
			    </ul>
			</div>
		</div>
	</div>
	<!-- End of Top-Bar -->
</div>

<!-- <header class="row" role="banner">
	<div class="small-12 columns">
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h4 class="subheader"><?php bloginfo('description'); ?></h4>
		<hr/>
	</div>
</header> -->

<header class="main">
	<div class="row">
		<div class="large-5 columns"></div>
		<div class="large-7 columns">
			<div class="main-text">
				<h2 class="subheader">Consultoria en salud ocupacional, gestión ambiental, sistemas de gestión y mejoramiento contínuo</h2>
				<a href="#" class="button small arrow"> Ver video</a> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="banner">
				<ul class="large-block-grid-4 it">
					<li> 
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/mata.jpg" width="245" height="246" alt="Mata">
					</li>
					<li class="blue">
						<a href="/"><h3 class="subheader whitetxt">Nuestra Empresa</h3></a>
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/obrera.jpg" width="246" height="246" alt="Obrera">
					</li>
					<li class="green">
						<a href="/"><h3 class="subheader whitetxt">Aplicativo HAZMAT</h3></a>
						<p>Non pulvinar ante sem vitae turpis. Cras egestas et elit fermentum pretium. Vivamus fermentum </p>
						<a href="#"><small class="whitetxt">Ingresar ></small></a>
					</li>
					<li class="orange">
						<a href=""><h3 class="subheader whitetxt">Nuestros Servicios</h3></a>
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/people.jpg" width="245" height="245" alt="People">
					</li>
					<li class="red">
						<a href=""><h3 class="subheader whitetxt">Blog</h3></a>
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/hand.jpg" width="245" height="245" alt="Hand">
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

<section class="container" role="document">
	<div class="row">
