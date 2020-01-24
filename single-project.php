<?php get_header(); ?>

<main class="blog">
    <?php while(have_posts()): the_post(); ?>
        <section class="container sp">
        <div class="sp-header">
            <h1 class="sp-header__title"><?php the_title(); ?></h1>
            <div class="sp-post__meta">
                <div class="sp-post__meta-date">
                <?php echo get_the_time( 'd M, Y' ) ." | ".get_the_time( 'h:i A' ); ?> 
                </div>

                <?php if ( $post_tags ):?>
                    <div class='sp-post__meta-tags'>
                    <?php foreach( $post_tags as $tag ) : ?>
                    <span><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="sp-header__icon"><i class="icon ion-ios-more"></i></div>
        </div>

        <?php if(get_the_post_thumbnail_url()): ?>
            <div class="sp-thubnails">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Blog Post Thumbnail">
            </div>
        <?php endif; ?>

        
        <div class="sp-content">
            <?php the_content(); ?>
        </div>
        </section>
    <?php endwhile; ?>
  </main>

  <?php get_footer() ?>