<?php get_header() ?>
<!-- Banner -->

<?php 

// Produtos relacionados query

$id_num = get_the_ID();
$term = get_the_terms($id_num, 'categoria_produto')[0]->name;
$slug = get_the_terms($id_num, 'categoria_produto')[0]->slug;
$taxonomy = get_the_terms($id_num, 'categoria_produto')[0]->taxonomy;

$args = array(
    'post_type' => 'produto',
    'posts_per_page' => 4,
    'orderby' => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'categoria_produto',
            'field' => 'name',
            'terms'    => $term,
        )
        
    ),

    
);

$query = new WP_Query( $args );

?>

<div class="primary-container banner-pages">
    <div class="secondary-container  flex-column">
        <h1><?php the_title(); ?></h1>
        <span>Vocês está em: <a href="<?php home_url(); ?>">Home</a> > <a href="<?php echo home_url() . '/' . $taxonomy . '/' . $slug ; ?>"><?php echo  $term; /*Mostrar título da categoria do produto*/ ?></a> > <?php the_title(); ?></span>
    </div>
</div>

<section class="primary-container produto">
    <div class="secondary-container flex produto-container">
        <div class="produto-info-container flex-column">
            <h2 class="h2-bold bold text-gray">Diferenciais produto</h2>
            <div class="content-produto flex-column">
                <div class="content">
                    <?php the_content(); ?>
                </div>
                
                <!-- Mostrar botão de download manual se tiver um manual -->
                <?php 
                if (get_field('manual')) {
                    ?>

                    <div class="download-button">
                        <img src="" alt="">
                        <a href="<?php echo get_field('manual') ?>" class="btn-manual-download" download="manual">Download manual de montagem</a>
                    </div>

                <?php
                } ?>
                
                <a href="<?php echo home_url() . '/' . $taxonomy . '/' . $slug ; ?>" class="back">< Voltar para <?php echo $slug ?></a>
            </div>            
        </div>
        <div class="imagens-container flex">
            <div class="imagen-container">
                <a href="<?php echo get_the_post_thumbnail_url() ?>" data-gallery="example-gallery" data-toggle="lightbox"><img src="<?php echo get_the_post_thumbnail_url() ?>" /></a>
            </div>
            
        <!-- Galeria -->
            <div class="galeria lightGallery">
                <?php $galeria = get_field( 'galeria' ); ?>
                <ul>
                    <?php
                    foreach ( $galeria as $imagen ) {
                        ?>
                        <li><a href="<?php echo $imagen ?>" data-toggle="lightbox" data-gallery="example-gallery"><img
                                        src="<?php echo $imagen; ?>"
                                        alt=""></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
</section>


<?php 
// loop para contar postagens relacionadas e condição se os produtos relacionados aparecerem
    $count = 0;

    while ($query->have_posts()): $query->the_post();
            $count = $count + 1;
    endwhile;
//
?>

<!-- Mostrar a seção de produtos relacionados apenas se houver mais de dois posts cadastrados -->
<?php if($count > 1) { ?>
    <section class="primary-container">
        <div class="secondary-container mais-products flex-column">
            <h2 class="h3-title text-gray">Mais Produtos</h2>
            <div class="mais-produtos-container flex">

                <?php while ($query->have_posts()): $query->the_post(); ?>

                    <?php if (get_the_ID() != $id_num) {?>

                        <div class="mais-produtos-item flex-column">
                        <span class="text-sm bold text-gray"><?php the_title(); ?></span>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <a href="<?php the_permalink(); ?>" class="btn btn-gray">Ver Detalhes</a>
                        </div>
                
                <?php }

                    endwhile; ?>

            </div>
            
            
        </div>
    </section>

    <?php } ?>

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
<?php get_footer() ?>