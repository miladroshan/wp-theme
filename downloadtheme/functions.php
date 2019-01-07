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

          register_sidebar( array(
              'name' => __( 'تبلیغات سایدبار', 'theme-slug' ),
              'id' => 'sidebar_ads',
              'description' => __( 'دو تبلیغ با سایز 125 در 250 در سایدبار سایت', 'theme-slug' ),
              'before_widget' => '<section class="sidebox">',
              'after_widget'  => '</section>',
              'before_title'  => '<h3>',
              'after_title'   => '</h3>',
          ) );

          register_sidebar( array(
            'name' => __( 'تبلیغات متنی', 'theme-slug' ),
            'id' => 'text_ads',
            'description' => __( 'تبلیغات متنی با تعداد 4 تبلیغ در هر باکس', 'theme-slug' ),
            'before_widget' => '<section class="text-ads">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
          'name' => __( 'درباره ما فوتر', 'theme-slug' ),
          'id' => 'aboutus_footer',
          'description' => __( 'توضیحات درباره ما در قسمت فوتر با 500 کاراکتر', 'theme-slug' ),
          'before_widget' => '<div class="about">',
          'after_widget'  => '</div>',
          'before_title'  => '<h5>',
          'after_title'   => '</h5>',
      ) );

      register_sidebar( array(
        'name' => __( 'شبکه های اجتماعی فوتر', 'theme-slug' ),
        'id' => 'social_footer',
        'description' => __( 'لینک شبکه های اجتماعی', 'theme-slug' ),
        'before_widget' => '<div class="social">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
      }

    }
?>
