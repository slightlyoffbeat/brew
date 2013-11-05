<?php $brew_options = get_option( 'brew_options' ); ?>
  <?php if ( $brew_options['breadcrumbs'] == '1' ) { ?>
  <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>
<?php } ?>