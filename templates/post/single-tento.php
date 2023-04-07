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
    <section class="l-detail content_wrap">
        <div class="l-detail__content sectionContent">
            <div class="c-detailTitle">
                <h2>Detailed</h2>
                <p>詳細情報</p>
            </div>
            <?php echo do_shortcode('[detailTento]'); ?>
        </div>
    </section>
    <section class="l-apply">
        <div class="l-apply__cachback content_wrap">
            <span>Nazuca</span>
            <div class="p-applyImg sectionContent">
                <div class="p-applyImg__top">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-applyImg__top.png'); ?>" alt="Nazucaアプリ">
                </div>
                <div class="p-applyImg__middle">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-applyImg__mdl.png'); ?>" alt="lets shopping">
                </div>
                <div class="p-applyImg__btm">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-applyImg__btm.png'); ?>" alt="10%キャッシュバック">
                </div>
            </div>
            <div class="p-applyBadge sectionContent">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/google-play-badge.png'); ?>" alt="google playのバッジ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/appstore-badge.png'); ?>" alt="applestoreのバッジ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/l-apply__microsoft.png'); ?>" alt="microsoftのバッジ">
            </div>
        </div>
        <div class="l-apply__procedure">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-procedure.png'); ?>" class="c-proImg" alt="アプリストアの登録手順">
            <div class="c-btnWrap">
                <div class="absolute">
                    <button class="c-proBtn">
                        <a href="#" class="c-proBtn__link"></a>
                        <div class="c-proBtn__inside">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/nazucaApply.png'); ?>" alt="nazucaアプリミニ">
                            <span>について詳しく</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="l-event">
        <div class="l-event__title">
            <h2>Camp Event</h2>
            <p class="c-sectionTitle">キャンプイベント</p>
        </div>
        <div class="l-event__pickup">
            <article class="p-eCard">
                <div class="article_wrap">
                    <article class="p-eCard__article">
                        <h4>Climbing</h4>
                        <p class="c-subTitle">登山のいろは</p>
                        <p class="c-message">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <div class="c-btnWrap">
                            <button class="c-entBtn">
                                <a href="#" class="c-entBtn__link"></a>
                                <span class="c-entBtn__text">詳しく</span>
                                <div class="c-hAllow">
                                    <span class="c-hAllow__item"></span>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-eCard__top1.jpg'); ?>" class="c-img_1" alt="地図を確認">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-eCard__top2.jpg'); ?>" class="c-img_2" alt="富士山を拝む">
            </article>
            <article class="p-eCard">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-eCard__mdl1.jpg'); ?>" class="c-img_1" alt="川釣り">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-eCard__mdl2.jpg'); ?>" class="c-img_2" alt="家族でBBQ">
                <div class="article_wrap">
                    <article class="p-eCard__article">
                        <h4>Family</h4>
                        <p class="c-subTitle">ファミリーキャンプ</p>
                        <p class="c-message">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <div class="c-btnWrap">
                            <button class="c-entBtn">
                                <a href="#" class="c-entBtn__link"></a>
                                <span class="c-entBtn__text">詳しく</span>
                                <div class="c-hAllow">
                                    <span class="c-hAllow__item"></span>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>
            </article>
            <article class="p-eCard">
                <div class="article_wrap">
                    <article class="p-eCard__article">
                        <h4>Survival</h4>
                        <p class="c-subTitle">自然と生きる</p>
                        <p class="c-message">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <div class="c-btnWrap">
                            <button class="c-entBtn">
                                <a href="#" class="c-entBtn__link"></a>
                                <span class="c-entBtn__text">詳しく</span>
                                <div class="c-hAllow">
                                    <span class="c-hAllow__item"></span>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-eCard__btm1.jpg'); ?>" class="c-img_1" alt="水難訓練">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/p-eCard__btm2.jpg'); ?>" class="c-img_2" alt="キャンプで寛ぐ">
            </article>
        </div>
        <div class="l-event__schedule">
            <?php get_template_part('templates/content/content', 'event') ?>
        </div>
    </section>
    <section class="l-lineup">
        <h2 class="l-lineup__title sectionTitle">Line Up<p class="c-sectionTitle">その他のテント</p></h2>
        <div class="l-lineup__slide swiper">
            <div class="swiper-wrapper">
            <?php 
                $html = 
                '<article class="p-slideCard swiper-slide">
                    <img src="' . esc_url(get_template_directory_uri() . '/images/tento/pc/25779492_s 1.png').'" alt="コーポレートソロテント">
                    <p class="p-slideCard__title">コーポレートソロテント</p>
                    <div class="c-spec spec_margin">
                        <dl><dt>重量</dt><dd>840<span>g</span></dd></dl>
                        <dl><dt>サイズ</dt><dd>210<span>cm</span> × 200<span>cm</span> × 200<span>cm</span></dd></dl>
                        <dl><dt>カラー</dt>
                            <dd>
                                <div class="yellow_box"></div>
                                <div class="green_box"></div>
                            </dd>
                        </dl>
                        <div class="c-btnWrap">
                            <button class="c-luBtn">
                                <a href="#" class="c-luBtn__link"></a>
                                <span class="c-luBtn__text">商品詳細はこちら</span>
                            </button>
                        </div>
                    </div>
                </article>';
                for($i = 1; $i <= 10; $i++){
                    echo $html;
                }
            ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
</main>
<?php get_footer() ?>