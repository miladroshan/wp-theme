<aside class="sidebar">
            <!-- Start Lataste Article -->
            <section class="sidebox">
                <h3>
                    آخرین مطالب
                </h3>
                <ul>
                    <?php
                        $q=new WP_Query(
                            array("posts_per_page"=>6)
                        );
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
            <section class="sidebox">
                <h3>
                    پر دیدگاه ترین ها
                </h3>
                <ul>
                <?php
                    $q=new WP_Query(
                        array(
                            "posts_per_page"=>6,
                            "orderby"=>"comment_count",
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
            <!-- Start Side Advertising -->
            <section class="sidebox">
                <h3>
                    تبلیغات
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/ads-sidebar.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ads-sidebar.jpg" alt="">
            </section>
            <!-- End Side Advertising -->
            <!-- Start Text Advertising -->
            <section class="text-ads">
                <h3>
                    تبلیغات متنی
                </h3>
                <ul>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                </ul>
            </section>
            <section class="text-ads">
                <h3>
                    تبلیغات متنی
                </h3>
                <ul>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>تبلیغات متنی شما فقط با این هزینه</span>
                            <span>نام سایت شما</span>
                            <span>سایت شما</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- End Text Advertising -->
            <!-- End Lataste Article -->
        </aside>