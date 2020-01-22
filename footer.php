<footer>
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png'; ?>" alt="" srcset="">
          <a href="#" class="footer-brand__title">
            <h2>Mr.spShuvo</h2>
          </a>
        </div>
        <div class="subscriber-form">
          <form>
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" placeholder="Email Address">
            <button class="btn btn-accent">Subscribe</button>
          </form>
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
      
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-copyright">
              <div>&copy; <a href="#">Mr.spShuvo.com</a> 2020 | <span class="emoji-icon" title="code">
                  < 💻 >
                </span> with <span class="emoji-icon" title="coffee">{ ☕️ }</span></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu">
              <ul class="d-flex justify-content-end">
                <li class="ml-5">
                  <a href="<?php echo site_url('/about-me') ?>">About Me</a>
                </li>
                <li class="ml-5">
                  <a href="<?php echo site_url('/privacy-policy') ?>">Privacy Policy</a>
                </li>
                <li class="ml-5">
                  <a href="<?php echo site_url('/contact') ?>">Contact Me</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>