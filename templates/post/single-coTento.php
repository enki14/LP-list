<?php get_header() ?>
    <main>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <h1>こちら --- <?php the_title() ?> --- の詳細ページです</h1>            
        <?php endwhile; endif; ?>
    </main>
<?php get_footer() ?>