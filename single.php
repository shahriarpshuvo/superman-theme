<?php get_header() ?>

<main class="single__post">

  <?php while (have_posts()) : the_post(); ?>
    <div class="single__post--thumbnail">
      <div class="single__post--thumbnail-img" style=" background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
    </div>
    <div class="content-box">
      <div class="single__post--meta text-center mt-4 mb-4">
        <h1 class="single__post--meta-title"><?php the_title(); ?></h1>
        <p>
          <i class="icofont-clock-time"></i> Posted on <a href="#"><?php the_time('M d, Y'); ?></a>
        </p>
      </div>

      <div class="single__post--content mt-2 mb-4">
        <?php the_content(); ?>
      </div>
    </div>

  <?php endwhile; ?>
  <?php get_footer(); ?>