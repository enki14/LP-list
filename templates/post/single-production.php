<?php get_header(); ?>
<main>
    <div class="cloudy_wrap l-cloudy">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/small_cloud.png'); ?>" 
        class="cloud" alt="雲その１">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/small_cloud.png'); ?>" 
        class="cloud" alt="雲その２">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/small_cloud.png'); ?>" 
        class="cloud" alt="雲その３">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/small_cloud.png'); ?>" 
        class="cloud" alt="雲その４">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/small_cloud.png'); ?>" 
        class="cloud" alt="雲その５">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/small_cloud.png'); ?>" 
        class="cloud" alt="雲その６">
    </div>
    <div class="l-product">
        <section class="l-product__title">
            <h1><?php the_title(); ?><span><?php the_field('complete'); ?></span></h1>
        </section>
        <article class="c-point">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-pro/pc/point.png'); ?>" alt="ポイントの見出し">
            <p><?php the_field('point'); ?></p>
        </article>
        <?php 
            for($i = 1; $i <= 3; $i++):
                $detail = get_field('detail_'. $i);
                
                $detail_img = 'detail_img'. $i;
                $detail_title = 'detail_title'. $i;
                $detail_desc = 'detail_desc'. $i;

                $url = $detail[$detail_img]['url'];
                $alt = $detail[$detail_img]['alt'];
                $title = $detail[$detail_title];
                $desc = $detail[$detail_desc];

                if(empty($detail)): else:
        ?>
        <section class="l-product__one">
            <?php if($i % 2 == 0): ?>
                <?php if(empty($title) && empty($desc)): else: ?>
                    <article class="p-articleSide">
                        <?php if(empty($title)): else: ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if(empty($desc)): else: ?>
                            <p><?php echo $desc ?></p>
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
                <?php if(empty($url)): else: ?>
                    <div class="p-proSide">
                        <div class="p-proSide__img">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <?php if(empty($url)): else: ?>
                    <div class="p-proSide">
                        <div class="p-proSide__img">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(empty($title) && empty($desc)): else: ?>
                    <article class="p-articleSide">
                        <?php if(empty($title)): else: ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if(empty($desc)): else: ?>
                            <p><?php echo $desc ?></p>
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
            <?php endif; ?>
        </section>
        <?php endif; endfor; ?>
        <div class="l-product__two">
        <?php 
            for($i = 4; $i <= 5; $i++):
                $detail = get_field("detail_$i");

                $detail_img = 'detail_img'. $i;
                $detail_title = 'detail_title'. $i;
                $detail_desc = 'detail_desc'. $i;

                $url = $detail[$detail_img]['url'];
                $alt = $detail[$detail_img]['alt'];
                $title = $detail[$detail_title];
                $desc = $detail[$detail_desc];

                if(empty($detail)): else:
        ?>
            <section class="vertical">
                <?php if(empty($url)): else: ?>
                    <div class="p-proTop">
                        <div class="p-proTop__img">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(empty($title) && empty($desc)): else: ?>
                    <article class="p-articleBtm">
                        <?php if(empty($title)): else: ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if(empty($desc)): else: ?>
                            <p><?php echo $desc ?></p>
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
            </section>
        <?php endif; endfor; ?>
        </div>
        <?php 
            $url = get_field('url');
            if(empty($url)): else:
        ?>

            <article class="c-link">
            <?php if(empty($url)): else: ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank">このサイトを見る<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <?php endif; ?>
            </article>
        <?php endif; ?>
        <?php 
            $github = get_field('github');
            if(empty($github)): else:
        ?>
            <article class="c-link">
            <?php if(empty($github)): else: ?>
                <a href="<?php echo esc_url($github); ?>" target="_blank">ソースコードを確認する<i class="fa-brands fa-github"></i></a>
            <?php endif; ?>
            </article>
        <?php endif; ?>
        <?php 
            $design = get_field('layout');
            if(empty($design)): else:
        ?>
            <article class="c-link">
            <?php if(empty($design)): else: ?>
                <a href="<?php echo esc_url($design); ?>" target="_blank">デザインを確認する<i class="fa-solid fa-pen-ruler"></i></a>
            <?php endif; ?>
            </article>
        <?php endif; ?>
    </div>
    <a href="<?php echo esc_url(home_url('/')) ?>" class="history_back">TOP</a>
</main>
<?php get_footer(); ?>
