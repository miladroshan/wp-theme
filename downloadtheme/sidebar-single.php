<aside class="sidebar">
            <!-- Start Side Advertising -->
                <?php dynamic_sidebar( 'sidebar_ads' ); ?>
            <!-- End Side Advertising -->
            <!-- Start most viewed -->
            <section class="sidebox">
                <h3>
                    پربازدیدترین ها
                </h3>
                <ul>
                <?php
                    $q=new WP_Query(
                        array(
                            "posts_per_page"=>6,
                            "meta_key"=>"views",
                            "orderby"=>"meta_value_num",
                            "order"=>"DECS"
                            ));
                    while($q->have_posts())
                    {
                        $q->the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                    }
                    wp_reset_postdata();
                ?>
                </ul>
            </section>
            <!-- End most viewed -->
            <!-- Start Text Advertising -->
            <?php dynamic_sidebar( 'text_ads' ); ?>
            <!-- End Text Advertising -->
            <!-- End Lataste Article -->
        </aside>