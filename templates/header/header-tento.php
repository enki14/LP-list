<header>
    <nav class="nav_top">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/c-logo.png'); ?>" class="c-logo" alt="nazucaのロゴ">
        <div class="drawer">
            <input type="checkbox" id="navToggle" class="nav-toggle">
            <label for="navToggle" id="burger" class="btn-burger">
                <span class="icon"></span>
            </label>
            <div id="navArea" class="p-navArea">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'header-navigation', 
                    'menu_class' => 'p-nav',
                    'before' => '<img src="' . esc_url(get_template_directory_uri() . '/images/tento/pc/navplus.png'). '" class="pc" alt="プラスマーク">'
                ) ); ?>
            </div>
        </div>
    </nav>
    <div class="c-backtop">
        <div class="allow_wrapper">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/Vector.png'); ?>" alt="上矢印">
        </div>
        <div class="c-backtop__circle"><small>back&nbsp;&nbsp;to</small><p>TOP</p></div>
    </div>
    <div class="swiper-container h_swiperCon">
        <div class="swiper-wrapper">
        <?php 
            global $wpdb;
            $sql = $wpdb->get_results("select * from tento_header");

            foreach($sql as $data):
        ?>
            <div class="l-header swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri() . $data->bg_img); ?>" class="l-header__img" alt="<?php echo $data->t_name ?>の背景写真">
                <article class="l-header__content <?php echo $data->accessories ?>">
                    <div class="p-hImg">
                        <img src="<?php echo esc_url(get_template_directory_uri() . $data->content_img); ?>" alt="LP<?php echo $data->t_name ?>" class="p-hImg__tento">
                        <div class="c-accessories">
                        </div>
                    </div>
                    <div id="p-harticle" class="p-hArticle">
                        <h3>LP<?php echo $data->t_name ?></h3>
                        <p class="c-hCatch"><?php echo $data->catch ?></p>
                        <div class="c-hPrice">
                            <i class="fa-solid fa-yen-sign fa-3x"></i><span><?php echo number_format($data->price) ?>円</span>
                        </div>
                        <div class="c-btnWrap">
                            <button class="c-hBtn">
                                <a href="<?php echo get_permalink($data->postid) ?>" class="c-hBtn__link"></a>
                                <span class="c-hBtn__text">商品詳細へ</span>
                                <div class="allow_wrap">
                                    <div class="c-hAllow">
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
            <div class="l-header swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/l-header__camp.jpg'); ?>" class="l-header__img" alt="キャンプファイア">
                <article class="l-header__content hFour_content">
                    <p class="c-hFour">
                        <span>今日、アウトドア需要は</span><span>高まっています。</span><br>
                        <span>LPテントシリーズは、</span><br>
                        <span>従来のテントにはない</span><span>高い快適性や</span><br>
                        <span>豪華さを備え、</span><span>アウトドアでの宿泊体験を</span><br>
                        <span>より魅力的なものにします。</span>
                    </p>
                </article>
            </div>
        </div>
        <div id="h_pagination" class="swiper-pagination"></div>
    </div>
</header>


