<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8.4.0/swiper-bundle.min.css">
    <link rel="shortcut icon" href="<?php 
        if(is_single(546)):
            echo esc_url(get_template_directory_uri() .'/images/rental-server/favicon_rental.png');
        elseif(is_single(184)):
            echo esc_url(get_template_directory_uri() .'/images/cosmetics/l-header__logo--fav.png'); 
        elseif(is_single('lptento-series') || is_single('lp-onepole') || is_single('lp-solo') || is_single('lp-tworoom') || is_single('corporate') || 
        is_singular('event_info') || is_singular('corporation') || is_singular('compliance')):
            echo esc_url(get_template_directory_uri() .'/images/tento/tab/logo_mini.png'); 
        endif; ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <?php if(is_front_page() || is_home()): ?>
    <header class="l-header">
        <div class="l-header__inner">
            <!-- ロゴとナビゲーションのラッパー -->
            <div class="l-header__top">
                <!-- ロゴ -->
                <a href="<?php echo esc_url('https://ukigumo-x.net'); ?>" class="p-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-top/pc/ukigumo-logo.png'); ?>" alt="nazucaのロゴ">
                </a>
                <!-- ナビゲーション -->
                <nav class="p-nav">
                    <a href="<?php echo esc_url('https://ukigumo-x.net/production/lp%e5%88%b6%e4%bd%9c%e4%b8%80%e8%a6%a7/') ?>">このページの制作解説<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </nav>
            </div>
            <h1 class="l-header__title">ランディングページ集</h1>
        </div>
    </header>
    <?php
        elseif(is_singular('lp-production')):
            get_template_part('templates/header/header', 'production'); 
        elseif(is_single(184)):
            get_template_part('templates/header/header', 'cosmetics');
        elseif(is_single(212)):
            get_template_part('templates/header/header', 'tento');      
        elseif(is_single(546)):
            get_template_part('templates/header/header', 'rental');      
        endif; 
    ?>