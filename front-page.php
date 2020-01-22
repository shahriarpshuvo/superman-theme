<?php get_header(); ?>
<main class="home">
    <section class="hero-sec">
      <div class="container">
        <div class="hero-box">
          <img class="hero-box__img" src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png'; ?>" alt="" srcset="">
          <h1 class="hero-box__title">Softcore Coder, Hardcore Businessman.</h1>
          <!-- <p class="hero-box__text">Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Impedit a quia quidem. Ipsa facere mollitia itaque rem. Minus,
            laudantium numquam. Quod ducimus sapiente debitis eos asperiores excepturi
            temporibus.</p> -->
          <a href=""></a>
        </div>
      </div>

      <div class="hero-footer">
        <div class="hero-footer__nav">
          <ul>
            <li class="nav-item">
              <a href="<?php echo site_url('/about-me') ?>"> 😎 &nbsp; About Me</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/coding') ?>"> 👨🏻‍💻 &nbsp; Coding</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/design') ?>"> 👨‍🎨 &nbsp; Design</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/business') ?>"> 👨‍💼 &nbsp; Business</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/journal') ?>"> ✍️ &nbsp; Journal</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/projects') ?>"> 🗂 &nbsp; Projects</a>
            </li>
          </ul>
        </div>
        <div class="social-menu">
          <ul>
            <li><a href="#"><i class="icon ion-logo-linkedin"></i></a>
            </li>
            <li><a href="#"><i class="icon ion-logo-github"></i></a>
            </li>
            <li><a href="#"><i class="icon ion-logo-facebook"></i></a>
            </li>
            <li><a href="#"><i class="icon ion-logo-twitter"></i></a>
            </li>
            <li><a href="#"><i class="icon ion-ios-mail-unread"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
<?php get_footer('home'); ?>