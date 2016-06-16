<?php
	$post = $wp_query->post;

	if (in_category('vacancy')) {
		include(TEMPLATEPATH.'/single-vacancy.php');
	}
	elseif (in_category('partners')) {
		include(TEMPLATEPATH.'/single-partner.php');
	}
	else {
		include(TEMPLATEPATH.'/single-default.php');
	}
?>
