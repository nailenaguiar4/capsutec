<?php get_header() ?>
<!-- obter o título da categoria do produto -->
<?php $taxonomy = get_queried_object();
?>

<div class="primary-container banner-pages">
    <div class="secondary-container  flex-column">
        <h1><?php echo  $taxonomy->name; /*Mostrar título da categoria do produto*/ ?></h1>
        <span>Vocês está em: <?php crear_breadcrumbs() ?><?php echo  $taxonomy->name; /*Mostrar título da categoria do produto*/ ?></span>
    </div>
</div>



<section class="primary-container">
    <div class="secondary-container category-products flex-column">
        <div class="category-produtos-container flex">

            <?php  while ( have_posts() ) : the_post(); ?>
                        <div class="category-produtos-item flex-column">
                            <span class="text-m bold text-gray"><?php the_title(); ?></span>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <a href="<?php the_permalink() ?>" class="btn-taxonomy btn-brown">Ver Detalhes</a>
                        </div>
            <?php endwhile; ?>
          
        </div>     
        
    </div>
</section>

<?php get_footer() ?>