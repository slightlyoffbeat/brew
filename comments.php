<?php
/*
The comments page for Bones
*/

// Do not delete these lines
	if ( ! empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<div class="alert alert-help">
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'bonestheme' ); ?></p>
		</div>
	<?php
		return;
	}
?>

<?php // You can start editing here. ?>

<?php if ( have_comments() ) : ?>

  <div id="comments" class="havecomments">

	<h3><?php comments_number( __( '<span>No</span> Responses', 'bonestheme' ), __( '<span>One</span> Response', 'bonestheme' ), _n( '<span>%</span> Response', '<span>%</span> Responses', get_comments_number(), 'bonestheme' ) );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<ol class="commentlist">
		<?php wp_list_comments( 'type=comment&callback=bones_comments' ); ?>
	</ol>

	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
	<?php // If comments are open, but there are no comments. ?>
  <div id="comments" class="nocomments">
    <h3>No Comments</h3>
    <p>Be the first to start a conversation</p>
	<?php else : // comments are closed ?>
	<?php // If comments are closed. ?>
	<?php endif; ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

  <?php if(page_has_comments_nav()) : ?>

    <nav class="comment-nav clearfix">
      <div class="comment-prev">
        <?php previous_comments_link(__( '<i class="fa fa-chevron-left"></i>', 'bones' ) . '  Previous Comments') ?>
      </div>
      <div class="comment-next">
        <?php next_comments_link(__( 'Next Comments  ', 'bones' ) . '<i class="fa fa-chevron-right"></i>') ?>
      </div>
    </nav>
  <?php endif; ?>

</div> <!-- END #COMMENTS --> 

<div id="respond" class="respond-form">

  <h3 id="comment-form-title"><?php comment_form_title( __( 'Leave a Reply', 'bonestheme' ), __( 'Leave a Reply to %s', 'bonestheme' )); ?></h3>

  <div id="cancel-comment-reply">
    <p class="small"><?php cancel_comment_reply_link(); ?></p>
  </div>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <div class="alert alert-help">
      <p><?php printf( __( 'You must be %1$slogged in%2$s to post a comment.', 'bonestheme' ), '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
    </div>
  <?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

  <?php if ( is_user_logged_in() ) : ?>

  <p class="comments-logged-in-as"><?php _e( 'Logged in as', 'bonestheme' ); ?> <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e( 'Log out of this account', 'bonestheme' ); ?>"><?php _e( 'Log out', 'bonestheme' ); ?> <?php _e( '&raquo;', 'bonestheme' ); ?></a></p>

  <?php else : ?>

  <ul id="comment-form-elements" class="clearfix">

    <li>
      <label for="author"><?php _e( 'Name', 'bonestheme' ); ?> <?php if ($req) _e( '(required)'); ?></label>
      <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e( 'Your Name*', 'bonestheme' ); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    </li>

    <li>
      <label for="email"><?php _e( 'Mail', 'bonestheme' ); ?> <?php if ($req) _e( '(required)'); ?></label>
      <input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e( 'Your E-Mail*', 'bonestheme' ); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
      <small><?php _e("(will not be published)", 'bonestheme' ); ?></small>
    </li>

    <li>
      <label for="url"><?php _e( 'Website', 'bonestheme' ); ?></label>
      <input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e( 'Got a website?', 'bonestheme' ); ?>" tabindex="3" />
    </li>

  </ul>

  <?php endif; ?>

  <p><textarea name="comment" id="comment" placeholder="<?php _e( 'Your Comment here...', 'bonestheme' ); ?>" tabindex="4"></textarea></p>

  <p>
    <input name="submit" type="submit" id="submit" class="btn btn-primary" tabindex="5" value="<?php _e( 'Submit', 'bonestheme' ); ?>" />
    <?php comment_id_fields(); ?>
  </p>


  <?php do_action( 'comment_form', $post->ID ); ?>

  </form>

  <?php endif; // If registration required and not logged in ?>

</div> <!-- END #respond -->


<?php else : ?>

  <?php if ( have_comments() ) : ?>

  </div> <!-- END #COMMENTS (have comments, comments now closed) -->

  <div class="closed">
    <h3>comments are closed</h3>
  </div>

  <?php endif; ?>


<?php endif; // if you delete this the sky will fall on your head ?>

<?php $comments_by_type = &separate_comments($comments); ?>
  <?php if ( ! empty( $comments_by_type['pings'] ) ) { ?>
  <div id="pings">
    <h3>
      <?php _e( 'Trackbacks and Pingbacks:', 'bones' ); ?>
    </h3>
    <ol class="pinglist">
      <?php wp_list_comments( 'type=pings&callback=list_pings' ); ?>
    </ol>
  </div><!-- /#pings -->
  <?php } // end if ?>


