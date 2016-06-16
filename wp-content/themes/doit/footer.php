<?php
/**
 * @package WordPress
 * @subpackage do-it
 */
?>

</div><!-- wrapper -->

<footer>
	<div class="container clearfix">
		<div class="wrap">
			<a href="http://do-it.co/" class="f-logo"></a>
		</div>
	</div>
</footer>

<div class="main-question">
	<div class="question-overlay"></div>
	<div class="question">
		<h1>Ready for motivation time?</h1>
		<ul>
			<li><span id="play" class="yes">Yes</span></li>
			<li><span class="no">No</span></li>
		</ul>
	</div>

	<div class="video">
		<i class="v-close" id="pause">esc</i>
		<iframe id="video" src="https://player.vimeo.com/video/129586297?api=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
</div>

<div class="modal-overlay"></div>

<div class="modal">
	<div class="form">
		<i class="close">esc</i>
		<div>
			<h2>Send message for us</h2>
			<?php echo do_shortcode('[contact-form-7 id="2446" title="Форма связи"]'); ?>
		</div>
	</div>
</div>

<div class="partner-modal">
	<div class="partner-content clearfix">
		
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>