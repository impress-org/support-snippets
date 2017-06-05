// Note: This will have to be customized per environment depending on tab markup.
// This is provided as a PHP snippet to make it easier for users to implement via functions.php

add_action('gmb_public_view_bottom', 'wordimpress_redraw_gmb_tab_script');

function wordimpress_redraw_gmb_tab_script() { ?>
    <script>
		jQuery(document).ready(function($) {
			$('a[href="#directions"]').one('click', function (e) {
				var panel_id = $(this).attr('href');
				setTimeout(function(){
					var panel = $(panel_id).get(0);
					MapsBuilder.load_hidden_map(panel);
				},100, panel_id);
			});
		});
    </script >
<?php
}
