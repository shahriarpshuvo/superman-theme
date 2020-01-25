<?php get_header(); ?>
    <main class="projects-single">
    <?php while(have_posts()): the_post(); ?>
        <div class="projects-single__header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="project__header">
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
                            <h2 class="project__header-title"><?php the_title(); ?></h2>
                            
                            <p> 
                                <span class="project__header-tools">Tools:</span>
                                <?php 
                                    $project_tools = get_field('project_tools'); foreach($project_tools as $tools): 
                                ?>
                                <span class="project__header-tools--name">
                                    <?php echo $tools; ?>
                                </span>
                                <?php endforeach; ?>

                            </p>

                            <p class="project__header-info-1--link">
                                <a href="<?php the_field('project_link'); ?>" target="_blank">🔗 External Link</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 projects-single__header-2">
                        <div class="project__header">
                            <div class="project__header-info">
                                <h4 class="project__header-info--title">Project Summary:</h4>
                                <p><?php the_field('project_summary'); ?></p>
                                <p class="project__header-info--date">
                                    <span>Timeline:</span> 
                                    <?php the_field('project_timeline') ?>
                                </p>
                                <p class="project__header-info--link">
                                    <a href="<?php the_field('project_link'); ?>" target="_blank">🔗 External
                                    Link</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <!-- <?php if(get_the_post_thumbnail_url()): ?>
            <div class="sp-thubnails">
                <img src="<?php //the_post_thumbnail_url(); ?>" alt="Blog Post Thumbnail">
            </div>
        <?php endif; ?> -->

        
        <div class="post-content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    </main>
<?php get_footer() ?>