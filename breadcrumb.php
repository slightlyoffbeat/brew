<?php global $smof_data; ?>
<?php $brew_options = $smof_data['breadcrumb']; ?>
	<?php if ( $brew_options == '1' ) { ?>
  		<?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>
	<?php } ?>