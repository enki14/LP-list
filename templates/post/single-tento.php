<?php get_header() ?>
<main>
    <section class="l-size">
        <h2 class="l-size__title sectionTitle"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/Size.png'); ?>" alt="サイズ"></h2>
        <div class="l-size__content sectionContent">
            <?php echo do_shortcode('[capacity]'); ?>
        </div>
    </secition>
    <seciton class="l-durability">
        <h2 class="l-durability__title sectionTitle"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/Durability.png'); ?>" alt="耐久性"></h2>
        <div class="l-durability__content sectionContent">
            <div class="p-dura">
                <article class="p-dura__article">
                    <article>
                        <div class="c-duraImg">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/material.jpg'); ?>" alt="撥水素材">
                            <small>LPソロテント（ブルー）の撥水効果を実証した結果です。</small>
                        </div>
                        <div class="c-explanation">
                            <p class="c-explanation__before">
                                LPテントシリーズはシリコンコーディングを採用し、これにより耐熱・防水・耐摩耗に優れた万能な強度を実現いたしました。<br>
                                ××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
                            </p>
                            <ul>
                                <li>××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××</li>
                                <li>××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××</li>
                                <li>××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××</li>
                            </ul>
                        </div>
                    </article>
                </article>
            </div>
            <div class="p-dura">
                <article class="p-dura__article">
                    <article>
                        <div class="c-duraImg">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/structure.jpg'); ?>" alt="ツールームテントの室内">
                            <small>LPツールームテント（ベージュ）の室内構造</small>
                        </div>
                        <div class="c-dura__explanation">
                            <p>
                                フレームは、テントの形状を保持するために重要な役割を果たします。LPテントシリーズでは伸縮性のあるフィバーグラスを採用し、強度や軽量性をベースに実験を重ねていきました。<br>
                                ××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××<br>
                                ××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
                            </p>
                        </div>
                    </article>
                </article>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>