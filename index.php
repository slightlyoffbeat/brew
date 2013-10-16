<?php get_header(); ?>

    <div class="container">

			<div id="content" class="row clearfix">

						<div id="main" class="col-md-8 clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><?php
										printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>

								</header> <?php // end article header ?>

								<section class="entry-content clearfix">
									<?php the_content('dddd'); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer">
                  <div class="row">
									<p class="tags pull-left col-xs-10"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="icon-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>
                  <p class="commentnum pull-right col-xs-2"><a href="<?php comments_link(); ?>"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></a></p>
								  </div>
                </footer> <?php // end article footer ?>

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <?php // end article ?>

							<?php endwhile; ?>


                  <?php if (function_exists("emm_paginate")) { ?>
                      <?php emm_paginate(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>


							<?php endif; ?>

						</div> <?php // end #main ?>


						<?php get_sidebar(); ?>


			</div> <?php // end #content ?>

    </div> <!-- end ./container -->

<?php get_footer(); ?>
