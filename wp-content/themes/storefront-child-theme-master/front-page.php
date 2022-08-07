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
<section class="primary-container" aria-hidden>
    <div class="secondary-container" aria-hidden>
        <div class="carousel-offers" aria-label="Featured Products">
            <div class="title">
                <?php echo __('Vendas') ?>
            </div>
            <div class="carousel-offers_container">
                <div class="product-card">
                    <div class="imagem-card">
                        <img src="" alt="Product Imagen">                        
                    </div>

                    <div class="info-card-container">
                        <span> <?php __('Adicionar à cotação') ?> </span>
                        <span> <?php __('Jogo de Disco em Duralumínio') ?> </span>
                    </div>

                    <a href="#"> <?php __('Ver Produto') ?> </a>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
    
