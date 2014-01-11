<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div class="homebanner">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>BREW for Wordpress</h1>
        <p>A free and open-source starter theme based on Bones and Bootstrap 3</p>
        <p><a href="http://www.github.com/slightlyoffbeat/brew" target="_blank" class="btn btn-default btn-lg">Github</a>
          <a href="http://danvswild.com" target="_blank" class="btn btn-lg btn-primary">Author</a></p>
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="container">
  <div class="row text-center">
    
    <!--Section 1-->
    <div class="col-sm-4 about">
      <i class="fa fa-laptop fa-4x light-gray"></i>
      <h3>Built with Bootstrap</h3>
      <p>Enjoy Wordpress with all of the benefits of Bootstrap.  Quickly build themes while utilizing one of the most powerful frameworks available on the web.</p>
    </div>
    
    <!--Section 2-->
    <div class="col-sm-4 about">
      <i class="fa fa-github-square fa-4x light-gray"></i>
      <h3>Free and Open-Source</h3>
      <p>BREW pulls together some of the best open source projects in to one awesome starter theme.  Feel free to fork, edit and contribute.</p>
    </div>
    
    <!--Section 3-->
    <div class="col-sm-4 about">
      <i class="fa fa-flag fa-4x light-gray"></i>
      <h3>Over 350 Icons</h3>
      <p>Font Awesome 4 support is already baked in.  Quickly and easily place icons in menus, buttons, headers, lists and more.</p>
    </div>
    
  </div>
</div>

<?php get_footer(); ?>
