<?php get_header(); ?>

      <div class="container">

  			<div id="content">

					<div id="main" class="col-md-8 clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1>404. Whelp...this sucks</h1>

							</header> <?php // end article header ?>

							<section class="entry-content">

								<p><?php _e( 'The page you were looking for was not found.', 'bonestheme' ); ?></p>

							</section> <?php // end article section ?>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section> <?php // end search section ?>

							<footer class="article-footer">

									<p>Look, I can see you're really upset about this. I honestly think you ought to sit down calmly, take a stress pill, and think things over. </p>

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

					</div> <?php // end #main ?>

  			</div> <?php // end #content ?>

      </div> <?php // end ./container ?>


<?php get_footer(); ?>
