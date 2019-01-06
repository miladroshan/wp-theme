<?php
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
}

function register_my_menus() {
    register_nav_menus(
      array(
        'top_menu' => __( 'منوی بالا' ),
        'main_menu' => __( 'منوی اصلی' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  $args = array(
    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
    'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
    'description'   => '',
          'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );

    if ( function_exists( 'register_sidebar' ) ) { 

      add_action( 'widgets_init', 'theme_slug_widgets_init' );
      function theme_slug_widgets_init() {
          register_sidebar( array(
              'name' => __( 'تبلیغات بالا', 'theme-slug' ),
              'id' => 'top_ads',
              'description' => __( 'تبلیغات با سایز 300 در 250 پیکسل، بالای محتوی صفحه اصلی', 'theme-slug' ),
              'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
          ) );
      }

    }
?>
