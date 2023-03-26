<?php get_header() ?>
<main>
    <section class="l-size">
        <h2 class="l-size__title sectionTitle">Size</h2>
        <div class="l-size__content content_wrap">
            <div class="sectionContent">
                <?php echo do_shortcode('[capacity]'); ?>
            </div>
        </div>
    </secition>
    <seciton class="l-durability">
        <h2 class="l-durability__title sectionTitle">Durability<p class="c-sectionTitle">耐久性</p></h2>
        <div class="l-durability__content content_wrap">
            <div class="sectionContent">
                <div class="p-dura">
                    <article class="p-dura__article">
                        <div class="c-duraImg">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/material.jpg'); ?>" alt="撥水素材">
                            <small>LPソロテント（ブルー）の撥水効果を実証した結果です。</small>
                        </div>
                        <div class="c-explanation">
                            <p>
                                LPテントシリーズはシリコンコーディングを採用し、これにより耐熱・防水・耐摩耗に優れた万能な強度を実現いたしました。<br>
                                ××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
                            </p>
                            <ul class="c-explanation__ul">
                                <li>××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××</li>
                                <li>××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××</li>
                                <li>××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××</li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="p-dura">
                    <article class="p-dura__article">
                        <div class="c-duraImg">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/structure.jpg'); ?>" alt="ツールームテントの室内">
                            <small>LPツールームテント（ベージュ）の室内構造</small>
                        </div>
                        <div class="c-explanation">
                            <p>
                                フレームは、テントの形状を保持するために重要な役割を果たします。LPテントシリーズでは伸縮性のあるフィバーグラスを採用し、強度や軽量性をベースに実験を重ねていきました。<br>
                                ××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××<br>
                                ××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="l-setup">
        <h2 class="l-setup__title sectionTitle">How to set up<p class="c-sectionTitle">設営方法</p></h2>
        <div class="l-setup__content content_wrap">
            <div class="sectionContent">
                <div class="p-setImg">
                    <div class="c-twoColumn">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-setImg--1.jpg'); ?>" class="c-setImage" alt="設営風景１">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/speechBubble.png'); ?>" class="c-setCatch" alt="吹き出し">
                    </div>
                    <div class="c-oneColumn">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-setImg--2.jpg'); ?>" class="c-setImage" alt="設営風景２">
                    </div>
                </div>
                <div class="c-middleImg">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/checkPoint.png'); ?>" alt="チェック項目">
                </div>
                <div class="p-setVideo">
                    <p class="c-videoInfo"><i class="fa-solid fa-video"></i>詳しくはこちらの<span>動画</span>でご確認ください</p>
                    <iframe width="680" height="381" src="https://www.youtube.com/embed/eEo0HMEGL5k" title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="l-detail">
        <div class="l-detail__content sectionContent">
            <div class="c-detailTitle">
                <h2>Detailed</h2>
                <p>詳細情報</p>
            </div>
            <article class="p-individual">
                <div class="p-individual__img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-detail__one.jpg'); ?>" alt="ワンポールテント">
                    <h3>LPワンポールテント</h3>
                </div>
                <div class="p-individual__spec">
                    <dl>
                        <dt>品番</dt><dd></dd>
                        <dt>重量</dt><dd></dd>
                        <dt>サイズ</dt><dd></dd>
                        <dt>カラー</dt><dd></dd>
                    </dl>
                    <div class="c-btnWrap">
                        <button class="c-detailBtn">
                            <a href="<?php get_permalink(222) ?>" class="c-detailBtn__link"></a>
                            <span class="c-detailBtn__text">商品詳細へ</span>
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </section>
</main>
<?php get_footer() ?>