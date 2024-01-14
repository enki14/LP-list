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
            <svg width="454" height="427" viewBox="0 0 454 427" style="position:absolute; top:0; left:0;" xmlns="http://www.w3.org/2000/svg">
                <clipPath id="clipPath<?php echo $counter ?>" class="path_<?php echo $counter ?>">
                    <path>
                        <!-- animate -->
                        <animate attributeName="d" dur="15s" repeatCount="indefinite" attributeType="XML" 
                        values="
                        M458.698 216.5C428 324 348 429 231.698 429C115.397 429 36.6986 397 4.69846 216.5C-27.3016 35.9997 156 -12.5214 231.698 3.99968C359.999 32.0012 489.397 108.999 458.698 216.5Z;
                        M454 212.5C454 329.861 352.369 425 227 425C101.631 425 0 329.861 0 212.5C0 28 227 0 227 0C227 0 400 0 454 212.5Z;
                        M459 215.5C459 408 357.368 428 232 428C106.631 428 36.9999 396 4.99985 215.5C-27.0002 35.0002 133 -13 232 3.0002C331 19.0004 459 23.0002 459 215.5Z;
                        M458.739 212.5C498.326 316 357.107 425 231.739 425C106.37 425 36.7388 393 4.7387 212.5C-27.2614 32 110.308 1.46351e-05 231.739 0C353.169 -1.46351e-05 419.152 109 458.739 212.5Z;
                        M458.699 212.5C420 324 375.397 402 231.699 425C88 448 36.6988 393 4.69867 212.5C-27.3014 32 110.268 1.46351e-05 231.699 0C353.129 -1.46351e-05 497.397 101 458.699 212.5Z;
                        M458.698 216.5C428 324 348 429 231.698 429C115.397 429 36.6986 397 4.69846 216.5C-27.3016 35.9997 156 -12.5214 231.698 3.99968C359.999 32.0012 489.397 108.999 458.698 216.5Z;">
                        </animate>
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