<?php get_header(); ?>


<main class="page-404">

        
<div class="container">
  <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/404.gif'; ?>">
  <h2>The good news is, you've found a hidden page and the bad news is there is nothing in it. <br> Please go back to home.</h2>
  <a href="<?php echo site_url('/') ?>" class="btn btn-main">
      <i class="icon ion-md-arrow-round-back"></i> Back to Home
  </a>
</div>
</main>


<?php get_footer(); ?>