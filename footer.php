    <?php if(is_front_page() || is_home() || is_singular('lp-production')): ?>
        <footer class="l-footer">
            <div class="l-footer__content">
                <ul class="p-sns">
                    <li class="sstw">
                        <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                        target="_blank" rel="nofollow noopener">
                            <i class="fa-brands fa-x-twitter fa-lg"></i>
                        </a>
                    </li>
                    <li class="ssfb">
                        <a href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>"
                        target="_blank" rel="nofollow noopener">
                            <i class="fa-brands fa-facebook-square fa-lg"></i>
                        </a>
                    </li>
                    <li class="ssins">
                        <a href="https://www.instagram.com/jyakarisuto?ref=badge" title="<?php echo get_the_title(); ?>"
                        target="_blank" rel="nofollow noopener">
                            <i class="fa-brands fa-instagram fa-lg"></i>
                        </a>
                    </li>
                </ul>
                <p class="c-copyright">copyright, UKIGUMO-X</p>
            </div>
        </footer>
    <?php 
        elseif(is_single(184)):
            get_template_part('templates/footer/footer', 'cosmetics');
        elseif(is_single(212)):
            get_template_part('templates/footer/footer', 'tento');   
        elseif(is_single(546)):
            get_template_part('templates/footer/footer', 'rental'); 
        endif; 
    ?>
    <script src="//unpkg.com/swiper@8.4.0/swiper-bundle.min.js"></script>
    <?php if(is_single(184)): ?> 
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/main.js'); ?>" type="text/javascript" defer></script>
    <?php elseif(is_single(212)): ?>
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/tento.js'); ?>" type="text/javascript" defer></script>    
    <?php elseif(is_single(546)): ?>
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/rental.js'); ?>" type="text/javascript" defer></script>
    <?php elseif(is_front_page() || is_home()): ?>
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/topPage.js'); ?>" type="text/javascript" defer></script>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>

