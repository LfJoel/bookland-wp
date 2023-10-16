<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Bookland</title> -->
  <!-- styles -->
  <link rel="shortcut icon" href="/wp-content/themes/bookland/assets/images/logo.png">
  <link rel="stylesheet" href="/wp-content/themes/bookland/assets/images/book.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,200;1,300;1,400&family=Roboto&display=swap" rel="stylesheet">
  <?php
  wp_head();
  ?>
</head>

<body>

  <header>
    <div class="container fixed-top">

      <nav class="navbar navbar-expand-lg" aria-label="Third navbar example">
        <div class="container-fluid">
          <?php
            if(function_exists('the_custom_logo')){
              // the_custom_logo();
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo =wp_get_attachment_image_src($custom_logo_id);
              // print_r($logo);
            }
          ?>
          <img src="<?php echo $logo[0] ?>">
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse justify-content-end" id="navbarsExample03">
            <?php
            wp_nav_menu(
              array(
                'menu' =>'primary',
                'container' =>'',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id = "" class="navbar-nav  align-center mb-2 mb-lg-0">%3$s</ul>'
              )
            );
            ?>
          </div>
        </div>
      </nav>
    </div>
  </header>