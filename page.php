<?php get_header();?>

<main class="page-single">
  <?php while(have_posts()): the_post(); ?>
  <div class="page-single__header">
    <div class="container">
      <span class="page-icon"><?php the_field('page_icon_emoji'); ?></span>
      <h2 class="project__header-title"><?php the_field('page_title'); ?></h2>
      <p><?php the_field('page_description'); ?></p>
    </div>
  </div>

  <div class="post-content">
    <div class="container">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
<?php endwhile; ?>
</main>

<?php get_footer();?>