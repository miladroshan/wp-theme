
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo("name"); wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/metro.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tooltip.css">
    <!--[if IE]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrollbar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easy-ticker.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tooltip.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $("#metro-box").mCustomScrollbar({
                horizontalScroll:true,
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.demo').easyTicker({
                direction: 'up'
            });
        });
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Start Header -->
    <div class="masthead">
        <div class="main_masthead">
            <!-- Start Top Menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'top_menu',"container"=>"" ) ); ?>
            <!-- End Top Menu -->
            <!-- Start Search Box -->
            <div class="search" role="search">
                <form action="" method="">
                    <input type="text" name="" value="" placeholder="جستجوی متن مورد نظر" onfocus="this.placeholder=''" onblur="this.placeholder='جستجوی متن مورد نظر'">
                </form>
            </div>
            <!-- End Search Box -->
        </div>
    </div>
    <div id="main" role="main">
        <header>
            <!-- Start Main Navigation -->
            <nav class="nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main_menu',"container"=>"" ) ); ?>
            </nav>
            <!-- End Main Navigation -->
            <!-- Start logo -->
            <div class="logo">
               <a href="<?php bloginfo(url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" title="logo"></a>
            </div>
            <!-- End logo -->
        </header>
    <!-- End Header -->
    <div class="clear"></div>