<?php
/**
	* @package WordPress
	* @subpackage do-it
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Do IT</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-152.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-120.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-57.png">
	<link rel="apple-touch-icon-precomposed" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-32.png">
	<link rel="shortcut icon" sizes="32x32 57x57 72x72 114x114 120x120 144x144 152x152" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon.ico">
	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARv1pTlMQqtIP8IaQfAGnDB2sHjCeYTWQ&sensor=true"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/fotorama.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/froogaloop2.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.counterup.min.js"></script>
	
	
	<script src="<?php bloginfo('template_url'); ?>/js/three.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/tween.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/CopyShader.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/ConvolutionShader.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/RadialBlurShader.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/LensflareShader.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/EffectComposer.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/MaskPass.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/RenderPass.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/ShaderPass.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/BloomPass.js"></script>


	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>

<div id="wrapper">
	<?php if ( is_front_page() ) { ?>
	<header>
	<?php } else {  ?>
	<header class="inner">
	<?php } ?>
		<div class="container clearfix">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a>
			<div class="main-navigation">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<?php if ( is_front_page() ) { ?>
					<li><a href="#last" class="scroll">Recent Projects</a></li>
					<li><a href="?p=2467">Partners</a></li>
					<?php } else {  ?>
					<li><a href="/#last" class="scroll">Recent Projects</a></li>
					<li><a href="?p=2467">Partners</a></li>
					<?php } ?>
					<li><a href="?p=2437">Vacancies</a></li>
					<li><a href="?p=2441">Contacts</a></li>
				</ul>
			</div>
		</div>
	</header>

	<header class="mobile">
        <meta name="viewport" content="width=device-width">
		<div class="container">
			<div class="m-trigger">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a>
		</div>
	</header>

	<div class="m-menu">
        <meta name="viewport" content="width=device-width">
		<i class="m-close"></i>
		<ul id="main_menu" class="">
			<li><a  href="<?php echo esc_url( home_url( '/' ) ); ?>" class="menu-link  main-menu-link">Home</a></li>
			<li><a  href="#" class="menu-link scroll main-menu-link">Recent Projects</a></li>
			<li><a  href="#" class="menu-link  main-menu-link">Partners</a></li>
			<li><a  href="?p=2437" class="menu-link  main-menu-link">Vacancies</a></li>
			<li><a  href="?p=2441">Contacts</a></li>
		</ul>	
	</div>
