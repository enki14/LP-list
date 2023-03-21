<img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/c-logo.png'); ?>" alt="nazucaのロゴ">
<?php wp_nav_menu( array( 'theme_location' => 'header-navigation', 'menu_class' => 'p-nav', 'container' => false, 'depth' => 1 ) ); ?>
<div class="c-backtop">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/Vector.png'); ?>" alt="上矢印">
    <div class="c-backtop__circle"><small>back to</small><span>TOP</span></div>
</div>
<article class="l-header__content">
    <div class="p-hImg">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-hImg__onepole.jpg'); ?>" alt="LPワンポールテント">
    </div>
    <div class="p-hArticle">
        <h2>LPワンポールテント</h2>
        <p>コンパクトに持ち運べて、どこでも設営可能。アウトドア初心者にもおすすめのテント</p>
        <a href="<?php get_permalink(222) ?>">
            <button class="c-hBtn c-hAllow">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/allow.png'); ?>" alt="右矢印">
            </button>
        </a>
    </div>
</article>
