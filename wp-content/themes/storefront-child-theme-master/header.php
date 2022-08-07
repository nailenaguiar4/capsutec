<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
            
    <!-- swiper -->
    <?php if (is_home()) { ?>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <?php } ?>

    <!-- Lightbox -->
    <?php if (is_single()) { ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.min.js" integrity="sha512-FDbnUqS6P7md6VfBoH57otIQB3rwZKvvs/kQ080nmpK876/q4rycGB0KZ/yzlNIDuNc+ybpu0HV3ePdUYfT5cA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.es5.min.js" integrity="sha512-ssPi1cTYTwYV0e6IRdIId4ytENOrTDvixXo8l0DaTBAwYw9yD6rk9HU06pWRCoSWSRKwrucdVS/2fMC1getgcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.umd.min.js" integrity="sha512-2pp0/kD6a6gBsvL19QqDQPzDAESHtRw5Z+QrcoKfp+DH66Lx88A3QTdT/9NmBfT7ctvka24NgzpYqC4TQLTNQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/css/lg-autoplay.min.css" integrity="sha512-LlHSkMTvyRwh1YjzXwk6bxjdt3huGhCyK1vlCC6f7Db/g+2sYXz2YNasyZHnMUgykqPksmD/44DIINhqpWBjig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/css/lightgallery-bundle.min.css" integrity="sha512-lgRFGedXdci5Ykc5Wbgd8QCzt3lBmnkWcMRAS8myln2eMCDwQBrHmjqvUj9rBcKOyWMC+EYJnvEppggw1v+m8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/css/lightgallery.min.css" integrity="sha512-Szyqrwc8kFyWMllOpTgYCMaNNm/Kl8Fz0jJoksPZAWUqhE60VRHiLLJVcIQKi+bOMffjvrPCxtwfL+/3NPh/ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php } ?>

    <?php wp_head(); ?>

</head>
<body>
<?php wp_body_open(); ?>

  <header class="header primary-container" >
  <!-- wrapper for language change -->
    <div class="primary-container language-change" aria-hidden>
      <div class="secondary-container language-change-container" aria-hidden>
        <div class="icon-container" aria-hidden>
        <!-- icon to change language -->
          <img  src="<?php echo get_theme_file_uri() . '/assets/img/Global-Icon.png' ?>"  
                alt="globar-icon" 
                class="globar-icon" 
                aria-hidden
            />
          <!-- buttons to change language -->
          <a href="#">
            <img  src="<?php echo get_theme_file_uri() . './assets/img/Br-icon.png' ?>" 
                  alt="Brazil flag Icon" 
                  aria-label="Change language to Portuguese">
          </a>

          <a href="#">
            <img  src="<?php echo get_theme_file_uri() . './assets/img/Ep-icon.png' ?>" 
                  alt="Spain flag Icon" 
                  aria-label="Change language to Spanish">
          </a>

          <a href="#">
            <img  src="<?php echo get_theme_file_uri() . './assets/img/Us-icon.png' ?>" 
                  alt="US flag Icon" 
                  aria-label="Change language to English">
          </a>

        </div>      
      </div>
    </div>
     
    <!-- The menu structure belongs to the repository:
    https://github.com/AlexWebLab/bootstrap-5-wordpress-navbar-walker -->
    
    <nav class="navbar navbar-expand-md navbar-light secondary-container">
      <div class="container-fluid">
          <?php echo Logo() ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="main-menu">
              <?php
              wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>
          </div>
      </div>
    </nav>
  </header>