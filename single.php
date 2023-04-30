<?php get_header() ?>
    <?php 
        if(is_single('cosmetics')):
            get_template_part('templates/post/single', 'cosmetics');
        elseif(is_single('lptento-series')):
            get_template_part('templates/post/single', 'tento');   
        elseif(is_single('lp-onepole') || is_single('lp-solo') || is_single('lp-tworoom')):
            get_template_part('templates/post/single', 'lptento');
        elseif(is_single('corporate')):
            get_template_part('templates/post/single', 'coTento');   
        elseif(is_singular('event_info')):
            get_template_part('templates/post/single', 'tentoEvent');    
        elseif(is_singular('corporation')):
            get_template_part('templates/post/single', 'nazuca_co');                   
        elseif(is_singular('compliance')):
            get_template_part('templates/post/single', 'compliance'); 
        elseif(is_tag('event/*')):
            get_template_part('templates/post/single', 'event');                      
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
