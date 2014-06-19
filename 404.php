<?php get_header(); ?>

      <div class="container">

        <div id="content">

          <div id="main" class="col-md-8 col-md-offset-2 clearfix" role="main">

            <article id="post-not-found" class="hentry clearfix">

              <header class="article-header text-center">

                <h1>404. Whelp...This is embarrassing...</h1>
                <img src="<?php bloginfo('template_directory'); ?>/library/images/hal.jpg" />
                <p>Look, I can see you're really upset about this. I honestly think you ought to sit down calmly, take a stress pill, and think things over. </p>

              </header> <?php // end article header ?>

              <section class="entry-content">

                <p><?php get_search_form(); ?></p>

              </section> <?php // end article section ?>

            </article> <?php // end article ?>

          </div> <?php // end #main ?>

        </div> <?php // end #content ?>

      </div> <?php // end ./container ?>


<?php get_footer(); ?>