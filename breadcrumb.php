<?php global $brew_options ?>
<?php if ( $brew_options['breadcrumb'] == 1) { ?>
		<?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>
<?php } ?>