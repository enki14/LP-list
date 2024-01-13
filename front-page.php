<?php get_header(); ?>
<main>
    <h2><span>自作のランディングページ<br>ギャラリーへようこそ</span></h2>
    <?php 
        $args = array(
            'post_type' => 'lp-production',
            'posts_per_page' => '-1'
        );
        $counter = 0;

        $pro = new WP_Query($args);
        if($pro->have_posts()): while($pro->have_posts()): $pro->the_post(); $counter++;
            $slide = get_field('slide_show');
            $slide_1 = $slide['slide_1'];
            $slide_2 = $slide['slide_2'];
            $slide_3 = $slide['slide_3'];
            $slide_4 = $slide['slide_4'];
            $slide_5 = $slide['slide_5'];
            $comp = get_field('complete');
            $desc = get_field('description');
            $blue_font = get_field('blue_font');
    ?>
    <section id="lOne" class="l-one">
        <?php if ($counter <= 1): ?>
            <p class="new_tag pc_tab">新</p>
        <?php endif; ?>
        <h4 class="c-blueTitle"><span><?php echo $blue_font ?></span></h4>
        <div class="p-img">
            <svg width="0" height="0" style="position:absolute; top:0; left:0;" xmlns="http://www.w3.org/2000/svg">
                <clipPath id="clipPath<?php echo $counter ?>" class="path_<?php echo $counter ?>">
                    <path d="M464.39 216.028C423.894 394.686 341.711 451.856 227.371 437.564C-43.2735 403.733 3.45339 163.622 3.45339 163.622C3.45339 163.622 -1.31166 -11.4628 250.001 1.63873C368.405 1.63873 494.956 81.1806 464.39 216.028Z" 
                    fill="#D9D9D9"/>
                        <!-- animate -->
                        <animate attributeName="d" dur="2s" repeatCount="indefinite" 
                        values="
                        M464.39 216.028C423.894 394.686 341.711 451.856 227.371 437.564C-43.2735 403.733 3.45339 163.622 3.45339 163.622C3.45339 163.622 -1.31166 -11.4628 250.001 1.63873C368.405 1.63873 494.956 81.1806 464.39 216.028Z;
                        M471.627 226.646C488.262 347.291 375.622 456.011 237.307 446.006C98.9916 436.001 -17.0284 369.292 2.9866 226.646C23.0016 84 76.0641 46.5388 237.307 7.28601C398.549 -31.9668 454.992 106.001 471.627 226.646z"/>
                    </path>
                </clipPath>
            </svg>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php if(isset($slide_1['url'])): ?>
                    <div class="swiper-slide">
                        <div class="svg_container">
                            <svg viewBox="0 0 470 440" class="svg_content" xmlns="http://www.w3.org/2000/svg">
                                <image href="<?php echo esc_url($slide_1['url']) ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" clip-path="url(#clipPath<?php echo $counter ?>)" alt="<?php echo esc_attr($slide_1['alt']) ?>">
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($slide_2['url'])): ?>
                    <div class="swiper-slide">
                        <div class="svg_container">
                            <svg viewBox="0 0 470 440" class="svg_content" xmlns="http://www.w3.org/2000/svg">
                                <image href="<?php echo esc_url($slide_2['url']) ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" clip-path="url(#clipPath<?php echo $counter ?>)" alt="<?php echo esc_attr($slide_2['alt']) ?>">
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($slide_3['url'])): ?>
                    <div class="swiper-slide">
                        <div class="svg_container">
                            <svg viewBox="0 0 470 440" class="svg_content" xmlns="http://www.w3.org/2000/svg">
                                <image href="<?php echo esc_url($slide_3['url']) ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" clip-path="url(#clipPath<?php echo $counter ?>)" alt="<?php echo esc_attr($slide_3['alt']) ?>">
                            </svg>
                        </div>                        
                    </div>
                <?php endif; ?>
                <?php if(isset($slide_4['url'])): ?>
                    <div class="swiper-slide">
                        <div class="svg_container">
                            <svg viewBox="0 0 470 440" class="svg_content" xmlns="http://www.w3.org/2000/svg">
                                <image href="<?php echo esc_url($slide_4['url']) ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" clip-path="url(#clipPath<?php echo $counter ?>)" alt="<?php echo esc_attr($slide_4['alt']) ?>">
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($slide_5['url'])): ?>
                    <div class="swiper-slide">
                        <div class="svg_container">
                            <svg viewBox="0 0 470 440" class="svg_content" xmlns="http://www.w3.org/2000/svg">
                                <image href="<?php echo esc_url($slide_5['url']) ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" clip-path="url(#clipPath<?php echo $counter ?>)" alt="<?php echo esc_attr($slide_5['alt']) ?>">
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div> 
        <article class="p-article">
            <?php if ($counter <= 1): ?>
                <p class="new_tag_sp sp">新</p>
            <?php endif; ?>
            <h3><span><?php the_title() ?></span></h3>
            <p class="c-season">完成時期：&emsp;<?php echo $comp ?></p>
            <p class="c-comment">
                <?php echo $desc ?>
            </p>
            <p class="c-detailLink"><a href="<?php the_permalink() ?>">詳しく確認する</a><i class="fa-solid fa-arrow-up-right-from-square"></i></p>
        </article>
    </section>
    <div class="l-cloudy">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lp-top/pc/c-cloudy.png'); ?>" alt="大きな雲">
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>