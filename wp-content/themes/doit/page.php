<?php
/**
 * @package WordPress
 * @subpackage do-it
 */

get_header(); ?>

<div class="inner-page">
<?php if ( is_page('vacancies')) { ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="title">
			<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>

		<div class="container clearfix">
			<div class="vacancies">
				<div class="wrap">
					<?php $vacancy = new WP_Query(array('post_type' => 'vacancy')); ?>
					<?php while($vacancy->have_posts()) : $vacancy->the_post(); ?>

					<a href="<?php the_permalink(); ?>">
						<div class="b-wrap">
							<div class="block v-trigger">
								<div class="info-wrap">
									<div class="info">
										<i class="ico design">
											<img src="<?php bloginfo('template_url'); ?>/img/developer.png">
										</i>
										<p><?php the_title(); ?></p>
									</div>
								</div>
								<div class="description">
									<p>JavaScript Ninja Developer</p>
								</div>
							</div>
						</div>
					</a>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div><!-- wrap -->
			</div><!-- vacancies -->
		</div><!-- container -->
		
	<?php endwhile; ?>

<?php } elseif ( is_page('contacts')) { ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="title">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="contacts-page">
		<div class="map-wrapper">
			<div class="map-info contact-clearfix">
				<div class="adress">
					<i class="anchor"></i>
					<p>Ukraine, Odessa</p>
					<p>Pushkinska, str.</p>
				</div>
				<div class="phones">
					<p>+38 (050) 390 04 37</p>
					<p>+38 (063) 119 23 17</p>
					<p>just@do-it.co</p>
					<span class="form-trigger">Feedback</span>
				</div>
			</div>
			<div id="map"></div>
		</div>
	</div>

	<?php endwhile; ?>
	
<?php } elseif ( is_page('our-partners')) { ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="title">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="partners-page">
		<div class="partners wrap">
			<?php $partners = new WP_Query(array('post_type' => 'partners')); ?>
			<?php while($partners->have_posts()) : $partners->the_post(); ?>

			<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="block partners-link" style="background-image: url('<?php the_field('cover'); ?>');">
				<div class="height"></div>
				<span class="button">more info</span>
			</a>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>

	<?php endwhile; ?>
	
<?php } ?>
</div><!-- inner-page -->

<?php get_footer(); ?>