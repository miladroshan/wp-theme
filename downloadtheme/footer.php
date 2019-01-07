<footer class="footer-nav">
        <div class="main-footer">
        <!-- Start About Us -->
            <?php dynamic_sidebar( 'aboutus_footer' ); ?>
        <!-- End About Us -->
        <!-- Star footer social -->
            <?php dynamic_sidebar( 'social_footer' ); ?>
        <!-- End footer social -->
        <!-- Start Sponsor -->
            <div class="support">
                <h5>حامیان ما</h5>
                <ul>
                <?php
                    $q=new WP_Query(
                        array(
                            "posts_per_page"=>24,
                            "post_type"=>"support"
                            ));
                    while($q->have_posts())
                    {
                        $q->the_post();
                ?>
                <li><a title="<?php the_title(); ?>" target="_blank" href="http://<?php echo get_the_content(); ?>"><?php the_post_thumbnail(array(40,40)); ?></a></li>
                <?php
                    }
                    wp_reset_postdata();
                ?>  
                </ul>
            </div>
        <!-- End Sponsor -->
            <div class="footer-bot" role="contentinfo">
                <div class="copyright">
                    تمامی حقوق متعلق به میلاد روشن می باشد
                </div>
                <div class="ui">
                    WordPress Theme Design : Milad Roshan
                </div>
            </div>
        </div>
        
    </footer>
</body>
</html>