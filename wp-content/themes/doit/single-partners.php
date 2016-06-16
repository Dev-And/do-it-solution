<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div style="background-image: url('<?php the_field('cover'); ?>');" class="cover"></div>
<div class="height"></div>
<div class="info-wrap">
	<div class="info">
		<b><?php the_title(); ?></b>
		<div class="description">
			<p><?php the_content(); ?></p>
		</div>
	</div>
	
	<div class="close">
		<span class="partners-close">close</span>
	</div>
</div>


<?php endwhile; ?>