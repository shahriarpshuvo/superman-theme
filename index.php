<?php get_header(); ?>

<main class='blog'>
  <section class='container'>
    <div class='page-header'>
      <h1 class='page-header__title'>✍️ &nbsp; Journal</h1>
      <p class='page-header__about'>Sometimes, my thoughts have no limits. Sometimes, it
        becomes so powerful that I could live life only by thinking about something. Sometimes, it
        just a time-waster and, sometimes it turns out an idea that could change the world.
        Here are some of my thoughts and activities.</p>
      <div class='page-header__icon'><i class='icon ion-ios-more'></i></div>
    </div>
  </section>

  <section class='blog-sec'>
    <div class='container'>

      <?php
        $journal_featured_posts = new WP_Query(array(
          'category_name' => 'featured',
        ));
        if ($journal_featured_posts->have_posts()): 
      ?>
      <div id='featuredCarousel' class='carousel slide' data-ride='carousel'>
        <div class='featured-posts content-box carousel-inner'>
        <?php
          $count = 0;
          while ($journal_featured_posts->have_posts()):
            $journal_featured_posts->the_post();
            $count++;
            $post_tags =  get_the_tags();
        ?>
          <div class="featured-post carousel-item <?php if ($count == 1) echo 'active';?> " data-interval='8000'>
            <div class='featured-post__meta'>
              <div class='featured-post__meta-date'>
                <?php echo get_the_time( 'd M, Y' ) ." | ".get_the_time( 'h:i A' ); ?> 
              </div>
              <?php if ( $post_tags ):?>
                <div class='featured-post__meta-tags'>
                <?php foreach( $post_tags as $tag ) : ?>
                  <span><?php echo $tag->name; ?></span>
                <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>

            <div class='featured-post__title'>
              <span class='emoji-icon'>👌</span>
              <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
            </div>
            <div class='featured-post__content'>
              <?php echo wp_trim_words(get_the_content(), 44, ' ...') ?>
            </div>
            <div class='featured-post__permalink'>
              <a href='<?php the_permalink(); ?>' class='btn btn-accent'>Read More 
                <i class='icon ion-md-arrow-round-forward'></i></a>
            </div>
          </div>
          <?php endwhile?>
        </div>
        <a class='carousel-control-prev' href='#featuredCarousel' role='button' data-slide='prev'>
          <i class='icon ion-ios-arrow-dropleft-circle'></i>
          <span class='sr-only'>Previous</span>
        </a>
        <a class='carousel-control-next' href='#featuredCarousel' role='button' data-slide='next'>
          <i class='icon ion-ios-arrow-dropright-circle'></i>
          <span class='sr-only'>Next</span>
        </a>
      </div>
      <?php endif;
        wp_reset_postdata();
        wp_reset_query();
      ?>

      <div class='blog-posts content-box'>
        <div class='row'>
          <?php
            query_posts('cat=-2&posts_per_page=-1');
            while (have_posts()): the_post(); 
              $post_tags =  get_the_tags();
            ?>
          <div class='col-md-6'>
            <article class='blog-post'>
              <div class='blog-post__meta'>

              <?php if ( $post_tags ):?>
                <div class='blog-post__meta-tags'>
                <?php foreach( $post_tags as $tag ) : ?>
                  <span><?php echo $tag->name; ?></span>
                <?php endforeach; ?>
                </div>
              <?php endif; ?>
                <div class='blog-post__meta-date'>
                  <?php echo get_the_time( 'd M, Y' ) ." | ".get_the_time( 'h:i A' ); ?> 
                </div>
              </div>
              <div class='blog-post__title'>
                <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
              </div>
              <div class='blog-post__content'>
                <?php echo wp_trim_words(get_the_content(), 60, ' ...') ?>
              </div>
              <div class='blog-post__permalink'>
                <a href='<?php the_permalink();?>' class='btn btn-accent'>
                  Read More <i class='icon ion-md-arrow-round-forward'></i>
                </a>
              </div>
            </article>
          </div>
          <?php endwhile;?>

        </div>
        <div class='load-more'>
          <div class='load-more__icon'><i class='icon ion-ios-more'></i></div>
          <a href='#' class='btn btn-main loadmore__button'>Load More</a>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>