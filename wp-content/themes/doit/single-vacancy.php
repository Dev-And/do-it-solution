<?php
/**
 * @package WordPress
 * @subpackage do-it
*/
get_header(); ?>

<div class="inner-page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="title">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="container clearfix">
		<?php the_content(); ?>
	</div>
	
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
