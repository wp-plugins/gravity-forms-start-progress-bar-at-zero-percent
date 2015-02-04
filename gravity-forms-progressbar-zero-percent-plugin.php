<?php
/*
Plugin Name: Gravity Forms - Start progress bar at zero percent
Description: Forces the progress bar on multi-page forms to start at zero percent.
Version: 1.0
Author: Adrian Gordon
Author URI: http://www.itsupportguides.com 
License: GPL2
*/

/*
* Set progress bar to start at zero
*/

add_filter('gform_progressbar_start_at_zero', 'itsp_gf_progressbar_zero_percent');

function itsp_gf_progressbar_zero_percent()
{
	return true;
}

/*
* Place required scripts in the footer
*/

add_action('gform_enqueue_scripts', 'itsp_gf_progressbar_zero_percent_queue_scripts', 90, 3);


function itsp_gf_progressbar_zero_percent_queue_scripts($form, $is_ajax) {
add_action('wp_footer', 'itsp_gf_progressbar_zero_percent_css_styles');
}
 
/*
* CSS styles - force 0% to display
*/

function itsp_gf_progressbar_zero_percent_css_styles() {
?>
	<style type="text/css">
		.percentbar_0 {
		 width: 5% !important;
		}

		.percentbar_0 span {
		 color: #fff !important;
		}
	</style> <?php
}

?>