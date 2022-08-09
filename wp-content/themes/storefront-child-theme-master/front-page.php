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
            <button id="prev">prev</button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</section>

<?php get_footer() ?>
    
