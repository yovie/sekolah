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
    
    register_post_type( 'slide',
        array(
            'labels' => create_label('Slide'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slide'),
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array( 'title', 'editor', 'thumbnail'),
        )
    );

    register_post_type( 'menu',
        array(
            'labels' => create_label('Menu'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'menu'),
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
            'supports' => array( 'title', 'editor', 'thumbnail'),
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

    register_post_type( 'seting',
        array(
            'labels' => create_label('Seting'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'seting'),
            'menu_icon' => 'dashicons-admin-generic',
            'supports' => array( 'title', 'editor'),
        )
    );
}


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