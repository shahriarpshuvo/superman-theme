<?php get_header(); ?>
<main class='blog'>

    <section class="project-scroller">
        <div class="glider-contain">
            <div class="glider">
            <?php
                $project = new WP_Query(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => 'project',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                    )
                );

                while ($project->have_posts()):
                    $project->the_post();
                    if(get_field('featured_post')):
            ?>    
                <div class="featured-post">
                    <div class="featured-post__meta">
                        <?php 
                            $post_tags =  get_the_tags(); 
                                if ( $post_tags ):?>
                            <div class='sp-post__meta-tags'>
                                <?php foreach( $post_tags as $tag ) : ?>
                                    <span><?php echo $tag->name; ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="featured-post__title">
                        <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                    </div>
                    <div class="featured-post__content">
                        <?php echo wp_trim_words(get_field('project_summary'), 26, ' ...') ?>
                    </div>
                </div>
            <?php endif;  endwhile;  wp_reset_postdata(); ?>
            </div>

            <button role="button" aria-label="Previous" class="glider-prev"><i
                class="icon ion-md-arrow-round-back"></i></button>
            <button role="button" aria-label="Next" class="glider-next"><i
                class="icon ion-md-arrow-round-forward"></i></button>
            <div role="tablist" class="dots"></div>
        </div>
    </section>


    <?php while(have_posts()): the_post(); ?>
    <section class='container'>
        <div class='page-header'>
        <h1 class='page-header__title'><?php the_field('page_icon_emoji'); ?> &nbsp; <?php the_field('page_title'); ?></h1>
        <p class='page-header__about'><?php the_field('page_description'); ?></p>
        <div class='page-header__icon'><i class='icon ion-ios-more'></i></div>
        </div>
    </section>
    <?php endwhile; wp_reset_postdata(); ?>

    
    <section class="projects-sec">
        <div class="container">
            <div class="projects-box content-box">
                <div class="card-columns">
                    <?php
                        while ($project->have_posts()):
                            $project->the_post();
                            $post_tags =  get_the_tags();
                    ?>
                    <div class="card postbox">
                        <article class="project-info">
                            <div class="project-info__thumbnails">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Projects">
                            </div>
                            <div class="project-info__about">
                                <div class="project-info__meta">
                                    <div class="project-info__meta-date">
                                        <?php echo get_the_time( 'd M, Y' ) ." | ".get_the_time( 'h:i A' ); ?>
                                    </div>
                                    <?php if ( $post_tags ):?>
                                        <div class='project-info__meta-tags'>
                                            <?php foreach( $post_tags as $tag ) : ?>
                                                <span><?php echo $tag->name; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

                                <div class="project-info__title">
                                    <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                                </div>

                                <div class="project-info__content">
                                    <?php the_field('project_summary'); ?>
                                </div>

                                <div class="project-info__permalink">
                                    <a href='<?php the_permalink();?>' class='btn btn-accent'>
                                        Read More <i class='icon ion-md-arrow-round-forward'></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php 
                        endwhile
                    ?>

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