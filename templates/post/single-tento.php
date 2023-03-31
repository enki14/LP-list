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
            <div class="p-schedule sectionContent">
                <h4>イベントの日程</h4>
                <dl>
                    <dt class="c-timeDay">
                        <p class="c-timeDay__date">2023 / 3 / 6</p>
                        <p class="c-timeDay__time">
                            <span class="start">AM11:00</span>
                            <span class="triangle">▶</span>
                            <span class="end">PM16:00</span>
                        </p>
                    </dt>
                    <dd class="c-schTitle">
                        <p class="c-schTitle__tag"><a href="">#鳥来湖</a><a href="">#カヤック</a></p>
                        <h5 class="c-schTitle__ttl"><a href="#">鳥来湖カヤック体験</a></h5>
                    </dd>
                </dl>
                <dl>
                    <dt class="c-timeDay">
                        <p class="c-timeDay__date">2023 / 5 / 1</p>
                        <p class="c-timeDay__time">
                            <span class="start">AM11:00</span>
                        </p>
                        <p class="c-timeDay__triangle">▼</p>
                        <p class="c-timeDay__date">2023 / 5 / 2</p>
                        <p class="c-timeDay__time">
                            <span class="end">AM11:00</span>
                        </p>
                    </dt>
                    <dd class="c-schTitle">
                        <p class="c-schTitle__tag"><a href="">#キャンプ</a><a href="">#家族</a><a href="">#西湖</a></p>
                        <h5 class="c-schTitle__ttl"><a href="">ファミリーキャンプ2023&nbsp;&nbsp;春</a></h5>
                    </dd>
                </dl>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>