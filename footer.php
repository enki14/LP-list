    <?php if(is_front_page() && is_home()): ?>
        <footer>
            <h2>ここはLP集トップページのフッターです</h1>
    </footer>
    <?php 
        elseif(is_single(184)):
            get_template_part('templates/footer/footer', 'cosmetics');
        endif; 
    ?>
    <script src="//unpkg.com/swiper@8.4.0/swiper-bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri() . '/js/main.js'); ?>" type="text/javascript" defer></script>
    <?php wp_footer(); ?>
</body>
</html>

