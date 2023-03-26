<header class="l-header">
    <nav class="l-header__top">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/c-logo.png'); ?>" class="c-logo" alt="nazucaのロゴ">
        <?php wp_nav_menu( array( 'theme_location' => 'header-navigation', 'menu_class' => 'p-nav', 'container' => false, 'depth' => 1 ) ); ?>
    </nav>
    <div class="c-backtop">
        <div class="allow_wrapper">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/Vector.png'); ?>" alt="上矢印">
        </div>
        <div class="c-backtop__circle"><small>back&nbsp;&nbsp;to</small><p>TOP</p></div>
    </div>
    <article class="l-header__content">
        <div class="p-hImg">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-hImg__onepole.jpg'); ?>" alt="LPワンポールテント" class="p-hImg__onepole">
            <div class="c-accessories">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/tizu.png'); ?>" alt="マップ" class="c-accessories__map">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/rantan.png'); ?>" alt="ランタン" class="c-accessories__rantan">
            </div>            
        </div>
        <div class="p-hArticle">
            <h3>LPワンポールテント</h3>
            <p class="c-hCatch">コンパクトに持ち運べて、どこでも設営可能。アウトドア初心者にもおすすめのテント</p>
            <div class="c-hPrice">
                <i class="fa-solid fa-yen-sign fa-3x"></i><span>18,800円</span></p>
            </div>
            <div class="c-btnWrap">
                <button class="c-hBtn">
                    <a href="<?php get_permalink(222) ?>" class="c-hBtn__link"></a>
                    <span class="c-hBtn__text">商品詳細へ</span>
                    <div class="c-hAllow">
                        <span class="c-hAllow__item"></span>
                    </div>
                </button>
            </div>
        </div>
    </article>

</header>
