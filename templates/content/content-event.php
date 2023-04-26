<div class="p-schedule sectionContent">
    <h4>イベントの日程</h4>
    <?php 
        $args = array(
            'post_type' => 'event_info',
            'meta_key' => 'start_DT',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'numberposts' => -1
        );
        $the_query = new WP_Query($args);
        if( $the_query->have_posts() ): 
            while( $the_query->have_posts() ): $the_query->the_post();
                $start_dt =  get_field('start_DT');
                $end_dt = get_field('end_DT');
                $genre = get_field('event_genre');
                $start = explode(',', $start_dt);
                $end = explode(',', $end_dt);
    ?>
    <?php if($start[0] === $end[0]): ?>
        <dl>
            <dt class="c-timeDay 
            <?php 
                if($genre == 'ファミリーキャンプ'){
                    echo 'puple';
                }elseif($genre == '登山'){
                    echo 'green';
                }elseif($genre == '講習会'){
                    echo 'blue';
                }elseif($genre == 'その他'){
                    echo 'yellow';
                }
            ?>">
                <p class="c-timeDay__date"><?php echo $start[0] ?></p>
                <p class="c-timeDay__time">
                    <span class="start"><?php echo $start[1] ?></span>
                    <span class="triangle pc_tab_inline">▶</span>
                    <span class="today_end pc_tab_inline"><?php echo $end[1] ?></span>
                    <p class="c-timeDay__triangle sp">▼</p>                    
                    <span class="end pRight sp"><?php echo $end[1] ?></span>
                </p>
            </dt>
            <dd class="c-schTitle">
                <p class="c-schTitle__tag">
                <?php 
                    // wp_query内でのカスタム投稿のタグの取得にはget_the_termsを使う
                    $tags = get_the_terms(get_the_ID(), 'tag');
                    // エラー表示は出さないようにしておく
                    if($tags && !is_wp_error($tags)){
                        foreach($tags as $tag){
                            // リンク付きではないのでget_term_linkで設定する
                            // 'tag'は register_taxonomy で設定したタクソノミー名
                            // タクソノミーはカテゴリやタグなどの分類方法を表す
                            echo '<a href="' .get_term_link($tag->slug, 'tag'). '">#' .$tag->name. '</a> ';
                        }
                    }
                ?>
                </p>
                <h5 class="c-schTitle__ttl"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
            </dd>
        </dl>
    <?php else: ?>
        <dl>
            <dt class="c-timeDay 
            <?php 
                if($genre == 'ファミリーキャンプ'){
                    echo 'puple';
                }elseif($genre == '登山'){
                    echo 'green';
                }elseif($genre == '講習会'){
                    echo 'blue';
                }elseif($genre == 'その他'){
                    echo 'yellow';
                }
            ?>">
                <p class="c-timeDay__date"><?php echo $start[0] ?></p>
                <p class="c-timeDay__time">
                    <span class="start"><?php echo $start[1] ?></span>
                </p>
                <p class="c-timeDay__triangle">▼</p>
                <p class="c-timeDay__date"><?php echo $end[0] ?></p>
                <p class="c-timeDay__time">
                    <span class="end"><?php echo $end[1] ?></span>
                </p>
            </dt>
            <dd class="c-schTitle">
                <p class="c-schTitle__tag">
                <?php 
                    $tags = get_the_terms(get_the_ID(), 'tag');
                    if($tags && !is_wp_error($tags)){
                        foreach($tags as $tag){
                            echo '<a href="' .get_term_link($tag->slug, 'tag'). '">#' .$tag->name. '</a> ';
                        }
                    }
                ?>
                </p>
                <h5 class="c-schTitle__ttl"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
            </dd>
        </dl>
    <?php endif; endwhile; wp_reset_postdata(); endif; ?>
    <p class="p-schedule__archive"><a href="<?php echo get_post_type_archive_link('event_info'); ?>">もっと見る...</a></p>
</div>