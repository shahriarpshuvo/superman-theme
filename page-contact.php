<?php get_header(); ?>

  <main class="page-single">
    <?php while(have_posts()): the_post(); ?>
    <div class="page-single__header">
      <div class="container">
        <span class="page-icon"><?php the_field('page_icon_emoji'); ?></span>
        <h2 class="project__header-title"><?php the_field('page_title'); ?></h2>
        <p><?php the_field('page_description'); ?></p>
      </div>
    </div>

    <div class="contact-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="contact__profile">
              <div class="contact__profile-img">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/profile.jpg' ?>" alt="" srcset="">
              </div>
              <div class="contact__profile-info">
                <p><span class="contact__email">contact@spshuvo.com</span> J.J.B. Sheikh Mujibur Hall,
                  Khulna University, <br> Khulna, Bangladesh-9208
                </p>
              </div>
              <div class="contact__profile-social">
                <?php get_template_part( 'template-parts/template', 'social' ); ?>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ml-auto mt-2">
            <h2 class="contact-form__title">📨 &nbsp;Contact Now!</h2>
            <hr>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>