<?PHP

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    function theme_enqueue_styles(){
        wp_enqueue_style('sanitize', get_template_directory_uri(). '/css/sanitize.css', array(), false, 'all');
        wp_enqueue_style('my_styles', get_template_directory_uri().'/css/mystyle.css', array('sanitize'), '', 'all');
        // wp_enqueue_style('google_icons', '//fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone', array(), '', 'all');
        // wp_enqueue_style('material_icons', '//fonts.googleapis.com/icon?family=Material+Icons+Outlined', array(), '', 'all');

    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


    function theme_enqueue_scripts(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
        wp_enqueue_script('awesome_js', '//kit.fontawesome.com/38f9c31fea.js', array(), '');
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

    
    function register_my_menu(){
        register_nav_menu('header-navigation', 'Header Navigation');
    }
    add_action('after_setup_theme', 'register_my_menu');



    //固定ページのサムネイルカラム追加
    function customize_manage_pages_columns($columns) {
        $columns['thumbnail'] = __('Thumbnail');
        return $columns;
    }
    add_filter( 'manage_pages_columns', 'customize_manage_pages_columns' );
    
    //固定ページのサムネイル画像表示
    function customize_manage_pages_custom_column($column_name, $post_id) {
        if ( 'thumbnail' == $column_name) {
            $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
        } if ( isset($thum) && $thum ) {
            echo $thum;
        } else {
            echo __('None');
        }
    }
    add_action( 'manage_pages_custom_column', 'customize_manage_pages_custom_column', 10, 2 );


    //投稿ページのサムネイルカラム追加
    function customize_manage_posts_columns($columns) {
        $columns['thumbnail'] = __('Thumbnail');
        return $columns;
    }
    add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );
    
    //投稿ページのサムネイル画像表示
    function customize_manage_posts_custom_column($column_name, $post_id) {
        if ( 'thumbnail' == $column_name) {
            $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
        } if ( isset($thum) && $thum ) {
            echo $thum;
        } else {
            echo __('None');
        }
    }
    add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );



    // 抜粋の３点表示
    function new_excerpt_more($more) {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');



    function custom_wpcf7_validate_kana($result,$tag){
        $tag   = new WPCF7_Shortcode($tag);
        $name  = $tag->name;
        $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

        //全角カタカナ又は平仮名の入力チェック
        if ($name === "your-kana") {
            if(!preg_match("/^[ア-ヶー]+$/u", $value)) {
                $result->invalidate( $tag,"全角カタカナで入力してください。");
            }
        }


        return $result;
    }
    add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
    add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);



    // OGP設定
    function my_meta_ogp(){
        if (is_front_page() || is_home() || is_singular()) {
 
            $ogp_image = get_template_directory_uri() . '/pc/Exclude.png';
            $twitter_site = 'RBtIpvNr6OkIKiX';
            $twitter_card = 'summary_large_image';
            $facebook_app_id = '586095538608500';
             
            global $post;
            $ogp_title = '';
            $ogp_description = '';
            $ogp_url = '';
            $html = '';
            if (is_singular()) {
                // 記事＆固定ページ
                setup_postdata($post);
                $ogp_title = $post->post_title;
                $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
                $ogp_url = get_permalink();
                wp_reset_postdata();
            } elseif (is_front_page() || is_home()) {
                // トップページ
                $ogp_title = get_bloginfo('name');
                $ogp_description = get_bloginfo('description');
                $ogp_url = home_url();
            }
             
            // og:type
            $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
             
            // og:image
            if (is_singular() && has_post_thumbnail()) {
            $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            $ogp_image = $ps_thumb[0];
            }
             
            // head内に出力するOGPタグ
            $html = "\n";
            $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
            $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
            $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
            $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
            $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
            $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
            $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
            $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
            $html .= '<meta property="og:locale" content="ja_JP">' . "\n";
             
            if ($facebook_app_id != "") {
                $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
            }
             
            echo $html;
        }
    }
    add_action('wp_head', 'my_meta_ogp');


    


  


