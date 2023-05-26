    <?php if(is_front_page() || is_home() || is_singular('lp-production')): ?>
        <footer class="l-footer">
            <div class="l-footer__content">
                <ul class="p-sns">
                    <li class="sstw">
                        <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                        target="_blank" rel="nofollow noopener">
                            <i class="fa-brands fa-twitter fa-lg"></i>
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
        endif; 
    ?>
    <script src="//unpkg.com/swiper@8.4.0/swiper-bundle.min.js"></script>
    <?php if(is_single(184)): ?> 
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/main.js'); ?>" type="text/javascript" defer></script>
    <?php elseif(is_single(212)): ?>
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/tento.js'); ?>" type="text/javascript" defer></script>    
    <?php elseif(is_front_page() || is_home()): ?>
        <script src="<?php echo esc_url(get_template_directory_uri() . '/js/topPage.js'); ?>" type="text/javascript" defer></script>
    <?php endif; ?>
    <script>
        // const image = document.getElementById('image');
        // const container = document.getElementById('container');
        
        // container.addEventListener('DOMContentLoaded', () => {
        //     image.style.clipPath = 'path("M472.635 219.645C440 343 376.63 449.01 238.315 439.005C100 429 25.9908 358.29 3.99505 219.645C-18.0006 81 78.0008 0.285156 238.315 0.285156C398.629 0.285156 505.27 96.2903 472.635 219.645Z")';
        // });
        
        
        // container.addEventListener('DOMContentLoaded', () => {
        //     image.style.clipPath = 'path("M471.627 226.646C488.262 347.291 375.622 456.011 237.307 446.006C98.9916 436.001 -17.0284 369.292 2.9866 226.646C23.0016 84 76.0641 46.5388 237.307 7.28601C398.549 -31.9668 454.992 106.001 471.627 226.646Z")';
        // });
    </script>

    <?php wp_footer(); ?>
</body>
</html>

