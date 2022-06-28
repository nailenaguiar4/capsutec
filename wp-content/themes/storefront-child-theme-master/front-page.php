<!-- Traer Header.php -->
<?php get_header(); ?>
<!-- Pagina de Inicio -->

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

<!-- seccion de marcas -->
<section class="primary-container section-brands">
    <div class="secondary-container brands-container">
        <h2 class="blue"><?php echo __('Marcas'); ?></h2>
        <div class="brand-icons-container">
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (1).png' ?>" alt=""></a>
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (2).png' ?>" alt=""></a>
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (3).png' ?>" alt=""></a>
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (4).png' ?>" alt=""></a>
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (5).png' ?>" alt=""></a>
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (6).png' ?>" alt=""></a>
            <a href=""><img src="<?php echo get_theme_file_uri() . '/assets/img/brand-icon (7).png' ?>" alt=""></a>
        </div>
    </div>
</section>
<!-- Traer footer.php -->
<?php get_footer(); ?>