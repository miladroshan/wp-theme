<?php get_header(); ?>
<?php include("slider.php"); ?>
    <!-- Start Main Container -->
    <div class="main-container">
        <!-- Start Article Container -->
        <div class="main-post">
            <!-- Start Offer Box -->
            <div class="offer">
                <h3>مطالب پیشنهادی</h3>
                <div class="demo">
                    <ul>
                    <?php
                        $q3=new WP_Query(
                            array("category_name"=>"important_posts","posts_per_page"=>10)
                        );
                        while($q3->have_posts())
                        {
                            $q3->the_post();
                    ?>
                    <li><?php the_post_thumbnail(); ?><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a> <span><?php if(function_exists('the_views')) { the_views(); } ?></span></li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <!-- End Offer Box -->
            <!-- Start Advertising Box -->
            <div class="ads">
               <a href="#"><?php dynamic_sidebar( 'top_ads' ); ?></a>
            </div>   
            <!-- End Advertising Box -->
            <div class="clear"></div>

<?php
    while(have_posts())
    {
        the_post();
?>
            <!-- Start Article -->
            <article class="post">
                <header>
                    <div class="post-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                </header>
                <div class="post-content">
                    <?php the_content("") ?>
                </div>
                <footer>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub1<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-user"></span></a>
                        <div style="display:none">
                            <div id="sub1<?php the_ID(); ?>">نویسنده: <?php the_author(); ?></div>
                        </div>
                    </div>
                    
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub2<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-sitemap"></span></a>
                        <div style="display:none">
                            <div id="sub2<?php the_ID(); ?>"><?php the_category(','); ?></div>
                        </div>
                    </div>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub3<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-calendar"></span></a>
                        <div style="display:none">
                            <div id="sub3<?php the_ID(); ?>">تاریخ انتشار: <?php echo get_the_date('Y/m/d') ?></div>
                        </div>
                    </div>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub4<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-comment"></span></a>
                        <div style="display:none">
                            <div id="sub4<?php the_ID(); ?>">نظرات: <?php echo get_comments_number(); ?></div>
                        </div>
                    </div>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub5<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-tags"></span></a>
                        <div style="display:none">
                            <div id="sub5<?php the_ID(); ?>">برچسب ها: <?php the_tags(''); ?></div>
                        </div>
                    </div>
                    <div class="more-link">
                        <a href="<?php the_permalink(); ?>">ادامه مطلب</a>
                    </div>
                </footer>
            </article>
            <!-- End Article -->
<?php
    }
?>


            <!-- Start Pagination -->
            <nav class="post">
                <?php wp_pagenavi(); ?>
            </nav>
            <!-- End Pagination -->
        </div>
        <?php get_sidebar("index") ?>
        
    </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>
