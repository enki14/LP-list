<header class="l-header">
    <div class="l-header__content">
        <?php 
            $header_img = get_field('header_img');
            if(!empty($header_img)): 
        ?>
            <img src="<?php echo esc_url($header_img['url']); ?>" alt="<?php echo esc_attr($header_img['alt']); ?>">
        <?php endif; ?>
    </div>
</header>