<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Traer Meta necesaria del function.php -->
    <?php wp_head(); ?>
    <!-- Estructura Basica de Head -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo del Sitio -->
    <title>Capsutec</title>
</head>
<body>
        <!-- Cabecera/Header del Sitio -->
    <div class="select-language-header">
        <div class="select-language-container">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/L-icon.png' ?>" alt="" class="icon">
            <a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/img/en-icon.png' ?>" alt=""></a>
            <a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/img/sp-icon.png' ?>" alt=""></a>
            <a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/img/br-icon.png' ?>" alt=""></a>
        </div>
    </div>
    <header class="head_container">
            <div class="logo">
                <img src="<?php echo get_theme_file_uri() . '/assets/img/Logo.png'  ?>">
            </div>
            <nav class="menu" id="myTopnav">
                <ul>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Quem Somos</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Orçamento</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
    </header>
