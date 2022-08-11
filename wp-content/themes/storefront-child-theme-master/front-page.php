<?php

    // QUERY FOR OFFERS
	//--------------------------------------
	include_once('offers-query.php');

?>

<!-- HEADER -->
<?php get_header() ?>

 <!-- Swiper Slider Home-->
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

<!-- section to display products on sale -->
<section class="primary-container offers-section" aria-hidden>
    <div class="secondary-container" aria-hidden>
        <div class="carousel-offers" aria-label="Featured Products">
            <div class="title">
                <?php echo __('Vendas') ?>
            </div>
            <div class="carousel-offers_container">
            <?php if ($wc_query->have_posts()) : ?>
                <?php while ($wc_query->have_posts()):
                            $wc_query->the_post(); ?>
                                <div class="product-card">
                                    <div class="imagem-card">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url();  ?>" alt="Product Imagen"></a>                        
                                    </div>

                                    <div class="info-card-container">
                                        <span> <?php echo __('Adicionar à cotação') ?> </span>
                                        <span> <?php echo __('Jogo de Disco em Duralumínio') ?> </span>
                                    </div>

                                    <a href="#"> <?php echo __('Ver Produto') ?> </a>                                                    
                                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); // (5) ?>
                <?php else:  ?>
                    <p>
                        <?php _e( 'No Products' ); // (6) ?>
                    </p>
            <?php endif; ?>                
            </div>
            <button id="prev" disabled="disabled">prev</button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</section>

<section 
    class="primary-container doubts" 
    style="background-image: url( <?php echo get_theme_file_uri() . '/assets/img/Section-Doubts_background.png'; ?>) ; ">

    <div class="secondary-container doubts-container">
        <h3 aria-hidden ><?php echo _e('Tem alguma dúvida?') ?></h3>
        <button type="button" 
                aria-label="button to go to contact page" 
                class="btn btn-blue" >        
            <a href="#"><?php echo _e('Escreva para nós') ?></a>
        </button>
    </div>

</section>

<section class="primary-container categories-section">
    <div class="secondary-container">
        <div class="categories">
            <div class="title">
                <?php echo __('Categorias') ?>
            </div>
            <div class="categories_container">

            <!-- Function to fetch categories -->
            <!-- location: function.php -->
                <?php woocommerce_product_category(); ?>    
            </div>

        </div>
    </div>
</section>

<section class="primary-container time">
    <div class="secondary-container">
      <div class=" time-container">
      <i class="fa-solid fa-clock"></i>
      <span><?php echo __('Horário de funcionamento') ?></span>
      <div class="time-container-child">
            <ul>
                <li><?php echo __('Segunda à Quinta 7h45 às 12h00') ?></li>
                <li><?php echo __('13h15 às 18h00 Sexta 7h45 às 17h00') ?></li>
            </ul>
        </div>
      </div>
    </div>
</section>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14643.676775282507!2d-51.97292!3d-23.427286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41f4abfaff04afa2!2sCapsutec%20Encapsuladoras%20e%20Equipamentos%20Farmac%C3%AAuticos!5e0!3m2!1spt-BR!2sbr!4v1660158020778!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<?php get_footer();     ?>
    
