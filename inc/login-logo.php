<?php
function sh_starter_login_logo() {
  ?>
  <style>
    body.login div#login h1 a {
      background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/logo.png);
      background-size: contain;
      width: 320px;
      height: 80px;
    }
  </style>
  <?php
}
add_action('login_enqueue_scripts', 'sh_starter_login_logo');
