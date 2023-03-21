<?php get_header() ?>
    <?php 
        if(is_single('cosmetics')):
            get_template_part('templates/post/single', 'cosmetics');
        elseif(is_single('lptento-series')):
            get_template_part('templates/post/single', 'tento');            
        else:
            if ( have_posts() ): while ( have_posts() ): the_post();
    ?>
    <body <?php body_class() ?>>
        <header>
    
        </header>
        <main>
            <h1>ここはデォルト投稿ページどす</h1>
        </main>
        <footer>
            
        </footer>
        <?php wp_footer(); ?>
    </body>
    <?php endwhile; endif; endif; ?>
</html>
