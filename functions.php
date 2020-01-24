<?php
  function sps_scripts_load(){
    wp_enqueue_style('sps-main', get_stylesheet_directory_uri() . '/style.css', array(), "1.0.1", 'all');
    wp_enqueue_style('sps-fonts', "//fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,600|Leckerli+One&display=swap", array(), "1.0.1", 'all');
    wp_enqueue_style('sps-icons', "//unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css", array(), "1.0.1", 'all');
    wp_enqueue_style('sps-bootstrap', "//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), "1.0.1", 'all');
    wp_enqueue_style('sps-glider', get_stylesheet_directory_uri() . '/assets/css/glider.css', array(), "1.0.1", 'all');
    wp_enqueue_style('sps-stylesheet', get_stylesheet_directory_uri() . '/assets/css/sps-style.css', array('sps-fonts', 'sps-icons', 'sps-bootstrap', 'sps-glider'), "1.0.1", 'all');

    wp_enqueue_script('sps-jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), "1.0.1", true);
    wp_enqueue_script('sps-popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), "1.0.1", true);
    wp_enqueue_script('sps-bootstrapjs', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('sps-jquery', 'sps-popper'), "1.0.1", true);
    wp_enqueue_script('sps-gliderjs', '//cdn.jsdelivr.net/npm/glider-js@1/glider.min.js', array(), "1.0.1", true);
    wp_enqueue_script('sps-script', get_stylesheet_directory_uri() . '/assets/js/sps-scripts.js', array('sps-jquery', 'sps-popper', 'sps-bootstrapjs', 'sps-gliderjs'), "1.0.1", true);
  }
  add_action('wp_enqueue_scripts', 'sps_scripts_load');

  function sps_theme_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'sps_theme_features');


  function sps_custom_post_types($post_types){ ?>
    <?php get_header(); ?>
    <main class='blog'>
      <?php while(have_posts()): the_post(); ?>
        <section class='container'>
          <div class='page-header'>
            <h1 class='page-header__title'><?php the_field('page_icon_emoji'); ?> &nbsp; <?php the_field('page_title'); ?></h1>
            <p class='page-header__about'><?php the_field('page_description'); ?></p>
            <div class='page-header__icon'><i class='icon ion-ios-more'></i></div>
          </div>
        </section>
      <?php endwhile; ?>
      <section class='blog-sec'>
        <div class='container'>
          <?php
            $posts = new WP_Query(
                array(
                  'posts_per_page' => 5,
                  'post_type' => $post_types,
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                )
            );
            $count = 0;
          ?>
          <div id='featuredCarousel' class='carousel slide' data-ride='carousel'>
            <div class='featured-posts content-box carousel-inner'>
            <?php
              while ($posts->have_posts()):
                $posts->the_post();

                if(get_field('featured_post')):
                
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
              <?php endif; 
              endwhile; 
              wp_reset_postdata();
              wp_reset_query(); ?>
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
          <div class='blog-posts content-box'>
            <div class='row'>
              <?php
                while ($posts->have_posts()):
                  $posts->the_post();
                  $post_tags =  get_the_tags();
                ?>
              <div class='col-md-6 postbox'>
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
              <?php endwhile; wp_reset_postdata();
            wp_reset_query();?>
            </div>
            <div class='load-more'>
              <div class='load-more__icon'><i class='icon ion-ios-more'></i></div>
              <a href='#' class='btn btn-main loadmore__button'>Load More</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); 
  } ?>