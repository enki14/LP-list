<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8.4.0/swiper-bundle.min.css">
    <link rel="shortcut icon" href="<?php 
        if(is_single(184)):
            echo esc_url(get_template_directory_uri() .'/images/cosmetics/l-header__logo--fav.png'); 
        elseif(is_single('lptento-series') || is_single('lp-onepole') || is_single('lp-solo') || is_single('lp-tworoom') || is_single('corporate') || 
        is_singular('event_info') || is_singular('corporation') || is_singular('compliance')):
            echo esc_url(get_template_directory_uri() .'/images/tento/tab/logo_mini.png'); 
        endif; ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <?php if(is_front_page() && is_home()): ?>
        <section>
            <h1>ここはLP集トップページのヘッダーです</h1>
        </section>
    <?php 
        elseif(is_single(184)):
            get_template_part('templates/header/header', 'cosmetics');
        elseif(is_single(212)):
            get_template_part('templates/header/header', 'tento');            
        endif; 
    ?>