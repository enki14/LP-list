<footer class="l-footer">
    <div class="l-footer__main">
        <div class="p-logoArea">
            <div class="p-logoArea__content">
                <article class="c-fLogo">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/c-fLogo.png'); ?>" alt="nazucaロゴ">
                    <p>Nazuca Corporation</p>
                </article>
                <article class="c-fLogo">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tento/pc/nazucaApply.png'); ?>" alt="nazucaアプリロゴ">
                    <p class="c-logoTitle">Nazuca<span>ショッピングアプリ</span></p>
                </article>
            </div>
        </div>
        <div class="p-fLink">
                <ul class="p-fLink__sns">
                    <li>
                        <button class="c-snsBtn">
                            <a href="#" class="c-snsBtn__link"></a>
                            <span class="c-snsBtn__text">Twitter</span>
                            <i class="fa-brands fa-twitter"></i>
                        </button>
                    </li>
                    <li>
                        <button class="c-snsBtn">
                            <a href="#" class="c-snsBtn__link"></a>
                            <span class="c-snsBtn__text">FaceBook</span>
                            <i class="fa-brands fa-facebook"></i>
                        </button>
                    </li>
                    <li>
                        <button class="c-snsBtn">
                            <a href="#" class="c-snsBtn__link"></a>
                            <span class="c-snsBtn__text">Instagram</span>
                            <i class="fa-brands fa-square-instagram"></i>
                        </button>
                    </li>
                </ul>
            <ul class="p-fLink__overview">
                <?php 
                    $args = array(
                        'post_type' => 'compliance',
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'numberposts' => -1
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()): $query->the_post();
                 ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
    <div class="l-footer__copyright">
        <p>© Nazuca Corporation</p>
    </div>
</footer>