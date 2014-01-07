<?php global $brew_options; ?>
<?php if ( $brew_options['author_profile'] == '1' ) { ?>


<div id="author-info" class="clearfix well">

	<div class="author-img">
 
    	<?php echo get_avatar( get_the_author_meta( 'ID' ), '96' ); ?>

    </div>
 
    <div class="author-desc">
 
        <h4><?php printf( esc_attr__( 'About %s', 'brew' ), get_the_author() );?></h4>
 
        <p><?php echo wp_kses( get_the_author_meta( 'description' ), null ); ?></p>
 
        <div class="profile-links clearfix">

        	<ul class="social-links">

            	<li><a class="author-icon" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-pencil"></i> </a></li>

        		<?php if ( get_the_author_meta( 'twitter' ) != '' )  { ?>
            	<li><a class="author-icon" target="_blank" href="<?php echo esc_url( get_the_author_meta( 'twitter' ) ); ?>"><i class="fa fa-twitter"></i> </a></li>
            	<?php } ?>

            	<?php if ( get_the_author_meta( 'facebook' ) != '' )  { ?>
            	<li><a class="author-icon" target="_blank" href="<?php echo esc_url( get_the_author_meta( 'facebook' ) ); ?>"><i class="fa fa-facebook"></i> </a></li>
            	<?php } ?>

            	<?php if ( get_the_author_meta( 'linkedin' ) != '' )  { ?>
            	<li><a class="author-icon" target="_blank" href="<?php echo esc_url( get_the_author_meta( 'linkedin' ) ); ?>"><i class="fa fa-linkedin"></i> </a></li>
            	<?php } ?>

            	<?php if ( get_the_author_meta( 'googleplus' ) != '' )  { ?>
            	<li><a class="author-icon" target="_blank" href="<?php echo esc_url( get_the_author_meta( 'googleplus' ) ); ?>"><i class="fa fa-google-plus"></i> </a></li>
            	<?php } ?>

            	<?php if ( get_the_author_meta( 'pinterest' ) != '' )  { ?>
            	<li><a class="author-icon" target="_blank" href="<?php echo esc_url( get_the_author_meta( 'pinterest' ) ); ?>"><i class="fa fa-pinterest-square"></i> </a></li>
            	<?php } ?>

    		</ul>
 
        </div>
 
    </div>
 
</div>

<?php } ?> <!-- end if -->