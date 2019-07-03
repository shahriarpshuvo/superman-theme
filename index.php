<?php get_header(); ?>


<main class="blog-page">
  <div class="page-banner">
    <div class="content-box">
      <h2 class="page-banner__title">Page Banner Title</h2>
      <p class="page-banner__subtitle">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
      </p>
    </div>
  </div>

  <div class="content-box">


    <article class="blog-post">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="blog-post__box">

            <div class="blog-post__thumbnails" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
            </div>

            <div class="blog-post__details">
              <h1 class="blog-post__details-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h1>
              <div class="blog-post__details-meta">
                <p>
                  <i class="icofont-clock-time"></i> Posted on
                  <a href="#"><?php the_time('M d, Y'); ?></a>
                </p>
              </div>
              <p class="blog-post__details-excerpt">
                <?php echo wp_trim_words(get_the_content(), 32); ?> <span><a href="<?php the_permalink() ?>">Read More</a></span>
              </p>

            </div>
          </div>



        <?php endwhile; ?>
      </article>

      <?php
      //TODO: Pagination 
      ?>
    <?php
    else : ?>

      <h1 class="text-center">Nothing to show.</h1>

    <?php endif; ?>
  </div>


  <?php get_footer(); ?>