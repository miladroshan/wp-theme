<section id="metro-box">
    <?php
    $q=new WP_Query(
        array("category_name"=>"slider_small","posts_per_page"=>12)
    );
    while($q->have_posts())
    {
        $q->the_post();
        the_post_thumbnail();
        echo "<hr>";
    }
    $q2=new WP_Query(
        array("category_name"=>"slider_big","posts_per_page"=>3)
    );
    while($q2->have_posts())
    {
        $q2->the_post();
        the_post_thumbnail();
        echo "<hr>";
    }



    ?>
        <div class="column">
            <div class="metro-item big">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt=""></a>
                    <div class="metro-content">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""></a>
                    <div class="metro-content color-blue">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt=""></a>
                    <div class="metro-content color-red">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/4.jpg" alt=""></a>
                    <div class="metro-content color-carrot">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/5.jpg" alt=""></a>
                    <div class="metro-content">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="metro-item big">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt=""></a>
                    <div class="metro-content">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/5.jpg" alt=""></a>
                    <div class="metro-content">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/4.jpg" alt=""></a>
                    <div class="metro-content color-carrot">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt=""></a>
                    <div class="metro-content color-red">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
            <div class="metro-item">
                <div class="box-img">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt=""></a>
                    <div class="metro-content color-blue">
                        <h3>
                            <a href="">تماس های رایگان با LINE: Free Calls & Messages v4.1.0</a> 
                        </h3>
                        <p>
                                LINE یکی از بهترین و پرطرفدارترین مسنجرهای عرضه شده برای اندروید است که به شما این قابلیت را می دهد به صورت کاملا رایگان با دوستان خود تماس صوتی برقرار کنید و یا به ارسال پیامک به صورت رایگان و نامحدود در هر ساعت از شبانه روز بپردازید....
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>