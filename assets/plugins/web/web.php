<?php
/*
Plugin Name: Web Plugin
*/

function annointed_admin_bar_remove() {
    global $wp_admin_bar;
    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_node('new-content');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);


function create_label( $name ) {
    $labels = array(
        'name'                => _x( $name, 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( $name, 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( $name, 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent ' . $name, 'twentythirteen' ),
        'all_items'           => __( 'Daftar ' . $name, 'twentythirteen' ),
        'view_item'           => __( 'Tampilkan ' . $name, 'twentythirteen' ),
        'add_new_item'        => __( $name . ' Baru', 'twentythirteen' ),
        'add_new'             => __( 'Tambah ' . $name, 'twentythirteen' ),
        'edit_item'           => __( 'Edit ' . $name, 'twentythirteen' ),
        'update_item'         => __( 'Ubah ' . $name, 'twentythirteen' ),
        'search_items'        => __( 'Cari', 'twentythirteen' ),
        'not_found'           => __( 'Tidak ditemukan', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Tidak ditemukan di Trash', 'twentythirteen' ),
    );
    return $labels;
}

function create_menus() {
    
    // register_post_type( 'slide',
    //     array(
    //         'labels' => create_label('Slide'),
    //         'public' => true,
    //         'has_archive' => true,
    //         'rewrite' => array('slug' => 'slide'),
    //         'menu_icon' => 'dashicons-format-gallery',
    //         'supports' => array( 'title', 'editor', 'thumbnail'),
    //     )
    // );

    register_post_type( 'menu',
        array(
            'labels' => create_label('Menu'),
            'public' => true,
            'has_archive' => true,
            // 'rewrite' => array('slug' => 'menu'),
            'menu_icon' => 'dashicons-welcome-write-blog',
            'supports' => array( 'title', 'editor'),
        )
    );

    register_post_type( 'berita',
        array(
            'labels' => create_label('Berita'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'berita'),
            'menu_icon' => 'dashicons-format-aside',
            'supports' => array( 'title', 'editor', 'thumbnail'),
        )
    );

    register_post_type( 'kegiatan',
        array(
            'labels' => create_label('Kegiatan'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'kegiatan'),
            'menu_icon' => 'dashicons-groups',
            'supports' => array( 'title', 'editor'),
        )
    );

    register_post_type( 'galeri',
        array(
            'labels' => create_label('Galeri'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'galeri'),
            'menu_icon' => 'dashicons-images-alt2',
            'supports' => array( 'title', 'editor', 'thumbnail'),
        )
    );

    register_post_type( 'testimoni',
        array(
            'labels' => create_label('Testimoni'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimoni'),
            'menu_icon' => 'dashicons-format-chat',
            'supports' => array( 'title', 'editor', 'thumbnail'),
        )
    );

    // register_post_type( 'seting',
    //     array(
    //         'labels' => create_label('Sosial media'),
    //         'public' => true,
    //         'has_archive' => true,
    //         'rewrite' => array('slug' => 'seting'),
    //         'menu_icon' => 'dashicons-admin-users',
    //         'supports' => array( 'title', 'editor'),
    //     )
    // );
}

function sosial_media_add_menu() {
  add_menu_page( 'Seting Konten', 'Seting Konten', 'manage_options', 'custom-settings', 'sosial_media_page', 'dashicons-admin-users', 50);
}

add_action( 'admin_menu', 'sosial_media_add_menu' );

function sosial_media_page() { ?>
    <div class="wrap">
        <h1>Seting Konten</h1>
        <form method="post" action="options.php">
            <?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
        </form>
    </div>
<?php }

function setting_twitter() { ?>
        <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
        <?php }

function setting_facebook() { ?>
            <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
            <?php }

function setting_instagram() { ?>
            <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
            <?php }

function setting_youtube() { ?>
            <input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" />
            <?php }

function setting_tagline() { ?>
            <input type="text" name="tagline" id="tagline" value="<?php echo get_option('tagline'); ?>" style="width:500px" />
            <?php } 

function setting_video() { ?>
            <input type="text" name="video" id="video" value="<?php echo get_option('video'); ?>" style="width:500px" />
            <?php } 

function setting_video_title() { ?>
            <input type="text" name="video_title" id="video_title" value="<?php echo get_option('video_title'); ?>" style="width:500px" />
            <?php } 

function sosial_media_page_setup() {
    add_settings_section('section', '', null, 'theme-options');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
    add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
    add_settings_field('youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section');
    add_settings_field('tagline', 'Tagline', 'setting_tagline', 'theme-options', 'section');
    add_settings_field('video', 'Video', 'setting_video', 'theme-options', 'section');
    add_settings_field('video_title', 'Judul Video', 'setting_video_title', 'theme-options', 'section');
  
    register_setting('section', 'twitter');
    register_setting('section', 'facebook');
    register_setting('section', 'instagram');
    register_setting('section', 'youtube');
    register_setting('section', 'tagline');
    register_setting('section', 'video');
    register_setting('section', 'video_title');
}

add_action( 'admin_init', 'sosial_media_page_setup' );   

add_action( 'init', 'create_menus' );



function remove_dashboard_meta() {
    $user = wp_get_current_user();
    if (!$user -> has_cap ('manage_options'))
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
} 

add_action( 'admin_init', 'remove_dashboard_meta' ); 

function rc_scd_redirect_dashboard() {
    if( is_admin() ) {
        $screen = get_current_screen();
        if( $screen->base == 'dashboard' ) {
            wp_redirect( admin_url( 'edit.php?post_type=berita' ) );
        }
    }
}

add_action('load-index.php', 'rc_scd_redirect_dashboard' );


function my_custom_login_logo(){
    echo '<style  type="text/css"> h1 a {  background-image:url(logo.png)  !important; width:200px !important; height:200px !important; background-size:200px 200px !important; } </style>';
}

add_action('login_head',  'my_custom_login_logo');


function remove_footer_admin () {
    echo '<span id="footer-thankyou">Developed by Salam IT Solution</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


add_action('after_setup_theme','remove_core_updates');
function remove_core_updates(){
    if(! current_user_can('update_core')){return;}
    add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
    add_filter('pre_option_update_core','__return_null');
    add_filter('pre_site_transient_update_core','__return_null');
}

remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

function remove_core_updates2(){
    global $wp_version;
    return(object) array('last_checked'=> time(),'version_checked'=> $wp_version);
}
add_filter('pre_site_transient_update_core','remove_core_updates2');
add_filter('pre_site_transient_update_plugins','remove_core_updates2');
add_filter('pre_site_transient_update_themes','remove_core_updates2');

// function my_custom_admin_url($path) { 
//     return str_replace('wp-admin', 'dashboard', $path); 
// }
// add_filter('admin_url', 'my_custom_admin_url');