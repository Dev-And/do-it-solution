<?php

/*
Template Name: Landing page 5(case study D3.js)
*/

get_header();

$values = get_post_custom( $post->ID );
?>	
<div>
<?php 
	global $revelance_options;
?>
<div id="wrapper">
	<header class="inner">
		<div class="container clearfix">
			<a href="http://do-it.co/" class="logo"></a>
			<div class="main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container' => false,'menu_id' => 'main_menu','menu_class' => '','walker'=> new revelance_walker_nav_menu, 'fallback_cb' => false ) );?>
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
			<a href="http://do-it.co/" class="logo"></a>
		</div>
	</header>

	<div class="m-menu">
        <meta name="viewport" content="width=device-width">
		<i class="m-close"></i>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container' => false,'menu_id' => 'main_menu','menu_class' => '','walker'=> new revelance_walker_nav_menu, 'fallback_cb' => false ) );?>
	</div>

	<div class="inner-page">
		<div class="current-work case-study-js">
			<div class="banner">
				<div class="container">
					<div class="info">
						<h2>Data-Driven Documents - D3.js</h2>
						<p>D3.js is a JavaScript library for manipulating documents based on data.</p>
						<ul>
							<li>Full capabilities of modern browsers</li>
							<li>Combining powerful visualization components</li>
							<li>Data-driven approach to DOM manipulation</li>
						</ul>
					</div>
					<div class="preview">
						<img src="<?php bloginfo('template_url'); ?>/custom_includes/img/p_case_studyjs/1.png" class="one">
						<img src="<?php bloginfo('template_url'); ?>/custom_includes/img/p_case_studyjs/2.png" class="two">
					</div>
				</div>
			</div>

			<div class="content">
				<div class="section">
					<div class="container">
						<div class="description">
							<b>NVD3 Experiments</b>
							<p>This project is an attempt to build re-usable charts and chart components for d3.js without taking away the power that d3.js gives you. This is a NVD3 - very young collection of components, with the goal of keeping these components very customizeable, staying away from your standard cookie cutter solutions.</p>

							<strong>Technologies we used here are:</strong>
							<br>
							<br>
							<ul>
								<li>- <strong>Node.js</strong></li>
								<li>- <strong>NVD3 </strong></li>
								<li>- <strong>d3.js</strong></li>
							</ul>
							<div class="video-wrap">
								<video src="<?php bloginfo('template_url'); ?>/custom_includes/img/p_case_studyjs/video/1.mp4" autoplay loop></video>
							</div>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="container">
						<div class="description">
							<b>BitcoinAverage</b>
							<p>BitcoinAverage's Bitcoin Price Index is an average rate of all integrated exchanges, weighted by trading volume. Meaning that for every exchange the last trade price and 24 hour sliding window trading volume is considered, and each exchange contributes to the final price only to the extent of it's current trading volume.</p>

							<strong>Technologies we used here are:</strong>
							<br>
							<br>
							<ul>
								<li>- <strong>d3.js</strong></li>
								<li>- <strong>Angular.js</strong></li>
								<li>- <strong>Bootstrap 3</strong></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="video-section">
						<div class="video-wrap">
							<h3>BitcoinAvarage Charts</h3>
							<video src="<?php bloginfo('template_url'); ?>/custom_includes/img/p_case_studyjs/video/2.mp4" autoplay loop></video>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="container">
						<div class="description">
							<b>VisRisk - Visual Systemic Risk Analytics</b>
							<p>A platform for visual systemic risk analytics, with plots, maps and networks based on a range of economic data. A collaboration with RiskLab and Infolytica, for public awareness of models and data related to systemic risk.</p>

							<strong>Technologies we used here are:</strong>
							<br>
							<br>
							<ul>
								<li>- <strong>d3.js</strong></li>
								<li>- <strong>Meteor.js</strong></li>
								<li>- <strong>MongoDB</strong></li>
								<li>- <strong>Angular.js</strong></li>
								<li>- <strong>jQuery</strong></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="video-section vs2">
						<div class="video-wrap">
							<h3>Visual systemic risc analytics plots</h3>
							<video src="<?php bloginfo('template_url'); ?>/custom_includes/img/p_case_studyjs/video/3.mp4" autoplay loop></video>
						</div>
					</div>
				</div>
			</div><!-- content -->
		</div><!-- current work -->
	</div><!-- inner page -->

<?php get_footer(); ?>

</div>