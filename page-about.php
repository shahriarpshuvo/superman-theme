<?php get_header(); ?>
<main class="aboutme">

    <div class="aboutme__header container">
        <div class="aboutme__img">
            <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/profile.jpg' ?>" alt=""
                srcset="">
        </div>
        <h2 class="aboutme__name">Shahriar Parvez Shuvo</h2>
        <p><span class="aboutme__email">contact@spshuvo.com</span>J.J.B. Sheikh Mujibur Hall,
            Khulna University, <br> Khulna, Bangladesh-9208
        </p>
        <a href="<?php echo site_url('/contact'); ?>">✉️ Send Message</a>
    </div>

    <?php
        $about = new WP_Query(
            array(
                'posts_per_page' => -1,
                'post_type' => 'about',
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
            )
        ); 
    ?>

    <?php 
        while ($about->have_posts()):
            $about->the_post();
            the_field('about_options');
            echo "<br>";
            if(in_array( '0', get_field('about_options'))):
    ?>

    <div class="aboutme__summary">
        <div class="container">
            <h2><?php the_field('about_title') ?></h2>
            <p><?php the_field('about_summary'); ?></p>
        </div>
    </div>

    <?php   endif;
        endwhile;
        wp_reset_postdata();
    ?>

    <div class="aboutme__box pb-5">
        <div class="container">
            <div class="card-columns">
                <div class="card education">
                    <div class="card-content">
                        <h2 class="card-title">Education</h2>
                        <div class="row">

                        <?php 
                            while ($about->have_posts()):
                                $about->the_post();
                                if(in_array( '1', get_field('about_options'))):
                        ?>

                            <div class="col-3">
                                <div class="edu__img">
                                    <img
                                        src="<?php the_field('about_icon'); ?>' ?>">
                                </div>
                            </div>
                            <div class="col-9 mb-4">
                                <h5 class="edu__org"><?php the_field('about_title'); ?></h5>
                                <h6 class="edu__degree"><?php the_field('about_subtitle'); ?></h6>
                                <p><?php the_field('about_timeline'); ?></p>

                            </div>

                            <?php   endif;
                                endwhile;
                                wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                </div>


                <div class="card skillsets">
                    <div class="card-content">
                        <h2 class="card-title">Tools & Skills</h2>
                        <div class="row">
                            
                        <?php 
                            while ($about->have_posts()):
                                $about->the_post();
                                if(in_array( '2', get_field('about_options'))):
                        ?>

                            <div class="col-3">
                                <div class="project__icon">
                                    <span>🎨</span>
                                </div>
                            </div>
                            <div class="col-9 mb-5">
                                <h5 class="card-info__title"><?php the_field('about_title'); ?></h5>

                                <?php 
                                    $about_tools =  get_field('about_tools');
                                    foreach( $about_tools as $tool ) : ?>
                                        <span class="card-info__tags"><?php echo $tool ?></span>
                                <?php 
                                    endforeach; ?>

                            </div>

                        <?php   endif;
                            endwhile;
                            wp_reset_postdata();
                        ?>

                        </div>
                    </div>
                </div>

            

                <div class="card course">
                    <div class="card-content">
                        <h2 class="card-title">Course and Certificates</h2>
                        <div class="row">

                        <?php 
                            while ($about->have_posts()):
                                $about->the_post();
                                if(in_array( '5', get_field('about_options'))):
                        ?>

                            <div class="col-3">
                                <div class="project__icon">
                                    <span>🎓</span>
                                </div>
                            </div>
                            <div class="col-9 mb-5">
                                <h5 class="card-info__title"><?php the_field('about_title')?>
                                <?php 
                                    $about_tags =  get_field('about_tag');
                                    foreach( $about_tags as $tag ) : ?>
                                        <span class="card-info__tags"><?php echo $tag ?></span>
                                <?php 
                                    endforeach; ?>
                                </h5>

                                <p class="card-info__summary"><?php the_field('about_summary') ?></p>
                                <a class="card-info__link" href="<?php the_field('about_link') ?>" target="_blank">Check
                                    Validity</a>


                            </div>
                            
                            <?php   endif;
                                endwhile;
                                wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                </div>

                <div class="card project">
                    <div class="card-content">
                        <h2 class="card-title">Projects</h2>
                        <div class="row">

                            <?php 
                                while ($about->have_posts()):
                                    $about->the_post();
                                    if(in_array( '6', get_field('about_options'))):
                            ?>

                            <div class="col-3">
                                <div class="project__icon">
                                    <span>📂</span>
                                </div>
                            </div>
                            <div class="col-9 mb-5">
                                <h5 class="card-info__title"><?php the_field('about_title')?>
                                <?php 
                                    $about_tags =  get_field('about_tag');
                                    foreach( $about_tags as $tag ) : ?>
                                        <span class="card-info__tags"><?php echo $tag ?></span>
                                <?php 
                                    endforeach; ?>
                                </h5>
                                <p class="card-info__summary"><?php the_field('about_summary') ?></p>
                                <a class="card-info__link" href="<?php the_field('about_link') ?>" target="_blank">Learn More</a>
                            </div>
                            
                            <?php   endif;
                                endwhile;
                                wp_reset_postdata();
                            ?>


                        </div>
                    </div>
                </div>

                <div class="card experience">
                    <div class="card-content">
                        <h2 class="card-title">Experience</h2>
                        <div class="row">

                            <?php 
                                while ($about->have_posts()):
                                    $about->the_post();
                                    if(in_array( '3', get_field('about_options'))):
                            ?>
                            <div class="col-3">
                                <div class="project__icon">
                                    <span>💼</span>
                                </div>
                            </div>
                            <div class="col-9 mb-5">
                                <h5 class="card-info__title"><?php the_field('about_title')?>
                                <?php 
                                    $about_tags =  get_field('about_tag');
                                    foreach( $about_tags as $tag ) : ?>
                                        <span class="card-info__tags"><?php echo $tag ?></span>
                                <?php 
                                    endforeach; ?>
                                </h5>
                                <h6><?php the_field('about_timeline'); ?></h6>
                                <p class="card-info__summary">
                                    <?php the_field('about_summary'); ?>
                                </p>
                            </div>
                            
                            <?php   endif;
                                endwhile;
                                wp_reset_postdata();
                            ?>


                        </div>
                    </div>
                </div>

                <div class="card achievements">
                    <div class="card-content">
                        <h2 class="card-title">Achievements</h2>
                        <div class="row">

                            <?php 
                                while ($about->have_posts()):
                                    $about->the_post();
                                    if(in_array( '4', get_field('about_options'))):
                            ?>

                            <div class="col-3">
                                <div class="project__icon">
                                    <span>🏆</span>
                                </div>
                            </div>
                            <div class="col-9 mb-5">
                                <h5 class="card-info__title"><?php the_field('about_title')?>
                                <?php 
                                    $about_tags =  get_field('about_tag');
                                    foreach( $about_tags as $tag ) : ?>
                                        <span class="card-info__tags"><?php echo $tag ?></span>
                                <?php 
                                    endforeach; ?>
                                </h5>
                                <h6><?php the_field('about_timeline'); ?></h6>
                                <p class="card-info__summary">
                                    <?php the_field('about_summary'); ?>
                                </p>
                            </div>

                            <?php   endif;
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-main">Contact for CV</a>
    </div>
</main>
<?php get_footer(); ?>