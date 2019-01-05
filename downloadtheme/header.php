
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
            <ul>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">تماس با ما</a></li>
                <li><a href="#">تبلیغات</a></li>
            </ul>
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
                <ul>
                    <li style="background:#2980b9;"><a href="#"><i class="fas fa-home"></i>صفحه اصلی</a></li>
                    <li style="background:#e67e22;"><a href="#"><i class="fa fa-file-download"></i>نرم افزار</a></li>
                    <li style="background:#8e44ad;"><a href="#"><i class="fa fa-gamepad"></i>بازی</a></li>
                    <li style="background:#1abc9c;"><a href="#"><i class="fa fa-check"></i>کنسول</a></li>
                    <li style="background:#c0392b;"><a href="#"><i class="fa fa-hat-wizard"></i>لوازم جانبی</a></li>
                    <li style="background:#2c3e50;"><a href="#"><i class="fa fa-video"></i>فیلم</a></li>
                </ul>
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