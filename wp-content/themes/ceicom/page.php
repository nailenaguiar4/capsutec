<!-- Traer Header.php -->
<?php get_header(); ?>

<div class="main-container">
<div class="primary-container primary-container--products">
    <div class="category-selection-container">
        <!-- This should be dynamicaly created by using the products categories. -->
        <p><?php echo __('Categorias'); ?></p>
        <label class="product-category"><input type="checkbox"> Acessórios</label>
        <label class="product-category"><input type="checkbox"> Contagem e Conferência</label>
        <label class="product-category"><input type="checkbox"> Encapsuladoras Manuais</label>
        <label class="product-category"><input type="checkbox"> Encapsuladoras Semiautomáticas</label>
        <label class="product-category"><input type="checkbox"> Linha Veterinária</label>
        <label class="product-category"><input type="checkbox"> Multi Secadoras</label>
        <label class="product-category"><input type="checkbox"> Sistema CELP</label>
        <label class="product-category"><input type="checkbox"> Tableteiros</label>
        <label class="product-category"><input type="checkbox"> Unidades de Fechamento</label>
    </div>
    <div class="secondary-container products-container">
        <div class="product-item-container">
            <div class="product-item">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/produto1.png'; ?>" alt="Producto" class="product-img">
                <p>Nome de Equipo</p>
                <a href="#" class="btn-green" target="_blank">Orçamento</a>
            </div>
        </div>
        <div class="product-item-container">
            <div class="product-item">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/produto2.png'; ?>" alt="Producto" class="product-img">
                <p>Nome de Equipo</p>
                <a href="#" class="btn-green" target="_blank">Orçamento</a>
            </div>
        </div>
        <div class="product-item-container">
            <div class="product-item">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/produto3.png'; ?>" alt="Producto" class="product-img">
                <p>Nome de Equipo</p>
                <a href="#" class="btn-green" target="_blank">Orçamento</a>
            </div>
        </div>
        <div class="product-item-container">
            <div class="product-item">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/produto4.png'; ?>" alt="Producto" class="product-img">
                <p>Nome de Equipo</p>
                <a href="#" class="btn-green" target="_blank">Orçamento</a>
            </div>
        </div>
        <div class="product-item-container">
            <div class="product-item">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/produto5.png'; ?>" alt="Producto" class="product-img">
                <p>Nome de Equipo</p>
                <a href="#" class="btn-green" target="_blank">Orçamento</a>
            </div>
        </div>
        <div class="product-item-container">
            <div class="product-item">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/produto6.png'; ?>" alt="Producto" class="product-img">
                <p>Nome de Equipo</p>
                <a href="#" class="btn-green" target="_blank">Orçamento</a>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Traer footer.php -->
<?php get_footer(); ?>